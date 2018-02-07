<?php
	require('blog_connect.php');
	sql_connect('magento-faq');

  $sender = 'User';
  $question = $_POST["question"];

  $query = "INSERT INTO questions (sender, question) VALUES ('$sender', '$question')";

  $result = $con->query($query);

  if ($result) {
    // berhasil INSERT PERTANYAAN
  } else {
    // gagal INSERT PERTANYAAN
  };

  $con = null;
  $result = null;

	header("Location: faq.php");
	die();
?>
