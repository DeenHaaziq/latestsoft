<?php
// PDO connect *********
function connect() {
    return new PDO('mysql:host=localhost;dbname=multi-admin', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

$pdo = connect();
$keyword = '%'.$_POST['keyword'].'%';
$sql = "SELECT * FROM category WHERE category_description LIKE (:keyword) ORDER BY category_code ASC LIMIT 0, 10";
$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
foreach ($list as $rs) {
	// put in bold the written text
	$category_name = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['category_description']);
	// add new option
    echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['category_description']).'\')">'.$category_name.'</li>';
}
?>