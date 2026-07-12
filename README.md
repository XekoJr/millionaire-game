# Millionaire Game

A "Who Wants to Be a Millionaire" web game — a vanilla JavaScript quiz frontend backed by a Laravel API, split into `backend/` and `frontend/`, each in its own Docker container, wired together.

This repo merges two previously separate projects into one dockerized, working app:
- [millionaire-api](https://github.com/XekoJr/millionaire-api) — the Laravel backend
- [who-wants-to-be-millionaire](https://github.com/XekoJr/who-wants-to-be-millionaire) — the vanilla JS frontend

## Features

- **Progressive quiz gameplay**: prize-ladder questions of increasing difficulty, lifelines, sound effects, and a high-score board
- **Dynamic question loading**: questions are fetched from the API, not hardcoded in the frontend
- **User accounts**: register/login secured with JWT (`tymon/jwt-auth`)
- **Question management API**: public CRUD for questions (`GET`/`POST`/`PUT`/`DELETE /api/questions`) — there's no login flow in the frontend yet, so these routes aren't gated behind auth; the UI only exposes create, not delete

## Architecture

```
backend/    Laravel 11 (PHP 8.2) API — JWT auth, questions CRUD, SQLite
frontend/   Static HTML/CSS/vanilla JS — game UI, calls the API client-side
```

The frontend never hardcodes the API's location — `config.js` is generated at container start from the `API_BASE_URL` environment variable (`frontend/config.js.template` + `envsubst`), so the exact same built image works locally and in production without a rebuild.

## Running it

```bash
docker compose up --build
```

- Frontend: http://localhost:8081
- Backend API: http://localhost:8000/api

First boot runs migrations automatically and generates `APP_KEY`/`JWT_SECRET` if missing (`backend/docker-entrypoint.sh`). The SQLite database persists across restarts via a named volume (`backend-data`) — but note that `docker compose down` (not just a container restart) recreates the container's `.env`, regenerating `APP_KEY`/`JWT_SECRET` and invalidating existing JWTs; not an issue for local demo use.

Override the default ports/URLs by copying `.env.example` to `.env` at the repo root.

## Project structure

```
backend/
├── Dockerfile, docker-entrypoint.sh
├── app/Http/Controllers/   # JWTAuthController, QuestionController
├── routes/api.php          # register, login, logout, user, questions CRUD
└── database/migrations/

frontend/
├── Dockerfile, docker-entrypoint.sh, config.js.template
├── index.html, script.js          # home
├── play/                          # the quiz itself
├── questions/                     # question management UI
└── highscore/                     # leaderboard 
```
