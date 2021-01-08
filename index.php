<?php 

$json = file_get_contents("https://flynn.boolean.careers/exercises/api/array/music");



$json_a = json_decode($json, true);

// header('Content-Type: application/json');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="root">
      <header>
        <div class="container">
          <img src="logo.png" alt="logo"/>
          
          </div>
        </div>


      </header>
      <main>
    
            
        </main>

      <div class="cds-container container">
       

        <?php 


            for ($i = 0; $i < count($json_a['response']); $i++) {

                

                ?>
                 <div class="cd">
                    <img
                    src="
                    <?php
                    echo $json_a['response'][$i]['poster'];
                    ?>"
                    alt=""
                    />
                    <h3>
                    <?php
                    echo $json_a['response'][$i]['title'];
                    ?>
                    </h3>
                    <span class="author">
                    <?php
                    echo $json_a['response'][$i]['author'];
                    ?>
                    </span>
                    <span class="year">
                    <?php
                    echo $json_a['response'][$i]['year'];
                    ?>
                    </span>
                    <span>
                    <?php
                    echo $json_a['response'][$i]['genre'];
                    ?>
                    </span>
                </div> 

                <?php
            };

                
            ?>
      </div>
    </div>
</body>
</html>






