%data = ('Paul',20000,'Pavi',25000);
#fetching hash Keys and storing in array
@name = keys %data;
#fetching hash values and storing in 
@value = values %data;
#size of hash
$s=@value;
for ($i;$i<$s;$i++) 
{
    print "Key = $name[$i] and value =$value[$i]\n";
}
%cl = ('UG'=>{'Paul',80,'Basher',85},
    'PG'=>{'Suru',90,'Ziba',100});
while ((my $key, my $ele) = each %cl)
{
    print "$key: \n";
    while ((my $ele, my $sub_ele) = each %$ele)
    {
        print " $ele = $sub_ele ";
    }
    print "\n";
}

