<a href="index.html" style="font-size: 35px;">Домой</a>
<h1>Задание 4</h1>
<p>Введите строку для дальнейшей работы(нужна точка в середине)</p>
<form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
    <input type="text" name="string">
    <input type="submit" value="Выполнить" />
</form>
<?php
if(isset($_POST["string"])){
$search = ".";
$strText = $_POST["string"];
echo "Строка:<br>" . $strText;
echo "<h2>Поиск в строке</h2>";
echo strstr($strText, $search);
echo "<h2>Разбитие строки и работа с подстрокой</h2>";
echo strtoupper(strtok($strText, $search));
}
?>