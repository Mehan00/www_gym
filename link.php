<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Karta Członkowska</title>
    <link rel="shortcut icon" href="img/logo.ico" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
<main>
 
    
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
  <div class="navbar-header">
      <a class="navbar-brand" href="index.html">  <img src="img/logo1.png" alt="logo" style="height:50px;"></a>
    </div> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>  
    <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.html">Strona Główna</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="gallery.html">Galeria</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="link.php">Karta Członkowska</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="contact.php">Kontakt</a>
      </li>
    </ul>
    </div>    
  </div>
</nav>
<div class="container" style="margin-bottom:10px;">
  <h1 class="text-center">Formularz Zgłoszeniowy</h1>
    <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="imie">Imię</label>
            <input type="text" class="form-control" name="imie" id="imie" placeholder="Imię" required>
          </div>
          <div class="form-group col-md-6">
            <label for="nazwisko">Nazwisko</label>
            <input type="text" class="form-control"  name="nazwisko" id="nazwisko" placeholder="Nazwisko" required>
          </div>
        </div>
        <div class="form-group">
          <label for="adres">Adres</label>
          <input type="text" class="form-control" name="adres" id="adres" placeholder="Adres" required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="email">E-mail</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Email@com" required>
            </div>
            <div class="form-group col-md-6">
              <label for="tel">Telefon</label>
              <input type="tel" class="form-control"  name="tel" id="tel" placeholder="Telefon" required>
            </div>
          </div>
        
        <button type="submit"  onclick="alert_tel()" class="btn btn-primary btn-form">Wyślij</button>
      </form>
  </div>

  <script>
      function alert_tel() {
        var mail = document.getElementById("email").value;
        alert("Kod Weryfikacyjny został wysłany na adres pocztowy "+mail) ;
      }
    </script>

<?php
// połączenie z serwerem i bazą danych
  $mysqli = new mysqli('localhost', 'j.sotwin', 'myD6Odivs9zMsql', 'test');
  if ($mysqli->connect_error) {
      die('Connect Error ('.$mysqli->connect_errno.') '. $mysqli->connect_error);
      if (mysqli_connect_error()) {
        die('Connect Error (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
      }
  }

  if (isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['adres']) && isset($_POST['email'])&& isset($_POST['tel'])) {
  $imie = mysqli_real_escape_string($mysqli, $_REQUEST['imie']);
  $naz = mysqli_real_escape_string($mysqli, $_REQUEST['nazwisko']);
  $adres = mysqli_real_escape_string($mysqli, $_REQUEST['adres']);
  $mail = mysqli_real_escape_string($mysqli, $_REQUEST['email']);
  $tel = mysqli_real_escape_string($mysqli, $_REQUEST['tel']);

  
  $sql = "INSERT INTO karta1 (imie, nazwisko, adres, mail, telefon) VALUES ('$imie', '$naz', '$adres', '$mail','$tel')";
  if(mysqli_query($mysqli, $sql)){
    
  } 
    else{
    echo "ERROR: $sql. " . mysqli_error($mysqli);
  }

}
?>
 
<div class="jumbotron text-center" style="margin-bottom:0">
    <div class="d-flex flex-row align-items-center" >
        <div class="p-2">
            <a href="https://www.facebook.com/" >
          <img alt="picture" src="img/fb.png"   class="linki h-10" >
              </a></div>
          <div class="p-2"><a href="https://www.instagram.com/" >
            <img alt="picture" src="img/insta.png"   class="linki h-10" >
                </a></div>
        <div class="p-2"><a href="https://twitter.com/explore" >
          <img alt="picture" src="img/twitter.png"   class="linki h-10" >
              </a>
            </div>
        <div class="p-2 ml-auto" >
          <p id="kolorek">Jakub Sotwin</p>
          <script src="script.js">
            </script></div>
      </div>
</div>

</main>
</body>
</html>
