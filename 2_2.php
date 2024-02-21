<a href="index.html" style="font-size: 35px;">Домой</a>
<br>
<?php
$filename = '2_2.txt';
$words = file($filename, FILE_IGNORE_NEW_LINES);
foreach ($words as $word) {
    echo $word . "<br>";
}
?>
<form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
    <input type="submit" name="sort" value="Сортировать и сохранить">
</form>
<?php
if (isset($_POST['sort'])) {
    $outputFilename = '2_2_result.txt';
    sort($words);
    file_put_contents($outputFilename, implode("\n", $words));
    echo '<h2>Отсортированный файл:</h2>';
    foreach ($words as $word) {
        echo $word . "<br>";
    }
}
?>