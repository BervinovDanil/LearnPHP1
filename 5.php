<?php ob_start(); ?>
<a href="index.html" style="font-size: 35px;">Домой</a>
<h1>Задание 5</h1>
<h2>Открытие файла 5.txt</h2>
<?php
echo file_get_contents("5.txt");
?>
<h2>Запись в файл</h2>
<?php
if (isset($_POST["file_name"], $_POST["text_data"])) {
    $file_name = $_POST['file_name'] . '.txt';
    $text_content = $_POST['text_data'];
    file_put_contents($file_name, $text_content);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>
<p>Введите текст и имя файла, затем сохраните его</p>
<form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
    <label for="text_data">Текст:</label><br>
    <textarea id="text_data" name="text_data" rows="4" cols="50"></textarea><br><br>
    <label for="file_name">Имя файла:</label>
    <input type="text" id="file_name" name="file_name"><br><br>
    <input type="submit" value="Сохранить в файл">
</form>
<h2>Добавление в файл</h2>
<p>Введите текст который добавится, затем сохраните его</p>
<form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
    <label for="text_data2">Текст:</label><br>
    <textarea id="text_data2" name="text_data2" rows="4" cols="50"></textarea><br><br>
    <input type="submit" value="Сохранить в файл">
</form>
<?php
if (isset($_POST["text_data2"])) {
    $text_content2 = $_POST['text_data2'];
    file_put_contents("5.txt", $text_content2, FILE_APPEND);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
ob_end_flush();
?>