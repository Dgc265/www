#!/bin/bash
rm -R /home/alex/WeekenDays/dist
mkdir /home/alex/WeekenDays/dist
cp -r /home/alex/WeekenDays/www/* /home/alex/WeekenDays/dist
node-sass ./www/scss/style.scss  ./www/css/style.css
rm -r /home/alex/WeekenDays/dist/scss
tsc /home/alex/WeekenDays/dist/js/*.ts 
rm -r /home/alex/WeekenDays/dist/js/*.ts