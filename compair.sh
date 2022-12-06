#!/bin/bash
clear

echo "---- Program Number Compairing ----"
echo -n "Press number x:"; read num_x;
echo -n "Press number y:"; read num_y;
echo -n
echo "---- result ----";
if [ $num_x -lt $num_y ]; then
	echo "The $num_x is less then $num_y! ($num_x < $num_y)"
elif [ $num_x -gt $num_y ]; then
	echo "The $num_x is grater then $num_y! ($num_x > $num_y)"
else 
	echo "The $num_x is qual to $num_y! ($num_x = $num_y)"
fi

