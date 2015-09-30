#!/bin/bash

echo -ne "Initialise some databases and tables..."

cat /home/sql/init.sql | mysql -u root -padmin -h localhost
echo "Done";
