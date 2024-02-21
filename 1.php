<a href="index.html" style="font-size: 35px;">Домой</a>
<h1>Задание 1</h1>
<h2>If</h2>
<?php
if (isset($_GET["number"])) {
    $a = $_GET["number"];
    if ($a == 1) {
        echo "Eto 1";
    } elseif ($a == 2) {
        echo "Eto 2";
    } else {
        echo "Таких цифр не существует";
    }
} else {
    echo "Выберите цифру";
}

?>
<br>
<a href="1.php?number=1">проверить 1</a>
<br>
<a href="1.php?number=2">проверить 2</a>
<br>
<a href="1.php?number=55030">проверить 55030</a>
<h2>Switch</h2>
<?php
if (isset($_GET["color"])) {
    $b = $_GET["color"];
    switch ($b) {
        case "1":
            $Color = "red";
            break;
        case "2":
            $Color = "green";
            break;
        case "3":
            $Color = "blue";
            break;
        default:
            $Color = "white";
            break;
    }
} else {
    echo "Выберите цвет ";
}
?>
<span style="background-color:<?php echo $Color; ?>; display:grid; height: 40px; width: 40px;"></span>
<a href="1.php?color=1">color red</a>
<br>
<a href="1.php?color=2">color green</a>
<br>
<a href="1.php?color=3">color blue</a>
<br>
<a href="1.php?color=535">color unknown</a>