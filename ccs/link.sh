`gcc srcc.c`
state=`echo $?`
if [ $state -eq 0 ]
then
`./a.out <input > output`
fi
if [ $state -eq 1 ]
then
`echo 'ERROR!'>output`
fi
