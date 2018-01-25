<?php
session_start();

function getComments() {
    $comment = [];
    if (isset($_SESSION['comment'])) {
        $comment = $_SESSION['comment'];
    }
    return $comment;
}

function addComment($text) {
    if (!isset($_SESSION['comment'])) {
        $_SESSION['comment'] = [];
    }
    $_SESSION['comment'][] = $text;
}

//$error = '';
if ($comment = @$_POST['guest_book']) {
        addComment($comment);
}
$text = getComments();
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

<div>
    <form action="" method="post">
        <textarea name="guest_book" id="guest_book" cols="30" rows="10"></textarea>
        <input type="submit" value="OK">
    </form>
</div>
</body>
</html>

<?php
/*7. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
 Все добавленные комментарии выводятся над текстовым полем.
 */
?>