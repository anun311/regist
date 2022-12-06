#echo $SHELL
#!/bin/bash
#xhost=$(hostname)
#echo "Your hostname: $xhost";
user=$(whoami)
echo "Welcome: $user";
input=/$user
echo "Default path of USER: $input";
#echo -n "Insert filename to create: "; read var_newfile;
#touch $var_newfile;
#ls -l $var_newfile;
echo -n
vnum=-1;
while [ $vnum -ne 0 ]
do
echo "-- Program Management File --"
echo " --1. Creat File"
echo " --2. Delete File"
echo " --3. Show List Files"
echo " --4. Change Permission of the file"
echo " --0. Exit Program"
echo -n ">>Press Any Number Key: "; read vnum;
case "$vnum" in 
	"1") echo -n "Insert filename: "; read var_newfile;
		touch $var_newfile;
		ls -l $var_newfile;
	;;
	"2") echo -n "Delete filename: "; read var_delfile;
		rm -r $var_delfile;
		echo "Delete file Success!";
	;;
	"3") ls -l
	;;
	"4") echo -n "File name: "; read var_chnfile;
		echo -n "Change permission $var_chnfile to (000-777) :"; read var_perfile;
		chmod $var_perfile $var_chnfile;
		ls -l $var_chnfile;
		echo "Change Permission Success!"
	;;
esac
done
