<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warzywniak</title>
    <link rel ="stylesheet" href="styl_2.css">
</head>
<body>
    
    <div id="baner1">
    <h1>internetowy sklep z eko-warzywami</h1>
    </div>
</div>
 <div id="baner2">
 <ol>
        <li>warzywa</li>
        <li>owoce</li>
        <li><a href = "https://terapiasokami.pl"
        target="_blank"> soki</a></li>
    </ol>

 </div>
  
    <div id="glowny">
        <?php
        $polaczenie = mysqli_connect('localhost','root','','warzywka');
        $zapytanie1 = "SELECT nazwa, ilosc, opis, cena, zdjecie FROM produkty WHERE rodzaje_id IN (1,2)";
        
       
        


        ?>

        <div id="blok">

        </div>
    </div>

    
    
    <div id="stopka">
        <form action="sklep.html" method="post">
            Nazwa: <input type="text" name="nazwa">
            Cena: <input type="text" name="cena">
            <input type="submit" value="Dodaj produkt">
        </form>
        <br>
        Strone wykonał: adampandabuy
    </div>
    
</body>
</html>