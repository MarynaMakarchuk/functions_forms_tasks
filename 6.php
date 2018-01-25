<form action="" method="post" enctype=multipart/form-data>
    <div>
        <input type="file" name="filename">
    </div>
    <br>
    <div>
        <input type="submit">
    </div>
</form>

<?php
if(array_key_exists('filename', $_FILES)){
    echo "Данные передавались";
if (is_uploaded_file($_FILES["filename"] ["tmp_name"])){
move_uploaded_file($_FILES["filename"]["tmp_name"], dirname(__FILE__).'/gallery/'.$_FILES["filename"]["name"]);
    echo "Файл загружен";
    }
else{
    echo "Ошибка загрузки файла";
}
}
else {
    echo "Данные не передавались";
}

echo "<h1>Фотогалерея</h1>";

if ($handle = opendir('./gallery/')){
    echo '<table border="1">';
    $i = 0;
    while (false !== $file = readdir($handle))
        if ($file != "." && $file != ".."){
        if($i % 2 == 0){
        echo "<tr>\n";}
        $i++;

    echo '<td><img width="80" height="80" src="./gallery/'.$file.'"></td>';
        if($i % 2 == 0){
            echo "</tr>\n";
        }

}
    closedir($handle);
    echo '</table>';
}
/*6. Создать страницу, на которой можно загрузить несколько фотографий в галерею.
 * Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.
 */