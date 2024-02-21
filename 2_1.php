<a href="index.html" style="font-size: 35px;">Домой</a>
<form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
    <label for="limit">Ограничение:</label>
    <input type="number" id="limit" name="limit" required>
    <br><br>
    <input type="submit" value="Показать результаты">
</form>
<?php
if (isset($_POST['limit'])) {
    $limit = intval($_POST['limit']);
    $students = file("2_1.txt", FILE_IGNORE_NEW_LINES);
    $outputFilename = '2_1_result.txt';
    $outputFile = fopen($outputFilename, 'w');
    foreach ($students as $student) {
        $data = explode(' ', $student);
        $name = array_shift($data);
        $totalScore = array_sum($data);
        if ($totalScore >= $limit) {
            echo "$name: $totalScore баллов<br>";
            fwrite($outputFile, "$name $totalScore\n");
        }
    }
}

?>