<?php require("config.php");?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPG-Visitors</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js">
    <script src="main.js"></script>
</head>
<body>
   <div class="content">
    <div class="container">
        <header class="hero is-primary">
        <h1>Registre visiteurs - Inscription</h1>
        </header>
        <div class="columns">
            <div class="column">
            <form class="box" >
               <!--  Se connecter à la webcam et capturer photo
                <canvas id="canvas">
                    <img id="take-photo"  alt="photo apparaitra ici">
                </canvas>
                <div class="camera" >
                    <video id="video">Video stream not available.</video>
                </div>
                <button class="button is-primary">Prendre la photo</button>--> 
                <p><strong>Prendre une photo</strong> </p>
                <input type="file" capture="user" accept="image/*">
            </form> 
            
            </div>  

            <div class="column is-three-quarters">
            <form class="box" method="post" action="http://localhost/CPG-Visitors/label.php">
                <div class="field">
                <label class="label">Nom</label>
                <div class="control">
                    <input class="input is-normal" type="text" placeholder="Nom" name="name">
                </div>
                </div>
            
                <div class="field">
                <label class="label">Prénom</label>
                <div class="control">
                    <input class="input is-normal" type="text" placeholder="Prénom" name="fname">
                </div>
                </div>

                <div class="field">
                    <label class="label">Email</label>
                    <div class="control">
                    <input class="input is-normal" type="text" placeholder="example@mail.com" name="email" >
                    </div>
                </div>
                <p><strong>Raison de votre visite:</strong></p>
                <div class="field">
                    <label class="label">Je viens suivre un cours</label>
                    <div class="select is-fullwidth">
                        <select>
                          <option>Selectionner le cours</option>
                        <!-- intégrer les données de l'api  à l'emplacement "option"-->
                          <option>options</option>
                        </select>
                      </div>   
                </div>

                <div class="field">
                    <label class="label">J'ai rdv avec</label>
                    <div class="control">
                        <!-- autocomplétion depuis l'api -->
                        <input class="input is-normal" type="" placeholder="Saisir le nom" name="nomProf">
                    </div>
                </div>
                <!--  au click -> envoyer les données vers bdd -->
                <button class="button is-primary" type="submit" >Valider</button>
            </form>
        </div> 
        </div>
    </div>
</div>     
</body>
</html>