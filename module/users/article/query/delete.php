<?php

$post = mysqli_fetch_array(mysqli_query($CONNECT, "SELECT * FROM `uarticles` WHERE `id` = '".$page."'"));

if ($_SESSION['position'] != 'admin' and $post['author'] != $_SESSION['id']) {MessageSend(1,"Вы не можете просматривать эту страницу","/bloff/".$page);} else {

mysqli_query($CONNECT , "UPDATE `uarticles` SET `status` = 'deleted' WHERE `id` = '".$page."'") or die("Ошибка MySQL: " . mysql_error());

MessageSend(2, 'Запись Удалена', '/');
};

 ?>
