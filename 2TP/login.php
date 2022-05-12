<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="strona_glowna.css" rel="stylesheet" type="text/css">
    <title>Log In</title>
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
        <h1>Zalogowano pomyślnie!</h1>
    </div>
        <?PHP

        $pol = mysqli_connect('localhost','root','','ogloszenia');
        $SQL ="SELECT * FROM register";
        $wyk =mysqli_query($pol,$SQL);
        while($wiersz = mysqli_fetch_array($wyk)){
            if(!empty($haslo) && !empty($email)){ 
                if ($email == $wiersz['email']){  
                    if (($haslo) == $wiersz['haslo']){
                        header("Storna_glowna.html");;
                    }
                }
            }
        }


            mysqli_close($pol);
            header("refresh: 2; url=./Strona_glowna.php");
        ?>


</body>
</html>