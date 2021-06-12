#!/bin/sh

for i in `seq 1 25`
do
    echo "<!-- author: Amrit Pandey, 207907\n date: 17-06-2021\n FWP PHP Assignment 3 Solution $i -->\n$(cat Solution$i.php)" > "Solution$i.php"
done