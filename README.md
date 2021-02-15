## Table of contents
* [General info](#general-info)
* [Technologies](#technologies)
* [Setup](#setup)

## General info
This is a 42-networking System Administration project. Where I discovered Docker technology and set up my first web-server with multiple services such as Wordpress, phpMyAdmin, and a SQL database.

## Technologies
Project is created with:
* Docker
* PHP
* shell
	
## Setup
* To run this project:

```
$ cd ../name_of_folder
$ install docker-machine
$ docker-machine create -d virtualbox default 
$ eval $(docker-machine env default)
$ docker build -t name_of_tag .
$ docker run -it -p 80:80 -p 443:443 name_of_tag /* infinite loop */
$ docker-machine ip /* use the ip to access the services */
```
