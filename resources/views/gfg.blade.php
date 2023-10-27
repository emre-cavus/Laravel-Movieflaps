<!DOCTYPE html> 
<html> 
<head> 
    <title>DB CONNECTİON</title> 
    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <style> 
    body{
        background-color:black;
        color:white;
    }
        div { 
            top: 100px;
            font-family: 'Montserrat', sans-serif;
            font-size: 30px; 
            display: block;
            position: relative;
            text-align:center;
        } 
    </style> 
</head> 
<body> 
    <div> 
        <?php

if(DB::connection()->getPdo()) 
      { 
          echo "Successfully connected to the database => " 
                       .DB::connection()->getDatabaseName(); 
      } 


        /*
      if(DB::connection()->getPdo()) 
      { 
          echo "Successfully connected to the database => " 
                       .DB::connection()->getDatabaseName(); 
      } 
      */

        /*
            try { 
                if(DB::connection()->getPdo()) 
                { 
                    echo "Successfully connected to the database => " 
                                  .DB::connection()->getDatabaseName('Movieflaps'); 
                } 
            } 
            catch (Exception $e) { 
                echo "Unable to connect"; 
            } 
*/
/*
$servername = "localhost";
$username = "root";
$password = "";
$database = "Movieflaps";
$baglanti= new mysqli ($servername, $username, $password, $database);
if($baglanti === false){
 die("Bağlantı Hatası:" . $baglanti ->connect_error);
}
echo "Bağlantı Başarılı";
*/
?>
    </div> 
</body> 
</html> 
