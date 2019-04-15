#!/bin/bash

# This is .bashrc for these specific bin/* scripts

# Get base directory of project (outside bin folder)
base="$( cd "$(dirname "$0")" ; cd ../ ; pwd -P )"

# Change into $base directory so all scripts run from base
cd $base

# Source .env
source .env

# Compose files
compose_app=./bin/compose-app.yml
compose_common=./bin/compose-common.yml

# Container names
app=$DOCKER_APP
redis=redis
mysql=mysql
