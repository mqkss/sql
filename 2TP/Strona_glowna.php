<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona glowna</title>
    <link href="strona_glowna.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        
        <ul>
            <ul class="menu" >
                <li>
                    <img class="logo" src="logo.png">
                </li>
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
    <div class="naglowek">
        <h1>Ogłoszenia</h1><br><br>
    </div>
    <div class="content">
        <table>
                        <?php
                        $pol = mysqli_connect('localhost', 'root','', 'ogloszenia');
                                $zap = "SELECT tytul, content, imie_pseudonim FROM ogloszenie
                                        ORDER BY id DESC";
                                $wyk = mysqli_query($pol, $zap);
                                while ($wiersz = mysqli_fetch_array($wyk)) {
                                    echo "<tr>"."<td class=\"ogloszenie\">";
                                    echo "<div class=\"title\">". "Tytuł: ".$wiersz['tytul']."</div>";
                                    echo "<div class=\"nick\">". "Autor: ".$wiersz['imie_pseudonim']."</div>";
                                    echo "<div class=\"pole\">". "Treść: ".$wiersz['content']. '</div>';
                                    echo "<td>"."</tr>";
                                }

                                mysqli_close($pol);
                    ?>
        </table>
    </div>
</body>
</html>