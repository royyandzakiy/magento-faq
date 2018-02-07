<?php
	require('blog_connect.php');
	sql_connect('magento-faq');

  $id = $_POST["id"];
  $answer = $_POST["answer"];
  $show_faq = $_POST["show_faq"] == 'on' ? 1 : 0;

  $query = "UPDATE questions SET answer = '$answer', show_faq = '$show_faq' WHERE id=$id";

  $result = $con->query($query);

  if ($result) {
    // berhasil INSERT PERTANYAAN
		echo('INSERT PERTANYAAN BERHASIL');
  } else {
    // gagal INSERT PERTANYAAN
		echo('ERROR: INSERT PERTANYAAN GAGAL');
  };

  $con = null;
  $result = null;

	header("Location: index.php");
	die();
?>
