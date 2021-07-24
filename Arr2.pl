print("Enter the year to start the check ");
$a=<STDIN>;
print("\nEnter the year to stop the check ");
$b=<STDIN>;
$c = $b-$a;
if ($c>0)
{
    $d=0;
    for($i=$a;$i<=$b;$i++)
    {
        if($i%4 == 0 && $i%100 != 0 || $i%400 == 0)
        {
            $arr[$d] = $i;
            $d++;
        }
    }
    print "Loop year are : @arr";
}
else
{
    print "Starting Year should be less than stopping one";
}
