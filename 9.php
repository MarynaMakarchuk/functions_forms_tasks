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
$string = @$_POST['text'];


function reverse ($string){
    $result = [];
    $result[] = strrev($string);
    return $result;
}
print_r(reverse ($string));

/*9. Написать функцию, которая переворачивает строку.
Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.
 */