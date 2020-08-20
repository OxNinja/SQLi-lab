#!/bin/sh

# Build the containers
sudo docker-compose up --build

# Down the containers once finished
sudo docker-compose down
