<form action="" method="post">
    <div>
        <textarea name="word" id="" cols="50" rows="10"></textarea>
    </div>
    <br>
    <div>
        <input type="submit">
    </div>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] != 'POST'){
    return;
}
$a = $_POST['word'];

function getLongestwords($a){
$b = array ('.', ',');
$c = str_replace($b, ' ', $a);
$arr = explode(' ', $c);
//print_r($arr);

    foreach ($arr as $key => $value) {
    $new[] = mb_strlen($value);
}
$result = max($new);
//echo $result;
foreach ($new as $key => $value1){
    if($value1 == $result){
        $output = $arr[$key].", ";
    }
    if($value1 != $result){
        $new1[]= $value1;
        $arr1[] = $arr[$key];
    }
}
//print_r($new1);
//echo "\n";
//print_r($arr1);
    foreach ($arr1 as $key => $value){
    $new2[] = mb_strlen($value);
    }
$result1 = max($new2);
//echo $result1;
foreach ($new2 as $key => $value2){
    if($value2 == $result1){
        $output .= $arr1[$key].", ";
    }
    if($value2 != $result1){
        $new3[] = $value2;
        $arr2[]= $arr1[$key];
    }
}
//print_r($new2);
//echo "\n";
//print_r($arr2);
    foreach ($arr2 as $key => $value){
    $new4[] = mb_strlen($value);
    }
$result3 = max($new4);
foreach ($new4 as $key => $value3){
    if($value3 == $result3){
        $output .= $arr2[$key]." ";
    }
    if($value3 != $result3){
        $new5[] = $value3;
        $arr3[] = $arr2[$key];
    }
}
    return $output;
}
echo getLongestwords($a);





/**
2. Создать форму с элементом textarea.
При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.
 */