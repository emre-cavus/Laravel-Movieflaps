<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/dbconn.css">
  <title>connection</title>
</head>
<body>
    <div class="dbconn">
        <?php
        //   include('session.php');

        if(DB::connection()->getPdo()) 
        { 
            echo "Successfully connected to the database => " 
                          .DB::connection()->getDatabaseName(); 
        } 
        else{
          echo "NOT FOUND " ;

        }
        ?>
    </div>
</body>
</html>
