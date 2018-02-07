<?php
	require('blog_connect.php');
	sql_connect('magento-faq');

  $query = "SELECT question, answer, show_faq, id FROM questions";

  $result = $con->query($query);

  if ($row = $result->fetch(PDO::FETCH_NUM)) {
    $i = 0;
    do {
      $i++;
      echo("
      <form action='kirim-admin.php' method='post'>
          <div class='faq'>
              <h3>FAQ# " . $i . "-" . $row[0] . "</h3>
              <div id='faq-" . $i . "'>
              <textarea name='answer' rows='5' type='text' class='form-control' id='answer'>".$row[1]."</textarea>
              <label><input name='show_faq' type='checkbox'"); echo($row[2] ? 'checked' : ''); echo(">Show?</label>
              </div>
              <input type='hidden' name='id' value='$row[3]' />

              <div class='row col-lg-12'>
                  <input type='submit' class='faq-submit btn-block btn btn-info' value='Submit' />
              </div>
        </div>
      </form>
      ");
    } while ($row = $result->fetch(PDO::FETCH_NUM));

  }

  $con = null;
  $result = null;
?>
