FROM nginx:alpine

COPY . /usr/share/nginx/html
COPY config.js.template /usr/share/nginx/html/config.js.template

COPY docker-entrypoint.sh /docker-entrypoint.d/30-inject-api-url.sh
RUN chmod +x /docker-entrypoint.d/30-inject-api-url.sh
