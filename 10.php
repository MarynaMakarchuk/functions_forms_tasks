<form action="" method="post">
    <div>
        <textarea name="text" id="" cols="30" rows="5"></textarea>
    </div>
    <div>
        <input type="submit">
    </div>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] != 'POST'){
    return;
}
$arr = $_POST['text'];


//$arr = 'привет привет всем привет';
function countUnique($arr){
$arr1 = explode(" ", $arr);
$newArr = array_unique($arr1);
//print_r($newArr);
//echo "\n";
$result = count($newArr);
//echo $result;
return $result;
}
echo countUnique($arr);

/*10. Написать функцию, которая считает количество уникальных слов в тексте.
Слова разделяются пробелами. Текст должен вводиться с формы.
 */
?>