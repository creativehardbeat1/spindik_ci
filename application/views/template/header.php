<?php
//header.php

?>

<!DOCTYPE html>
<html>
<head>
<title>Aplikasi Rumah Sakit</title>
<link href="<?php echo assets_url();?>/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" />
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dokter
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url().index_page();?>/dokter/list_dokter">List</a></li>
          <li><a href="<?php echo base_url().index_page();?>/dokter/tambah_dokter">Tambah</a></li>
        </ul>
      </li>
      <li><a href="#">Pasien</a></li>
      <li><a href="#">Layanan</a></li>
    </ul>
  </div>
</nav>
