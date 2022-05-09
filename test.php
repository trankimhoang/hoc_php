<?php
    $number = $_GET['number'] ?? null;

    function inBCC($number) {
        if ($number <= 9 && $number >=2){
            for ( $i =1; $i <= 10; ++$i){
                echo $number . ' x ' . $i . ' = ' . $number * $i . '<br>';
            }
        }else{
            echo 'Khong ton tai bcc';
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost/hocphp/test.php" method="get">
        <input type="text" name="number" value="<?php echo $number; ?>">
        <button>submit</button>
    </form>
    <?php inBCC($number); ?>
</body>
</html>
