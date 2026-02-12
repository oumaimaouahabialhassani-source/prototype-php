<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = $_POST["nom"];
    $notes = [
        $_POST["note1"],
        $_POST["note2"],
        $_POST["note3"]
    ];

 
    $valide = true;

    foreach ($notes as $note) {
        if ($note < 0 || $note > 20) {
            $valide = false;
            break;
        }
    }



function calculerMoyenne($notes) {
    $somme = array_sum($notes);
    $nombre = count($notes);
    return $somme / $nombre;
}


function getMention($moyenne) {
    if ($moyenne >= 16) {
        return "Très Bien";
    } elseif ($moyenne >= 14) {
        return "Bien";
    } elseif ($moyenne >= 12) {
        return "Assez Bien";
    } elseif ($moyenne >= 10) {
        return "Passable";
    } else {
        return "Ajourné";
    }
}





    if ($valide) {
        $moyenne = calculerMoyenne($notes);
        $mention = getMention($moyenne);

        echo "<h3>Résultat :</h3>";
        echo "Nom : $nom <br>";
        echo "Moyenne : " . round($moyenne, 2) . "<br>";
        echo "Mention : $mention";
    } else {
        echo "<p style='color:red;'>Les notes doivent être entre 0 et 20</p>";
    }
}

?>

