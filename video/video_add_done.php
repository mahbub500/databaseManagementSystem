<?php
//connection to database
$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4', 'root', '');

////building query
$query_video = ' INSERT INTO `videos` ( `title`, `link`) 
                      VALUES ("'.$_POST['title'].'","'.$_POST['link'].'")';

$result = $db->exec($query_video);

if($result){
    echo "Data has been inserted successfully.";
}else{
    echo "There is an error. Please try again later.";
}
header("location:video_view_admin.php");
?>
