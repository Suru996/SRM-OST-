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
                $s=1;
                if ($n>0)
                {
                    for ($i=1;$i<=$n;$i++)
                    {
                        $s*=$i;
                    }
                    echo "The factorial of $n is $s </td>";
                }
                elseif ($n==0)
                {
                    echo "The factorial of $n is $s </td>";
                }
                else
                {
                    echo "Enter Positive Number</td>";
                }
            }
        ?>
        </form>
    </body>
</html>