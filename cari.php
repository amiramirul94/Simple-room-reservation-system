<?php
include 'conn.php';
include 'function.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->
    <title>Tarikh</title>
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="vendor/signin.css" rel="stylesheet">
		<link rel="stylesheet" href="jq/jquery-ui.css">
	  <script src="jq/jquery-1.12.4.js"></script>
	  <script src="jq/jquery-ui.js"></script>
	  <script>
	    $(function(){
	      var pickerOpts1 = {
	      dateFormat: "yy-mm-dd",
	      onSelect: function(dateText, inst) {
	        var date = $(this).datepicker('getDate');
	        $('#datepicker2').val($.datepicker.formatDate('DD', date));
	      }
	    };
	  $("#datepicker1").datepicker(pickerOpts1);
	  });
	  </script>
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="get" action="check.php">
        <h2 class="form-signin-heading">Pilih Tarikh</h2>
				<p>Tarikh : <input type="text" name="dateH" id="datepicker1" /></p>
				<p>Hari : <input type="text" name="dayD" id="datepicker2" /></p>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
      </form>

    </div> <!-- /container -->
  </body>
</html>
