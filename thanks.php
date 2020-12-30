<?php

  $nickname = htmlspecialchars($_POST['nickname']);
  $email = htmlspecialchars($_POST['email']);
  $place = htmlspecialchars($_POST['place']);
  $situation = htmlspecialchars($_POST['situation']);
  $title = htmlspecialchars($_POST['title']);
  $content = htmlspecialchars($_POST['content']);


  $dns = 'mysql:dbname=Omiyage_reminder;host=localhost';
  $user = 'root';
  $password ='';
  $dbh = new PDO($dsn, $user, $password);
  $dbh->query('SET NAMES utf8');


