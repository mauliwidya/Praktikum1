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
       <h1 class="header">Kontak  </h1>
<form method="post" name="frm" action="">
<label class="lb">Nama        </label>
<input type="text" name="nama" size="50" />
<br>
<label class="lb">Email</label>
<input type="text" name="email" size="50" />
</form>
<br/>
<br>
<label class="lb">Pesan</label>
<textarea name="" cols="50" rows="10"></textarea>
<br />
<br>
<input type="submit" name="submit" value="Kirim">
<input type="reset" name="reset" value="Reset">
<br/>
</form>
  <ul class="pager">
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
  </ul>
</nav>
      </div>
    </div>
  </body>
</html>