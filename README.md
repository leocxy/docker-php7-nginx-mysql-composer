# Docker PHP+Nginx+Mysql+Composer
----

At MacOS, Docker running PHP7+Nginx+Mysql

## Overview

### [Install prerequisites](#install-prerequisites)

Before installing project make sure the following prerequisites have been met.

#### [Clone the project](#clone-the-project)

We'll download the code from github.

#### [Configure nginx](#configure-nginx)

We'll configure the nginx server.

#### [Configure php](#configure-php)

We'll configure and install php and its extensions.

#### [Run the application](#run-the-application)

By this point, we'll have all the project pieces in place.

#### [Use Docker commands](#use-docker-commands)

When running, you can use docker commands for doing recurrent operations.

----
## Install prerequisites

For now, this project has been mainly created for Unix `(Linux/MacOs)`. Perhaps it could work on Windows.

The most important are:

* [Git](https://git-scm.com/downloads)
* [Docker](https://docs.docker.com/engine/installation/)
* [Docker compose](https://docs.docker.com/compose/install/)
* [Docker machine](https://docs.docker.com/machine/install-machine/)

### Images to use

* [Nginx](https://hub.docker.com/_/nginx/)
* [MariaDB](https://hub.docker.com/_/mariadb)
* [PHP](https://hub.docker.com/_/php)
* [Composer](https://hub.docker.com/_/composer)

We should be very careful when installing third party web servers such as MYSQL or Nginx.

This project use the following ports:

|Server | Port |
|-------|------|
|MySQL  | 3306 |
|Nginx | 8080|
|FPM| 9000|

----

## Clone the project

Clone this project to your machine:

```sh
git clone https://github.com/leocxy/docker-php7-nginx-mysql-composer.git project-name
```

Go to the project directory:

```sh
cd project-name
```

----

### Project Tree

```sh
.
|---- docker-compose.yml
|---- README.md
|---- .env
|---- .gitignore
|---- sql
|   ├--- Dockerfile
|   ├--- my.cnf
|   ├--- my.cnf.default
|---- fpm
|   ├--- Dockerfile
|   ├--- www.conf
|   ├--- www.conf.default
|---- nginx
|   ├--- Dockerfile
|   ├--- default.conf
|   ├--- logrotate.txt
|---- www
|   ├--- index.php
```

----

## Run the application

1. 

https://raw.githubusercontent.com/nanoninja/docker-nginx-php-mysql/master/README.md