<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Kuva-arvoitus</title>
    </head>
    <body>
        <h3>Tarkasta vastaus</h3> 
        <?php
        $vastaus = filter_input(INPUT_POST,'vastaus');
        if($vastaus === 'hirvi') {
        print "<p>Vastaus on oikein!</p>";
        }
        else {
            print "<p>Vastaus on väärin!</p>";
        }
        ?>
        <a href="index.php">Yritä uudestaan</a>
      
    </body>
   
</html>