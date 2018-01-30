<?php

/**
 * 2. Создать форму с элементом textarea.
 * При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.
 */

function lenSort($a, $b) {
    return strlen($b) - strlen($a);
}

function getTop3($txt) {
	$retArr = [];
	$arr = explode(' ', str_replace([';', ',', '.'], ' ', $txt));
	usort($arr, 'lenSort');
	if (count($arr) > 3) {
		$retArr = array_splice($arr, 0, 3);
	}
	return $retArr;
}

if (!empty($_POST['word'])) {
	echo '<p>Text: ' . print_r($_POST['word'], 1) . '</p><br>';
	echo '<p>Top 3 words by length: </p><pre>' . print_r(getTop3($_POST['word']), 1) . '</pre>';
}


?>

<form action="" method="post">
    <div>
        <textarea name="word" id="word-id" cols="50" rows="10"></textarea>
    </div>
    <br>
    <div>
        <input type="submit">
    </div>
</form>

