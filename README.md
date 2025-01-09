# LAQONTO web-site

## How to start project locally?

1. Run `docker compose up`
2. Access website via [http://localhost:8080/](http://localhost:8080/)

## How to write CSS?

- We write vanilla CSS in `style.css`.
- We use `css/preflight.css`, which is built on top of [modern-normalize](https://github.com/sindresorhus/modern-normalize). It is a set of base styles that are designed to smooth over cross-browser inconsistencies and make it easier for us to work within the constraints of our design system.
- `css/settings.css` is a place where we keep our CSS custom properties (variables). Furthermore, we initialize our `@layer` setup there.
