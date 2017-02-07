<html>
<body>

<?php
function fn($n)
{
    if ($n == 1) {
        echo(1);
        return;
    }
    if (($n % 3 == 0) && ($n % 4 == 0)) {
        echo('z');
        return fn($n - 1);
    }
    if ($n % 3 == 0) {
        echo('x');
        return fn($n - 1);
    }
    if ($n % 4 == 0) {
        echo('y');
        return fn($n - 1);
    }
    echo($n);
    return fn($n - 1);
}

fn(100);
?>

</body>
</html>