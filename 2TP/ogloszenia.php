<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="strona_glowna.css" rel="stylesheet" type="text/css">
    <title>Ogloszenia</title>
</head>
<body>
<header>
        
        <ul>
            <ul class="menu" >
                <li> 
                    <a href="Strona_glowna.php">MENU</a> 
                    <ul>
                </li>
                        <li>
                            <a href="o_nas.html">O nas</a>
                        </li>
                        <li>
                            <a href="ogloszenia.html">Dodawanie ogłoszeń</a>
                        </li>
                        <li>
                            <a href="kontakt.html">Kontakt</a>
                        </li>
                    </ul>
                    <li>
                        <a href="strona_glowna.html">LOGIN</a>
                        <ul>
                    </li>
                    <li>
                        <a href="sing_in.html">Sing In</a>
                    </li>
                    
                    
                    <li>
                        <a href="log_in.html">Log In</a>
                    </li>

                    </ul>

    </header>
    <div class="pomyslnie">
        <h1>Dodano ogłoszenie!</h1>
    </div>
   <?php
   $pol = mysqli_connect('localhost','root','','ogloszenia');
   $SQL ="SELECT * FROM ogloszenie";
   @$tytul =$_POST['tytul'];
   @$content =$_POST['content'];
   @$imie_pseudonim =$_POST['imie_pseudonim'];
   $zap = "INSERT INTO ogloszenie(tytul, content,  imie_pseudonim) 
           VALUES ('".$tytul."','".$content."','".$imie_pseudonim."')";
           mysqli_query($pol, $zap);
           header("refresh: 2; url=./Strona_glowna.php");
   ?>

</body>
</html>



