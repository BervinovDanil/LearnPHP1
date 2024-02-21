<?php
ob_start();
?>
<a href="index.html" style="font-size: 35px;">Домой</a>
<h1>Тест на IQ(3 страница):</h1>

<form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
    <h2>7.Какой из этих предметов не относится к остальным?</h2>
    <label><input type="radio" name="q7" value="1"> Ручка</label>
    <label><input type="radio" name="q7" value="2"> Карандаш</label>
    <label><input type="radio" name="q7" value="3"> Ластик</label>

    <h2>8.Разверните слово "МАМА".</h2>
    <label><input type="radio" name="q8" value="1"> АМАМ</label>
    <label><input type="radio" name="q8" value="2"> АММА</label>
    <label><input type="radio" name="q8" value="3"> МАМА</label>

    <h2>9.Если воскресенье идет после субботы, то какой день недели идет перед средой?</h2>
    <label><input type="radio" name="q9" value="1"> Вторник</label>
    <label><input type="radio" name="q9" value="2"> Понедельник</label>
    <label><input type="radio" name="q9" value="3"> Четверг</label>
    <br>
    <br>
    <input type="submit" value="Далее">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST as $key => $value) {
        setcookie($key, $value, time() + 3600);
    }
    $nextPage = '2_4_4.php';
    header("Location: $nextPage");
    ob_end_flush();
    exit();
}
?>