<html>
    <head>
        <link rel="Stylesheet" href="style.css"/>
    </head>
    <body>
        <?php
        if ($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $con = new mysqli("localhost","root","B@by#1234","book");
            if($con->connect_error)
            {
                echo "Connection couldn't be established";
            }
            $name=$_POST['book'];
            $sql="Select Name,Title from book where Title='$name'";
            $r=$con->query($sql);
            echo "<table> <tr><th>Author Name</th><th>Title</th></tr><tr><td>";
            while($row = $r->fetch_row())
            {
                echo "$row[0]</td><td>$row[1]</td>";
            }
            echo "</table>";
        }
        ?>
    </body>
</html>