<html>
    <head>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <form method="POST">
            <table>
                <tr>
                    <th>Enter a string or number</th>
                    <td><input type="text" name="num" /><br/></td>
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
                $n=strtolower($n);
                $s=1;
                if ($n==strrev($n))
                {
                    echo "$n is Palindrome </td>";
                }
                else
                {
                    echo "$n is not Palindrome </td>";
                }
            }
        ?>
        </form>
    </body>
</html>