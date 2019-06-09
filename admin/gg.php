<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        QR CODE GENERATOR
      </h1>
	  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>QR CODE GENERATOR</li>
        <li class="active">Generator</li>
      </ol>
<?php
echo "The time is " . date("h:i:sa");
echo "Today is " . date("Y-m-d") . "<br>";
?>
<head>
	<title>Qr code</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
		</script>
</head>
<body>
	<textarea onkeyup="generate_qrcode(this.value)" cols="50" rows="5">
	</textarea>
		<div id="result">
		</div>
		
<script>
 function generate_qrcode(sample){
 $.ajax({
 type: 'post',
 url: 'generator.php',
 data : {sample:sample},
 success: function(code){
 $('#result').html(code);
 }
 });
 }
</script>

</html>