#!/bin/sh

docker-compose down
docker system prune --all --volumes
docker-compose up -d
