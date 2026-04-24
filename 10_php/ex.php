<?php
session_start();
class staticContoh
{
    public static $angka = 1;

    public  static function nama()
    {
        return "pencet " . self::$angka . " kali";
    }
}


if (isset($_POST["tambah"])) {
    $hasil = $_SESSION["tambah"]++;
    staticContoh::$angka = $hasil;
    echo staticContoh::nama();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <button type="submit" name="tambah">Tambah</button>
    </form>
</body>

</html>