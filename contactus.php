<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="imgs/favicon.ico" />
        <link rel="stylesheet" media="screen, print" href="style.css"/>
        <title>Gioco d'azzardo - Contattaci</title>
    </head>
    <body>
        <header>
            <div id="header">
                <a href="index.html"><img src="imgs/logo.jpg" width="200" alt="logo"></a>
                <h1>DIPENDENZA DA GIOCO D'AZZARDO</h1>
            </div>
            <div id="navbar">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="recognize.html">Info</a></li>
                    <!-- <li><a href="stop.html">Smettere</a></li> -->
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="map.php">Mappa</a></li>
                    <li><a class="active" href="contactus.php">Contattaci</a></li>
                </ul>
            </div>
    </header>

    <div id="container">
        <div style="text-align:center">
          <h2>Contattaci</h2>
          <p>Ti aiuteremo a trovare le risorse e i punti di incontro di cui hai bisogno.</p>
        </div>
          <div>
            <form name="contactform" onsubmit="return validateForm()" method="POST" action="contactus.php">
              <label name="namelbl" for="fname">Nome*</label>
              <input type="text" id="fname" name="fname" placeholder="Es. Mario">
              <label for="lname">Cognome</label>
              <input type="text" id="lname" name="lname" placeholder="Es. Rossi">
              <label for="mail">Email</label>
              <input type="text" id="mail" name="mail" placeholder="m.rossi@mail.it">
              <label for="regione">Regione*</label>
              <select id="regione*" name="regione">
                <option value="abruzzo">Abruzzo</option>
                <option value="basilicata">Basilicata</option>
                <option value="calabria">Calabria</option>
                <option value="campania">Campania</option>
                <option value="emilia-romagna">Emilia-Romagna</option>
                <option value="Friuli-Venezia Giulia">Friuli-Venezia Giulia</option>
                <option value="Lazio">Lazio</option>
                <option value="Liguria">Liguria</option>
                <option value="Lombardia">Lombardia</option>
                <option value="Marche">Marche</option>
                <option value="Molise">Molise</option>
                <option value="Piemonte">Piemonte</option>
                <option value="Puglia">Puglia</option>
                <option value="Sardegna">Sardegna</option>
                <option value="Sicilia">Sicilia</option>
                <option value="Toscana">Toscana</option>
                <option value="Trentino-Alto Adige">Trentino-Alto Adige</option>
                <option value="Umbria">Umbria</option>
                <option value="Valle d'Aosta">Valle d'Aosta</option>
                <option value="Veneto">Veneto</option>
              </select>
              <label for="phonen">Telefono</label>
              <input type="text" id="phonen" name="phonen" placeholder="3695691212">
              <label for="contenuto">Contenuto*</label>
              <textarea id="contenuto" name="contenuto" placeholder="Descriviti e descrivici il tuo problema." style="height:170px"></textarea>
              <label id="reslbl"></label><br>
              <input type="submit" value="Invia"> 
            </form>
        </div>
      </div>


      <footer>
          <div id="container">
              <p style="text-align: center">Copyright© 2019 - Bast'azzardo</p>
          </div>
      </footer>
    </body>
</html>

<?php
  if(isset($_POST['mail']))
  {
    mail(
      'testmail@something.it',
      'Contatto da sito web',
      $_POST["fname"] . $_POST["lname"] . ' - ' . $_POST["phonen"] . ' - ' .  $_POST["regione"] . "\n\n" . $_POST["contenuto"] . "\n\n" . $_POST["mail"],
      'From: ' . $_POST["fname"] . ' '  . $_POST["lname"]
    );
  }
?>

<script>
  //semplice controllo di validità del form, client-side
  function validateForm() 
  {
    var regex = /^(\((00|\+)39\)|(00|\+)39)?(38[890]|34[7-90]|36[680]|33[3-90]|32[89])\d{7}$/;
    var mail_regex = /^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+([;.](([a-zA-Z0-9_\-\.]+)@{[a-zA-Z0-9_\-\.]+0\.([a-zA-Z]{2,5}){1,25})+)*$/;

    var nome = document.forms["contactform"]["fname"].value;
    var contenuto = document.forms["contactform"]["contenuto"].value;
    if (nome == "" || contenuto == "" || mail == "") 
    {
      document.getElementById("reslbl").style.color = "red";
      document.getElementById("reslbl").innerHTML = "Uno o più campi obbligatori (*) non sono stati compilati.";
      return false;
    }

    if (regex.test(document.forms["contactform"]["phonen"].value) == false)
    {
      document.getElementById("reslbl").style.color = "red";
      document.getElementById("reslbl").innerHTML = "Il numero di telefono inserito non è valido.";
      return false;
    }

    //controllo validità email
    if (mail_regex.test(document.forms["contactform"]["mail"].value) == false)
    {
      document.getElementById("reslbl").style.color = "red";
      document.getElementById("reslbl").innerHTML = "La mail inserita non è valida.";
      return false;
    }

    document.getelement(form).submit()
    return true;
  }
</script>