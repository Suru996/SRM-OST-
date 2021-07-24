<html>
    <head>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <form method="POST">
            <table>
                <tr>
                    <th>Enter a number</th>
                    <td><input type="number" name="num" /><br/></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" class="Button" value="Check"/></td>
                </tr>
                <tr>
                    <td colspan="2">
        <?php
            if ($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $n=$_POST['num'];
                $b=$n;
                $s=0;
                while($n!=0)
                {
                    $r=$n%10;
                    $s=$s+$r*$r*$r;
                    $n=$n/10;
                }
                if ($b==$s)
                {
                    echo "The given number $b is Armstrong</td>";
                }
                else
                {
                    echo "The given number $b is not Armstrong</td>";
                }
            }
        ?>
        </form>
    </body>
</html>