<?php
	require('blog_connect.php');
	sql_connect('magento-faq');

  $query = "SELECT question, answer FROM questions WHERE show_faq=1";

  $result = $con->query($query);

  if ($row = $result->fetch(PDO::FETCH_NUM)) {
    $i = 0;
    do {
      $i++;
      echo("
      <div class='faq'>
          <h3>FAQ# " . $i . "-" . $row[0] . "</h3>
          <button type='button' class='btn btn-info' data-toggle='collapse' data-target='#faq-" . $i . "'>Lihat jawaban</button>
          <div id='faq-" . $i . "' class='collapse jawaban'>"
          . $row[1] . "
          </div>
      </div>
      ");
    } while ($row = $result->fetch(PDO::FETCH_NUM));

  }

  $con = null;
  $result = null;
?>
