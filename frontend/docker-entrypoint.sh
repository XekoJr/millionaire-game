#!/bin/sh
set -e

# Fills window.API_BASE_URL from the API_BASE_URL env var at container start,
# so the same built image can point at any backend (local docker-compose today,
# a real subdomain later) without rebuilding — the fetch calls happen in the
# browser, so this has to be the backend's published URL, not a Docker-network hostname.
envsubst '${API_BASE_URL}' < /usr/share/nginx/html/config.js.template > /usr/share/nginx/html/config.js
