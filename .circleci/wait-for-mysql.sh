#!/bin/sh
# wait-for-mysql.sh

set -e

host="$1"
shift
port="$1"
shift
user="$1"
shift
password="$1"
shift
cmd="$@"

echo "Waiting for $host"
until docker-compose run db mysql -h $host -P $port --user=$user --password=$password -e "select 1"; do
    >&2 echo "MySQL is unavailable - sleeping"
    sleep 1
done
