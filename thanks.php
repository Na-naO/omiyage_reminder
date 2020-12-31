<?php

  $nickname = htmlspecialchars($_POST['nickname']);
  $email = htmlspecialchars($_POST['email']);
  $place = htmlspecialchars($_POST['place']);
  $situation = htmlspecialchars($_POST['situation']);
  $title = htmlspecialchars($_POST['title']);
  $content = htmlspecialchars($_POST['content']);


  $dsn = 'mysql:dbname=Omiyage_reminder;host=localhost';
  $user = 'root';
  $password = '';
  $dbh = new PDO($dsn, $user, $password);
  $dbh->query('SET NAMES utf8');


$sql = 'INSERT INTO `posts`(`nickname`, `email`, `place`, `situation`, `title`, `content`) VALUES ("'.$nickname.'", "'.$email.'", "'.$place.'", "'.$situation.'", "'.$title.'", "'.$content.'")';
$stmt = $dbh->prepare($sql);
$stmt->execute();
$dbh = null;

?>