<?php
$dir = "./dir/";
$keyword = "два";

function search_Word($dir, $keyword){
if ($handle = opendir($dir)) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            //echo $file . "\n";
            $a = file_get_contents($dir.$file);
            $arr = explode(' ', $a);
            foreach ($arr as $value){
                if($value == $keyword){
                     $result = $file;
                }
            }
        }
    }
    closedir($handle);
}
return $result;
}
echo search_Word($dir, $keyword);


/*5. Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
 * Директория и искомое слово задаются как параметры функции.
 */
?>