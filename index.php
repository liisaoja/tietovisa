<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Kuva-arvoitus</title>
    </head>
    <body>
        <h3>Mikä eläin on kuvassa?</h3> 
        <div>
            <img src="img/hirvi.jpg" alt="">
        </div>
    <form action= "tarkasta.php" method="post">
   
        <div>
            <label>
                <input type="radio" value="karhu" name="vastaus">
                Karhu
            </label>
        </div>
        <div>
            <label>
               <input type="radio" value="susi" name="vastaus">
                Susi
            </label>
        </div>
        <div>
            <label>
                <input type="radio" value="hirvi" name="vastaus">
               Hirvi
            </label>
        </div>
        <div>
            <label>
                <input type="radio" value="poro" name="vastaus">
                Poro
            </label>
        </div>
        <button>Tarkista</button>
            
       
         </form>
        
    </body>
   
    
</html>