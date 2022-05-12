<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="strona_glowna.css" rel="stylesheet" type="text/css">
    <title>Sing in</title>
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
        <h1>Zarejestowano pomyślnie!</h1>
    </div>
    <?php
        $pol = mysqli_connect('localhost','root','','ogloszenia');
        $SQL ="SELECT * FROM register";
        @$imie =$_POST['Imie'];
        @$nazwisko =$_POST['nazwisko'];
        @$email =$_POST['email'];
        @$haslo =$_POST['haslo'];
        @$urodziny =$_POST['urodziny'];
        $zap = "INSERT INTO register(imie, nazwisko, email, haslo, urodziny) 
                VALUES ('".$imie."','".$nazwisko."','".$email."','".$haslo."','".$urodziny."')";
                mysqli_query($pol, $zap);
        

        
        
        
        mysqli_close($pol);
        header("refresh: 2; url=./Strona_glowna.php");
    ?>
        

</body>
</html>



