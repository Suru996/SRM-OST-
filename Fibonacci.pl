print"Enter the number ";
$a=<STDIN>;
$b=0;
$c=1;
print "The Fibonacci Series is $c ";
for ($i=1;$i<$a;$i++)
{
    $d=$b+$c;
    $b=$c;
    $c=$d;
    print"$d ";
}

