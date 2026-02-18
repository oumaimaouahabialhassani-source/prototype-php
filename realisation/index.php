<!DOCTYPE html>
<html>
<head>
    <title>Gestion des Notes</title>
</head>
<body>

<h2>Formulaire Étudiant</h2>

<form method="POST" action="traitement.php">

Nom: <input type="text" name="nom" required><br><br>
Prénom: <input type="text" name="prenom" required><br><br>
Date de naissance: <input type="date" name="date" required><br><br>
Filière: <input type="text" name="filiere" required><br><br>

<h3>Notes</h3>

Frontend 1: <input type="number" name="notes[Frontend][]" min="0" max="20" required>
Frontend 2: <input type="number" name="notes[Frontend][]" min="0" max="20" required><br><br>

Backend 1: <input type="number" name="notes[Backend][]" min="0" max="20" required>
Backend 2: <input type="number" name="notes[Backend][]" min="0" max="20" required><br><br>

Entreprenariat 1: <input type="number" name="notes[Entreprenariat][]" min="0" max="20" required>
Entreprenariat 2: <input type="number" name="notes[Entreprenariat][]" min="0" max="20" required><br><br>

Anglais 1: <input type="number" name="notes[Anglais][]" min="0" max="20" required>
Anglais 2: <input type="number" name="notes[Anglais][]" min="0" max="20" required><br><br>

Soft Skills 1: <input type="number" name="notes[Soft Skills][]" min="0" max="20" required>
Soft Skills 2: <input type="number" name="notes[Soft Skills][]" min="0" max="20" required><br><br>

<input type="submit" value="Générer Bulletin">
<input type="reset" value="Réinitialiser">

</form>

</body>
</html>
