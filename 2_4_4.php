<?php
ob_start();
?>
<a href="index.html" style="font-size: 35px;">Домой</a>
<h1>Тест на IQ(4 страница):</h1>

<form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
    <h2>10.Какое из этих животных является хищником?</h2>
    <label><input type="radio" name="q10" value="1"> Кролик</label>
    <label><input type="radio" name="q10" value="2"> Кошка</label>
    <label><input type="radio" name="q10" value="3"> Корова</label>

    <h2>11.Какие из этих цветов радуги идут в правильном порядке?</h2>
    <label><input type="radio" name="q11" value="1"> Красный, синий, зеленый</label>
    <label><input type="radio" name="q11" value="2"> Фиолетовый, оранжевый, желтый</label>
    <label><input type="radio" name="q11" value="3"> Желтый, зеленый, голубой</label>

    <h2>12.Если 10% от числа равны 5, то само число равно...</h2>
    <label><input type="radio" name="q12" value="1"> 10</label>
    <label><input type="radio" name="q12" value="2"> 50</label>
    <label><input type="radio" name="q12" value="3"> 100</label>
    <br>
    <br>
    <input type="submit" value="Отправить ответы">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST as $key => $value) {
        setcookie($key, $value, time() + 3600);
    }
    $nextPage = '2_4_result.php';
    header("Location: $nextPage");
    ob_end_flush();
    exit();
}
?>