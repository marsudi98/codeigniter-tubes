<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Code Igniter</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="#">Pemrograman Web Framework</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('index.php/Pemain') ?>">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      
    </div>
  </nav>
  
  <div class="container">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <?php echo form_open_multipart('pemain/create'); ?>
      <legend><b>Tambah Data Pemain</b></legend>
      <?php echo validation_errors(); ?>

      <div class="form-group">
        <label for=""><b>Nama Pemain</b></label>
        <input type="text" class="form-control" name="nama" placeholder="Input field">
        <label for=""><b>Nickname</b></label>
        <input type="text" class="form-control" name="nickname" placeholder="Input field">
        <label for=""><b>Rank</b></label>
        <input type="text" class="form-control" name="rank" placeholder="Input field"> 
        <label for=""><b>Photo</b></label>
        <input type="file" class="form-control" name="userfile" size="20" />
        <label for=""><b>Tanggal Gabung</b></label>
        <input type="date" name="tanggalGabung" placeholder="date" class="form-control">
      </div>
      <button type="submit" class="btn btn-warning"><b>SUBMIT</b></button>
      <?php echo form_close(); ?>
    </div>
  </div>

  <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>