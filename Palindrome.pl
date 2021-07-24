print("Enter number or string to check for palindrome ");
$a=<STDIN>;
chomp($a);
$a= lc($a);
$r=0;
if ($a eq reverse($a))
{
    print("Is Pal")
}
else
{
    print("Isn't Pal")
}

print"Enter a number: ";
$n=<STDIN>;
$t=$n;
$s=0;
while($n>0)
{
$r=$n%10;
$s=($s*10)+$r;
$n=int($n/10);
}
if($t==$s)
{
print"Number is palindrome\n";
}
else
{
print"Number is not palindrome\n";
}