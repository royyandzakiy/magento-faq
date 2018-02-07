<html>
  <head>
    <title>FAQ - Frequently Asked Questions</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .jawaban {
          background-color: rgba(0,0,0,.1);
          padding: 20px;
          margin-bottom: 10px;
          border-radius: 0px 20px 20px 20px;
        }
        .question {
          margin-top: 50px;
        }
        .faq {
          border-left: 5px solid #5BC0DE;
          padding-left: 20px;
          margin: 10px 0;
        }
        .faq-submit {
        }
        #faqTitle {
          color: #5BC0DE;
        }
        #faqContainer {
          /* background-color: white; */
          background-color: rgba(91,192,222,.2);
          padding: 30px;
          border-radius: 0 0 30px 30px;
        }
        body {
          /* background-color: rgba(91,192,222,.5); */
        }
    </style>
  </head>
  <body>
    <div class="container col-lg-6 col-lg-offset-3" id="faqContainer">
      <h1 id="faqTitle">FAQ - ANSWERING</h1>

      <!-- list FAQ: Auto Generated -->
      <?php
          require('ambil-admin.php');
      ?>
    </div>
  </body>
</html>
