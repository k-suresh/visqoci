<!DOCTYPE html>
<head>
<title>SymQuotes Admin</title>
<?php
echo $assets['header_asset'];
?>
</head>
<body>
  <div id="main-wrapper">
    <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><img src="<?php echo site_url()?>assets/logo.png"><h1>Dashboard - Admin</h1></div>
      </div>   
    </div>
    <div class="template-page-wrapper">
        <?php include("left_menu.php");?>