print "Enter a string : \n";
$a=<STDIN>;
chomp($a);
print ("String in small case : ");
print (lc($a));
print ("\nString in Upper case : ");
print (uc($a));
print "\nSubstring from 0 to 2 are: ";
print substr($a,0,2);
print "\nLength of the given string : ";
print length($a);
print "\nReverse of string is : ";
$b= reverse($a);
print ($b);