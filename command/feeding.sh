#!/bin/bash
while [ 1 ];
do cd /www/protected;
sleep 3;
php -f yiic send >> /www/log/info.log 2> /www/log/error.log;
done
