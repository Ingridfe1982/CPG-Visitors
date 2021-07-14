<?php
        var_dump($_POST);?>
        <br>
 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>Etiquette</title>
</head>
<body>
    <div class="container">
    <div class="card">

        <div class="card-content">
          <div class="media">
            <div class="media-left">
              <figure class="image is-96x96">
                <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
              </figure>
            </div>
            <div class="media-content">
              <p class="title is-4">       
            <?php
            echo $_POST["name"].'<br>';
            echo $_POST["fname"].'<br>';
            echo $_POST["email"].'<br>';?> </p>
            <p>emplacement choix cours</p>
            <p>emplacement choix personnel</p>
            </div>
          </div>
      
          <div class="content">
            <p>emplacement QR code (visit_ID)</p>
          </div>
        </div>
      </div>
      </div>
</body>
</html>