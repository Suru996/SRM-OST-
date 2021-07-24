<html>
    <head>
        <link rel="Stylesheet" href="style.css"/>
    </head>
    <body>
        <?php
        if ($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $con = new mysqli("localhost","Suru","Suru","book");
            if($con->connect_error)
            {
                echo "Connection couldn't be established";
            }
            $name=$_POST['Name'];
            $isbn=$_POST['ISBN'];
            $title=$_POST['Title'];
            $Publ=$_POST['Publisher'];
            $YOP=$_POST['YOP'];
            $sql="Insert into book values($isbn,'$name','$title','$Publ',$YOP)";
            if ($con->query($sql) === TRUE) {
                echo "<h1>New record inserted successfully</h1>";
              } else {
                echo "<h1>Error: " . $sql . "<br>" . $conn->error . "</h1>";
              }
        } 
        ?>
        <form method="post" action="disp.php">
            Enter title to search book <input type="text" name="book" placeholder="Book Title"/><br/>
            <input type="submit" class="Button" value="Search"/> 
        </form>
    </body>
</html>