use DBI;
print "Content-type: text/html\n\n";
print "<title>Display OF Record Using Perl</title>";
print "<link rel='stylesheet' href='style.css'>";
$request_method = $ENV{'REQUEST_METHOD'};
if ($request_method eq "POST") 
{
    read(STDIN, $buffer, $ENV{'CONTENT_LENGTH'});
    @pairs = split(/&/, $buffer);
    foreach $pair (@pairs) 
    {
        ($name, $value) = split(/=/, $pair);
        $value =~ s/\+/ /g;
        $FORM{$name} = $value;
    }
    my $dsn = "DBI:mysql:book";
    my $username = 'root';
    my $password = 'root';

    my $dbh  = DBI->connect($dsn,$username,$password)or 
                die("Error connecting to the database: $DBI::errstr\n");
    $Name=$FORM{'Name'};
    $Age=$FORM{'Age'};
    $sql="INSERT INTO student (Name,Age) VALUES('$Name',$Age)";
    $stmt = $dbh->prepare($sql);
    if($stmt->execute())
    {
        print "<h1>Insertion Successful </h1>";
    }
    else
    {
        print $DBI::errstr;
    }
    print "<h2>Data from table using Perl: </h2>";
    $ssql="Select * from student";
    $sstmt = $dbh->prepare($ssql);
    $sstmt->execute();
    print "<br/>";
    print "<table>";
    print "<tr>";
    print "<th>";
    print "Name";
    print "</th>";
    print "<th>";
    print "Age";
    print "</th></tr>";
    while(my @row = $sstmt->fetchrow_array())
    {
     print "<tr><td>";
     print $row[0];
     print "</td><td>";
     print $row[1];
     print "</td></tr>";
    }       
    print"</table>";
    $sstmt->finish();
    print"</body>";
    print"</html>";
    exit(0);
}
