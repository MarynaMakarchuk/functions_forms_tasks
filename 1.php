<form action="" method="post">
    <div>
        <textarea name="text1" id="" cols="30" rows="10"><?=@$_POST['text1']?></textarea>
    </div>
    <div>
        <textarea name="text2" id="" cols="30" rows="10"><?=@$_POST['text2']?></textarea>
    </div>
    <div>
        <input type="submit">
    </div>
</form>
<pre>

<?php
//var_dump($_SERVER);
if ($_SERVER["REQUEST_METHOD"] != 'POST'){
    return;
}
$a = $_POST['text1'];
$b = $_POST['text2'];


print_r(array_intersect($a,$b));

/*

@see: http://php.net/manual/ru/function.array-intersect.php

 1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова,
которые есть и в первом и во втором поле ввода. Реализацию это логики необходимо поместить
в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.
 */
