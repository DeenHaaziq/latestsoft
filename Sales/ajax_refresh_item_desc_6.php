<?php
// PDO connect *********
function connect() {
    return new PDO('mysql:host=localhost;dbname=multi-admin', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

$pdo = connect();
$keyword = '%'.$_POST['keyword'].'%';
$sql = "SELECT * FROM  item WHERE item_description LIKE (:keyword) ORDER BY item_code ASC LIMIT 0, 10";
$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
foreach ($list as $rs) {
	// put in bold the written text
	$item_description = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['item_description']);
	// add new option
    echo '<li onclick="set_item2_6(\''.str_replace("'", "\'", $rs['item_description']).'\')">'.$item_description.'</li>';
}
?>