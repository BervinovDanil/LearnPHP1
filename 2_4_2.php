<?php
ob_start();
?>
<a href="index.html" style="font-size: 35px;">Домой</a>
<h1>Тест на IQ(2 страница):</h1>

<form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
    <h2>4.Если 8 человек могут сделать работу за 6 дней, сколько дней потребуется 16 людям для выполнения той же работы?</h2>
    <label><input type="radio" name="q4" value="1"> 6</label>
    <label><input type="radio" name="q4" value="2"> 4</label>
    <label><input type="radio" name="q4" value="3"> 3</label>

    <h2>5.Какой из этих геометрических фигур не подходит к остальным?</h2>
    <label><input type="radio" name="q5" value="1"> Круг</label>
    <label><input type="radio" name="q5" value="2"> Квадрат</label>
    <label><input type="radio" name="q5" value="3"> Треугольник</label>

    <h2>6.Если половина яблока стоит 5 рублей, сколько стоит целое яблоко?</h2>
    <label><input type="radio" name="q6" value="1"> 5</label>
    <label><input type="radio" name="q6" value="2"> 7.5</label>
    <label><input type="radio" name="q6" value="3"> 10</label>
    <br>
    <br>
    <input type="submit" value="Далее">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST as $key => $value) {
        setcookie($key, $value, time() + 3600);
    }
    $nextPage = '2_4_3.php';
    header("Location: $nextPage");
    ob_end_flush();
    exit();
}
?>