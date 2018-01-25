<form action="" method="post">
    <div>
        <textarea name="file" id="" cols="70" rows="10"></textarea>
    </div>
    <div>
        <input type="submit">
    </div>
</form>

<?php
$N = @$_POST['file'];
$a = file_get_contents('./text.txt');
$c = array (".", ",");
$d = str_replace($c, "", $a);
$arr = explode(" ",$d);

foreach ($arr as $key => $value){
    $newArr1[] = mb_strlen($value);
}

foreach ($newArr1 as $key => $newValue){
    if($newValue > $N){
        //echo $arr[$key]. " ";
        unset($arr[$key]);
    }
}
print_r($arr);

/*
3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
 * Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.</p>
 */