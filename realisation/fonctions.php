<?php

function verifierNotes($notes) {
    foreach ($notes as $matiere => $tabNotes) {
        foreach ($tabNotes as $note) {
            if ($note < 0 || $note > 20) {
                return false;
            }
        }
    }
    return true;
}

function calculerMoyenneMatiere($notesMatiere) {
    return array_sum($notesMatiere) / count($notesMatiere);
}

function calculerMoyenneGenerale($notes) {
    $total = 0;
    $count = 0;

    foreach ($notes as $matiere => $tabNotes) {
        $total += array_sum($tabNotes);
        $count += count($tabNotes);
    }

    return $total / $count;
}

function getMention($moyenne) {
    if ($moyenne >= 16) return "Très Bien";
    elseif ($moyenne >= 14) return "Bien";
    elseif ($moyenne >= 12) return "Assez Bien";
    elseif ($moyenne >= 10) return "Passable";
    else return "Ajourné";
}

function decisionFinale($moyenne) {
    if ($moyenne >= 10) return "Admis";
    else return "Ajourné";
}

?>
