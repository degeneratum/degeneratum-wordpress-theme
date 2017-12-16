# degeneratum-wordpress-theme

Starting place for develoing a Bootstrap based Wordpress theme. Contains Dockerfile with NodeJS and Grunt for linting.

## Prerequisites ##

- Docker
- Docker Compose

## Develop ##
CD into your project folder

```bash

$ docker-compose up
$ docker exec -it degeneratumwordpresstheme_npm_1 /bin/bash
$ npm install #only required on first run
$ grunt
```

## Wordpress ##

On first run or if containers are reset/removed, you will need to step throough the install wizard at localhost:8080 and set the theme to 'Degeneratum'