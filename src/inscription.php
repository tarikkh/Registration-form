<?php 
if (!empty($_POST["nom"]) &&
    !empty($_POST["prenom"]) &&
    !empty($_POST["naissance"]) && 
    !empty($_POST["sexe"])&&
    !empty($_POST["classe"]) &&
    !empty($_POST["email"]) &&
    !empty($_POST["telephone"])&&
    !empty($_POST["telephonePere"])&&
    !empty($_POST["telephoneMere"])&&
    !empty($_POST["CIN"])&&
    !empty($_POST["Massar"])
    ) {
        function check($massar){
            require("./dbConnction.php");
        
            $sql = "SELECT * FROM etudiant where Massar = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$massar]);
        
            if ($stmt -> rowCount() != 0){
                return true;
            }else{
                return false;
            }
        }

        if (check($Massar)) {
            require("./dbConnction.php");
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $naissance = $_POST["naissance"];
            $sexe = $_POST["sexe"];
            $classe = $_POST["classe"];
            $email = $_POST["email"];
            $telephone = $_POST["telephone"];
            $telephonePere = $_POST["telephonePere"];
            $telephoneMere = $_POST["telephoneMere"];
            $CIN = $_POST["CIN"];
            $Massar = $_POST["Massar"];
            
            $sql = "Insert INTO etudiant(Nom,Prenom,Date_de_naissance,Sexe,Classe,email,telephone,telephonePere,telephoneMere,CIN,Massar)
            values(?,?,?,?,?,?,?,?,?,?,?);";
            
            $stmt = $conn->prepare($sql);
            $stmt->execute([$nom, $prenom, $naissance, $sexe, $classe, $email, $telephone, $telephonePere, $telephoneMere, $CIN, $Massar]);

            $successMessage = "Inscription réussie.";
            header("Location:../index.php?message=" . urlencode($successMessage));
        }

        else {
            $errorMessage = "Cet utilisateur existe déjà";
            header("Location: ../index.php?error=" . urlencode($errorMessage));
        }
    


    
}else {
    $errorMessage = "Tous les champs sont obligatoires.";
    header("Location: ../index.php?error=" . urlencode($errorMessage));
}



?>