<!DOCTYPE html>
<html lang="PL-pl">
    
<head>

    <meta charset="UTF-8"/>
    <meta name="description" content="Portal poświęcony rozwiązywaniu wszelakich działań matematycznych. Wejdź i sam przetestuj!"/>
    <meta name="keywords" content="działania, matematyczne, działania matematyczne, rozwiązanie, zadania, matematyka, kalkulator, przelicznik, narzędzie, proste, dodawanie, odejmowanie, mnożenie, dzielenie, potęgowanie"/>
    <meta name="author" content="Wojtek"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Potęgowanie</title>
    <meta http-equiv="X-UE-Compatible" content="IE=edge,chrome=1"/> 
    <meta http-equiv="Content-Type" content="text/html"/>
    <link rel="stylesheet" href="Style.css" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700&display=swap&subset=latin-ext" rel="stylesheet"/>
    
</head>

<body>

    <header>
        <a href="Index.html"><img src="Baner.jpg" alt="Baner"></a>
    </header>

    <nav>
        <a href="Strona1.html"> - Proste Działania</a>
        <a href="Strona2.php"> - Potęgowanie</a>
    </nav>

    <main>
        <h1>Potęgowanie</h1>

            <form method="post" action="Strona2.php">
                <i>Podaj Podstawę Potęgi: </i>
                <input type="number" name="liczba1" /><br/>
                <i>Podaj Dodatni, Całkowity Wykładnik Potęgi: </i>
                <input type="number" name="liczba2" /><br/>
                <input type="submit" value="Potęgowanie" name="Oblicz"/>
            </form>

            <?php
                if (empty($_POST["liczba1"]) || (empty($_POST["liczba2"]) && $_POST["liczba2"] != 0))
                {
                    echo "Wpisz Podstawę i Wykładnik Potęgi!";
                }

                else 
                {
                    if ($_POST["liczba2"] >= 0) 
                	{    
                            echo "Wynik Działania Wynosi: ";
                            echo pow($_POST["liczba1"], $_POST["liczba2"]);
                        }

                    else 
                        {
                            echo "Wykładnik Potęgi Musi Być Dodatni!";
                        }
            
                }  
            ?>
    </main>

</body>

</html>
