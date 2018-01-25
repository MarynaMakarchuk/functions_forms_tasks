<?php
session_start();

function getComments() {
    $comments = [];
    if (isset($_SESSION['comments'])) {
        $comments = $_SESSION['comments'];
    }
    return $comments;
}
function addComment($text) {
    if (!isset($_SESSION['comments'])) {
        $_SESSION['comments'] = [];
    }
    $_SESSION['comments'][] = $text;
}

function isBadWord($text) {
    $list = [
        'bad',
        'idiot',
        'stupid'
    ];

    foreach ($list as $item) {
        if
        (strpos($text, $item) !== false) {
            return true;
        }
    }
    return false;
}
$error = '';
if ($comment = @$_POST['comment']) {
    if (isBadWord($comment)) {
        $error = 'Некорректный комментарий';
    }
    else{
        addComment(htmlspecialchars($comment));
    }
}
$text = getComments();


/**
 * 8. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
Все добавленные комментарии выводятся над текстовым полем.
Реализовать проверку на наличие в тексте запрещенных слов, матов.
 * При наличии таких слов - выводить сообщение "Некорректный комментарий".
 * Реализовать удаление из комментария всех тегов, кроме тега &lt;b&gt;.
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php foreach ($text as $i => $item) { ?>
    <div><?=$i?>. <?=$item?></div>
<?php }?>
<div><?=$error?></div>
<div>
    <form action="" method="post">
        <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
        <input type="submit" value="OK">
    </form>
</div>
</body>
</html>
