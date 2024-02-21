<a href="index.html" style="font-size: 35px;">Домой</a>
<h1>Задание 7</h1>
<h2>Вставка текста с помощью php в html</h2>
<?php
$heading_text = "Пример HTML в PHP";
?>
<p><?php echo $heading_text; ?></p>
<h2>Вывод списка</h2>
<?php
$fruits = array("Яблоко", "Груша", "Банан", "Апельсин");
?>
<b>Фрукты:</b>
<ul>
    <?php
    foreach ($fruits as $fruit) {
        echo "<li>$fruit</li>";
    }
    ?>
</ul>
<h2>Вывод таблицы</h2>
<?php
$students = array(
    array("Имя", "Возраст", "Город"),
    array("Имя1", 25, "Москва"),
    array("Имя2", 22, "Санкт-Петербург"),
    array("Имя3", 23, "Москва")
);
?>
<b>Студенты:</b>
<table border="1" style="border-collapse:collapse;">
    <?php
    foreach ($students as $row) {
        echo "<tr>";
        foreach ($row as $data) {
            echo "<td>$data</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
