# Web CTF Container
[![Docker Pulls](https://img.shields.io/docker/pulls/hightechsec/web-ctf-container.svg?style=plastic)](https://hub.docker.com/r/hightechsec/web-ctf-container)
![License](https://img.shields.io/badge/License-GPL-blue.svg?style=plastic)

A training CTF with a total of Six Different Web Challenge 

**WARNING** This image is vulnerable to several kinds of attacks, please don't deploy it to any public servers.

## Run this image

To run this image you need [docker](http://docker.com) installed. Just run the command:

    docker run --name web-ctf -d -it -p 80:80 hightechsec/web-ctf-container

To change the flag in flag.php from inside the container:
- run `docker exec -ti web-ctf bash`
- then use nano to edit all of the flag.php file

## Install in Web Server:

- Clone this repo (`git clone https://github.com/HightechSec/web-ctf-container`)
- Change the flag first that located in flag.php file in the all of the challenges folder
- Copy the `index.php` file and all of the `challenges folder` to your public server or local server web directory
- Done

## Deploying Manually 

- Clone this repo (`git clone https://github.com/HightechSec/web-ctf-container`)
- Change the flag first that located in flag.php file in the all of the challenges folder
- Then run `docker build -t "web-ctf-container" .` and wait untill it's done 
- If the build is clear, run this command `docker run --name web-ctf -d -it -p 80:80 web-ctf-container`