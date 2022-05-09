<?php
    // code php
    $luachon = $_GET['luachon'] ?? $_POST['luachon'] ?? null;
    $mangLuaChon = [1 => 'keo', 2 => 'bua', 3 => 'bao'];
    $luachonCuaServer = $mangLuaChon[rand(1, 3)];
    $sosanh = sosanh($luachon, $luachonCuaServer);


    // vd luachon1 = bua, luachon 2 = keo
    // luachon1 = bua, luachon 2 = bua
    function sosanh($luachon1 = null, $luachon2= null) {
        if ($luachon1 == null || $luachon2 == null) {
            return -1;
        }

        if ($luachon1 == $luachon2) {
            return 0;
        }

        $check1Win = $luachon1 == 'bua' && $luachon2 == 'keo';
        $check1Win = $check1Win || $luachon1 == 'keo' && $luachon2 == 'bao';
        $check1Win = $check1Win || $luachon1 == 'bao' && $luachon2 == 'bua';

        if ($check1Win) {
            return 1;
        }

        $check2Win = $luachon2 == 'bua' && $luachon1 == 'keo';
        $check2Win = $check2Win || $luachon2 == 'keo' && $luachon1 == 'bao';
        $check2Win = $check2Win || $luachon2 == 'bao' && $luachon1 == 'bua';

        if ($check2Win) {
            return 2;
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
    <?php if ($sosanh == 1): ?>
        <h1>Ban da thang</h1>
    <?php elseif($sosanh == 2): ?>
        <h1>Ban da thua</h1>
    <?php elseif($sosanh == 0): ?>
        <h1>Hoa</h1>
    <?php endif; ?>
    <form action="http://localhost/hocphp/baobuakeo.php" method="get">
        <select name="luachon">
            <option value="keo" <?php if ($luachon == 'keo'): ?> selected <?php endif; ?>>Keo</option>
            <option value="bua" <?php if ($luachon == 'bua'): ?> selected <?php endif; ?>>Bua</option>
            <option value="bao" <?php if ($luachon == 'bao'): ?> selected <?php endif; ?>>Bao</option>
        </select>
        <button>Submit</button>
    </form>
</body>
</html>