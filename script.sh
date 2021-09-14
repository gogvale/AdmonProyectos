#!/bin/bash
cd $1
for f in *.html; do 
    mv -- "$f" "${f%.html}.php"
done
