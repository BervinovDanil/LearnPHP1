<?php
ob_start();
?>
<a href="index.html" style="font-size: 35px;">Домой</a>
<h1>Тест на IQ:</h1>

<form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
    <h2>1.Какое число идет следующим в этой последовательности: 2, 4, 6, ...?</h2>
    <label><input type="radio" name="q1" value="1"> 8</label>
    <label><input type="radio" name="q1" value="2"> 9</label>
    <label><input type="radio" name="q1" value="3"> 10</label>

    <h2>2.Если яблоко стоит 10 рублей, а апельсин - 15 рублей, сколько стоят 2 яблока и 3 апельсина? </h2>
    <label><input type="radio" name="q2" value="1"> 50</label>
    <label><input type="radio" name="q2" value="2"> 60</label>
    <label><input type="radio" name="q2" value="3"> 65</label>

    <h2>3.Какое слово не подходит к остальным?</h2>
    <label><input type="radio" name="q3" value="1"> Кот</label>
    <label><input type="radio" name="q3" value="2"> Собака</label>
    <label><input type="radio" name="q3" value="3"> Лиса</label>
    <br>
    <br>
    <input type="submit" value="Далее">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST as $key => $value) {
        setcookie($key, $value, time() + 3600);
    }
    $nextPage = '2_4_2.php';
    header("Location: $nextPage");
    ob_end_flush();
    exit();
}
?>