<?php
require "fonctions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $date = $_POST["date"];
    $filiere = $_POST["filiere"];
    $notes = $_POST["notes"];

    if (!verifierNotes($notes)) {
        echo "<p style='color:red;'>Erreur : notes invalides !</p>";
        exit;
    }

    $moyenneGenerale = calculerMoyenneGenerale($notes);
    $mention = getMention($moyenneGenerale);
    $decision = decisionFinale($moyenneGenerale);

    echo "<h2>Bulletin de Notes</h2>";

    echo "<h3>Informations Étudiant</h3>";
    echo "Nom: $nom $prenom <br>";
    echo "Date de naissance: $date <br>";
    echo "Filière: $filiere <br><br>";

    echo "<h3>Notes</h3>";
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Matière</th><th>Note 1</th><th>Note 2</th><th>Moyenne</th></tr>";

    foreach ($notes as $matiere => $tabNotes) {
        $moyenneMatiere = calculerMoyenneMatiere($tabNotes);

        echo "<tr>";
        echo "<td>$matiere</td>";
        echo "<td>{$tabNotes[0]}</td>";
        echo "<td>{$tabNotes[1]}</td>";
        echo "<td>" . round($moyenneMatiere,2) . "</td>";
        echo "</tr>";
    }

    echo "</table><br>";

    echo "<h3>Résultat Final</h3>";
    echo "Moyenne Générale: " . round($moyenneGenerale,2) . "<br>";
    echo "Mention: $mention <br>";
    echo "Décision: $decision <br>";
}
?>
