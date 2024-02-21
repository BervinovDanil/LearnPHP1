<a href="index.html" style="font-size: 35px;">Домой</a>
<h1>Задание 2 и 3</h1>
<h2>Цикл for и массив двумя способами</h2>
<?php
$list = "машинка,самолетик,кораблик,солдатик";

$newlist = explode(",", $list);
echo "<p>Список игрушек:</p>";
echo "<ul>";
for ($x = 0; $x <= 3; $x++) {
    echo "<li>" . $newlist[$x] . "</li>";
}
echo "</ul>";
?>
<h2>Цикл foreach</h2>
<?php
$list = "чебурек,шаурма,шашлык,суп";

$newlist = explode(",", $list);
echo "<p>Меню:</p>";
echo "<ul>";
foreach ($newlist as $nl) {
    echo "<li>" . $nl . "</li>";
}
echo "</ul>";
?>