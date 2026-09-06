# Skribbl Clone — PHP/Symfony backend

An early-stage backend for a multiplayer drawing-and-guessing game, built to try **Symfony** and
**Doctrine** after working mostly in Node and .NET.

> **Status: early scaffold, not actively developed.** User entities, database wiring and the
> containerised environment are in place; game logic is not. Kept public as a record of the
> Docker/Symfony setup rather than as a working game.

## What's here

- **Symfony** application skeleton with Doctrine ORM and migrations configured
- `User` entity and repository
- **Containerised development environment** — the part worth looking at

## The container setup

`docker-compose.yml` brings up two services:

- **`postgres`** — Postgres 16 Alpine, with a named volume for persistence and a `pg_isready`
  healthcheck
- **`core-api`** — PHP 8.3, built from a Dockerfile that installs the `pdo_pgsql` and `zip`
  extensions and pulls Composer in from the official image

The API waits for the database using `depends_on: condition: service_healthy`, so it does not
start against a Postgres that is still initialising — the usual cause of a first-run connection
error.

```bash
docker compose up
# API on http://localhost:8000
```

## Not implemented

Game rooms, websockets, drawing state, scoring, and the frontend.
