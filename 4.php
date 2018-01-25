<?php
$dir = './directory';
function search_files_name($dir){
    $files = scandir($dir);
    foreach ($files as $opendir) {
        if (($opendir != ".") and ($opendir != "..")) {
            //echo $opendir . "\n";
            $result[] = $opendir;
        }
    }
    return $result;
}
//print_r(search_files_name($dir));

$data = search_files_name($dir);
foreach ($data as $dirsFiles) {
    echo $dirsFiles . "\n";
}




/*4. Написать функцию, которая выводит список файлов в заданной директории.
Директория задается как параметр функции.
 */