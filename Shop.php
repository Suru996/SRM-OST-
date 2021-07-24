<html>
    <head>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
    <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST")
    {
        echo "<h1>Thank You for buying : </h1>";
        if(!empty($_POST['i'])) 
        {
            foreach($_POST['i'] as $value){
                echo "<h2>$value</h2>";
            }
        }
        echo "<h3>Hope you had a wonderful time. Visit Us Soon!!!</h3>";
    }
    ?>
    </body>
</html>