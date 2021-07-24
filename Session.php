<html>
    <head>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <form method ="POST" >
            <input type="submit" class="Button" value="Session Check"/>
        </form>
        <?php 
            if ($_SERVER["REQUEST_METHOD"]=="POST")
            { 
                session_start();
                if(isset($_SESSION['views']))
                    $_SESSION['views'] = $_SESSION['views']+1;
                else
                    $_SESSION['views']=1;
                echo"The number of times the site is viewed = ".$_SESSION['views'];
            }
        ?>
    </body>
</html>