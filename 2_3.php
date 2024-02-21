<a href="index.html" style="font-size: 35px;">Домой</a>
<h1>Задание 3</h1>
<h2>Поиск ссылок</h2>
<?php
$filename = '2_3.html';
$blockedSites = file('2_3_blocked_sites.txt', FILE_IGNORE_NEW_LINES);
$htmlContent = file_get_contents($filename);
$dom = new DOMDocument;
@$dom->loadHTML($htmlContent);
echo '<b>Адреса ссылок:</b><br>';
foreach ($dom->getElementsByTagName('a') as $link) {
    $href = $link->getAttribute('href');
    echo in_array($href, $blockedSites) ? 'Сайт нельзя отобразить: #<br>' : $href . '<br>';
}
?>
