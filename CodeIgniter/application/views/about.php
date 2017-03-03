<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">JEYA</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo site_url('Tugas'); ?>">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo site_url('Tugas'); echo "/menu";?>">About</a></li>
       <li><a href="<?php echo site_url('Tugas'); echo "/menu1";?>">Contact</a></li>
       
     
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <div class="jumbotron">
      <div class="container">
     
<style type="text/css">
  label.lb{
    display:block;
    line-height:20px;
    margin:0 0 10px 0;
  }
  h1.header{
    font:bold 20px Tahoma,Verdana;
    display:block;
    margin:0 0 20px 0;
    padding:0 0 10px 0;
    border-bottom:#cecece 1px solid;
  }
</style>
<h1 class="header">Tentang Saya</h1>
<form method="post" name="frm" action="">
<table class="table">
<caption>  </caption>
<tbody>
    <tr class="active">
        <td>Nama</td>
        <td>:</td>
        <td>Mauliwidya</td>
    </tr>
   
    <tr class="success">
        <td>NIM</td>
        <td>:</td>
        <td>1541180224</td>
    </tr>
    <tr class="warning">
        <td>Email</td>
        <td>:</td>
        <td>mauliwidya07@gmail.com</td>
    </tr>
    <tr class="danger">
        <td>TTL</td>
        <td>:</td>
        <td>Malang,14 Juli 1998</td>
    </tr>
    <tr class="active">
        <td>Zodiak</td>
        <td>:</td>
        <td>Cancer</td>
    </tr>
    <tr class="success">
        <td>No.Telp</td>
        <td>:</td>
        <td>087859726447</td>
    </tr>
    <tr class="warning">
        <td>Hobby</td>
        <td>:</td>
        <td>Menggambar,membaca novel,menonton drama korea</td>
    </tr>
    <tr class="danger">
        <td>Sekolah</td>
        <td>:</td>
        <td>Politeknik Negeri Malang</td>
    </tr>
  </table>
  </tbody>


</form>
      </div>
    </div>
  </body>
</html>