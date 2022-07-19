FROM postgres:12-alpine

ENV POSTGRES_PASSWORD dbpass
ENV POSTGRES_USER waggo
ENV TZ Asia/Tokyo

COPY init.sql /docker-entrypoint-initdb.d/init.sql
