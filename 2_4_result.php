<?php
ob_start();
?>
<a href="index.html" style="font-size: 35px;">Домой</a>
<h1>Тест на IQ(итоги):</h1>
<?php
$correctAnswers = file_get_contents('2_4.txt');
$correctCount = 0;
if (isset($_COOKIE['vc'])) {
    unset($_COOKIE['vc']);
}
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
$correctAnswerArray = explode(" ", $correctAnswers);
foreach ($_COOKIE as $key => $value) {
    $questionNumber = intval(substr($key, 1));

    $correctAnswerIndex = $questionNumber - 1;
    $correctAnswer = $correctAnswerArray[$correctAnswerIndex];

    if ($value == $correctAnswer) {
        $correctCount++;
    }
}
echo "<p>Количество правильных ответов: $correctCount</p>";
echo "<h1>";
switch ($correctCount) {
    case 0:
        echo "Дно пробито дважды!...";
        break;
    case 1:
        echo "Дно официально пробито...";
        break;
    case 2:
        echo "Самое дно...";
        break;
    case 3:
        echo "Ниже только дно...";
        break;
    case 4:
        echo "Не ну такое...";
        break;
    case 5:
        echo "Пойдет...";
        break;
    case 6:
        echo "Средненько...";
        break;
    case 7:
        echo "Немного выше среднего...";
        break;
    case 8:
        echo "Есть куда расти...";
        break;
    case 9:
        echo "Делаешь успехи...";
        break;
    case 10:
        echo "Остановите этого парня...";
        break;
    case 11:
        echo "Гений...";
        break;
    case 12:
        echo "IQ=Мильон!";
        break;

}
echo "</h1>";
foreach ($_COOKIE as $key => $value) {
    setcookie($key, '', time() - 3600);
}
ob_end_flush();
?>

<form method="get" action="2_4.php">
    <input type="submit" value="Пройти заново">
</form>