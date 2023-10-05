<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.svg" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="shortcut icon" href="src/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="src/style.css">
    <title>Mowadaba - Inscription</title>
</head>

<body>
    <nav class="blue darken-4">
        <div class="nav-wrapper container">
            <a class="brand-logo hide-on-med-and-down" href="./index.php"><img src="src/logo.svg" alt="Mowadaba Logo" width="30" height="25"> Mowadaba</a>
        </div>
    </nav>
    <div class="container">
        <form action="src/inscription.php" method="post" id="registrationForm">
            <div class="center-align">
                <i class="large material-icons">person</i>
                <h1>Inscription</h1>
            </div>
            <?php
         if (isset($_GET["message"]) || isset($_GET["error"])) {
            if (isset($_GET["message"])) {
                $successMessage = urldecode($_GET["message"]);
                echo '<div style="text-align: center; padding: 10px; margin: 0 auto; max-width: 400px; font-weight: bold; margin-top: 20px; background-color: #DFF2BF; border: 2px solid #4F8A10; color: #4F8A10;">' . $successMessage . '</div>';
            } elseif (isset($_GET["error"])) {
                $errorMessage = urldecode($_GET["error"]);
                echo '<div style="text-align: center; padding: 10px; margin: 0 auto; max-width: 400px; font-weight: bold; margin-top: 20px; background-color: #F2DEDE; border: 2px solid #D9534F; color: #D9534F;">' . $errorMessage . '</div>';
            }
        }
        ?>
            <div class="input-field">
                <input type="text" name="nom" id="nom" required>
                <label for="nom">Nom</label>
            </div>
            <div class="input-field">
                <input type="text" name="prenom" id="prenom" required>
                <label for="prenom">Prénom</label>
            </div>
            <div class="input-field">
                <input type="date" name="naissance" id="naissance" required>
                <label for="naissance">Date de naissance</label>
            </div>
            <div>
                <p>Sexe:</p>
                <label>
                    <input type="radio" name="sexe" id="homme" value="Homme" checked required>
                    <span>Homme</span>
                </label>
                <label>
                    <input type="radio" name="sexe" id="femme" value="Femme" required>
                    <span>Femme</span>
                </label>
            </div>
            <div class="input-field">
                <select name="classe" id="classe" required>
                    <option value="" disabled>Choisissez votre classe</option>
                    <option value="SRI1">SRI1</option>
                    <option value="SRI2">SRI2</option>
                    <option value="DSI1">DSI1</option>
                    <option value="DSI2">DSI2</option>
                </select>
                <label for="classe">Classe</label>
            </div>
            <div class="input-field">
                <input type="email" name="email" id="email" required placeholder="user@gmail.com">
                <label for="email">Adresse e-mail</label>
            </div>
            <div class="input-field">
                <input type="tel" name="telephone" id="telephone" required>
                <label for="telephone">Numéro de téléphone</label>
            </div>
            <div class="input-field">
                <input type="tel" name="telephonePere" id="telephonePere" required>
                <label for="telephonePere">Numéro de téléphone du père</label>
            </div>
            <div class="input-field">
                <input type="tel" name="telephoneMere" id="telephoneMere" required>
                <label for="telephoneMere">Numéro de téléphone de la mère</label>
            </div>
            <div class="input-field">
                <input type="text" name="CIN" id="CIN" required>
                <label for="CIN">CIN</label>
            </div>
            <div class="input-field">
                <input type="text" name="Massar" id="Massar" required>
                <label for="Massar">Massar</label>
            </div>
            <button style="width: 100%; border-radius: 15px;" class="btn waves-effect waves-light blue darken-2" type="submit" onclick="validateForm()">S'inscrire</button>
        </form>
    </div>
    <footer style="margin-top: 30px;" class="page-footer blue darken-4">
        <div class="container center-align">
            <strong>&copy; 2023</strong>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="src/index.js"></script>
</body>

</html>