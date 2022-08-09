<?php 
if(isset($_POST['submit'])){
    $to = "biuro@dzwigbarlinek.pl"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $subject = "Formularz kontaktowy";
    $message = $from . " napisał:" . "\n\n" . $_POST['message'];

    $headers = "Od:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Wiadomość wysłana. Dziekujemy, " . $from . ", skontaktujemy się z tobą w krótce.";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt - StalMaks</title>

    <link rel="icon" href="../static/img/favicon.ico">
    

    <link rel="stylesheet" href="../static/css/mystyles.css">
    <link rel="stylesheet" href="../static/css/style.css">

    <style>
      .card{
        height: 400px;
        background-color: white;
      }
      .card-content{
        height: 100%;
      }
      .contentes{
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }
      .content span{
        font-size: 1.3rem;
      }
      .sekcjakon{
        display: flex;
        width: 70%;
      }
      .kontakttxt{
        display: flex;
        flex-direction: column;
        margin-left: 1rem;
      }
      .kontakttxt2{
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-left: 1rem;
      }
      @media (max-width: 1103px) {
        .content span {
        font-size: 0.8rem;
        }
      }
      .formularz{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
      }
      
    </style>

  <script src="https://kit.fontawesome.com/0adb7c2a19.js" crossorigin="anonymous"></script>

</head>
<body>
  <nav class="navbar is-black " role="navigation" aria-label="main navigation">
    <img src="../static/img/logo.png" width="200" height="28" style="padding: 1rem 0 1rem 1rem;">
    <div class="navbar-brand">    
      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
  
    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
      </div>
  
      <div class="navbar-end">
        <a class="navbar-item przedmiot navbartekst" href="/">
          Strona główna
        </a>
  
        <a class="navbar-item przedmiot navbartekst" href="#">
          Kontakt
        </a>
      </div>
    </div>
  </nav>

  <div class="sep"></div>

<section class="columns is-half">

  <div class="column">
    <div class="card">
      <div class="card-content">
        <div class="content contentes">
          <div class="sekcjakon" style="margin-bottom: 4rem;">
            <img src="../static/img/tel.png" alt="Obrazek Telefonu">
            <div class="kontakttxt" style="margin-top: 0.6rem;">
              <span>
                Krzysztof: 509 841 663
              </span>
              <span>
                Rafał: 665 562 572
              </span>
            </div>
          </div>
          <div class="sekcjakon" style="margin-bottom: 4rem;">
            <img src="../static/img/poczta.png" alt="Obrazek Email">
            <div class="kontakttxt2">
              <span>
              biuro@dzwigbarlinek.pl
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="card-content">
      <form action="" method="post" class="formularz">

        <input class="input is-medium" type="email" name="email" placeholder="Adres Email">

        <textarea class="textarea" style="resize:none; width:70%; height: 170px; margin-top:1rem;" rows="10" name="message" cols="30" placeholder="Wiadomość"></textarea>
        <input style="margin-top:1rem;"class="button is-danger" type="submit" name="submit" value="Wyślij">
</form>
      </div>
    </div>
  </div>

</section>

<footer class="footer">
  <div class="content has-text-centered" style="display: flex; justify-content: center; flex-direction: row; flex-wrap: nowrap; color: white;">
<ul style="text-align: left; list-style: none; margin-top: 0; margin-left: 0; margin-right: 0rem;">
  <img src="../static/img/logo.png" alt="Logo Stalmaks" style="width: 20rem; margin-left: -80px; margin-bottom: -23px;">
      <li>StalMaks Krzysztof Gilewicz </li>
      <li>74-320 Barlinek</li>  
      <li>tel: 509 841 663</li>
      <li>tel: 665 562 572</li>
      <li style="font-size:0.9rem;">mail: biuro@dzwigbarlinek.pl</li>
    </ul>
    <div class="mapouter"><div class="gmap_canvas"><iframe width="700" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=53.00345865850624,%2015.222969509623299&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a><br><style>.mapouter{position:relative;text-align:right;height:250px;width:700px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:250px;width:700px;}</style></div></div>
  </div>
</footer>
<div class="stpasek">
  <img src="../static/img/logo3.png" alt="Logo Stalmaksu">
  <span style="align-self:center; color: white;">© 2017 by StalMaks Krzysztof Gilewicz. Wszystkie prawa zastrzeżone</span>
</div>

      <script>
        document.addEventListener('DOMContentLoaded', () => {

// Get all "navbar-burger" elements
const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Check if there are any navbar burgers
if ($navbarBurgers.length > 0) {

  // Add a click event on each of them
  $navbarBurgers.forEach( el => {
    el.addEventListener('click', () => {

      // Get the target from the "data-target" attribute
      const target = el.dataset.target;
      const $target = document.getElementById(target);

      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
      el.classList.toggle('is-active');
      $target.classList.toggle('is-active');

    });
  });
}

});
      </script>
      
</body>
</html>