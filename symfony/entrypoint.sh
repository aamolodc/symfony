#!/bin/bash

rm -rf /var/www/app/cache/*
/bin/bash -l -c "$*"
#php /project_1/bin/console server:start 0.0.0.0:8000
tail -f /dev/null
echo hello world



