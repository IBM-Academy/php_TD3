<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mes réalisations</title>
  </head>
  <body>

<?php include_once 'data/recent_projects.php'; ?>

<?php
echo "<h1>Mes Réalisations</h1>";
if (!empty($achievements)) {
    echo "<ul>";
    foreach ($achievements as $key => $achievement) {
        echo "<li>";
        echo "<h2>{$achievement['titre']}</h2>";
        echo "<p>{$achievement['description']}</p>";
        echo "<small>Date : " . date('d-m-Y', strtotime($achievement['date'])) . "</small><br>";
        // Lien vers les détails de la réalisation en passant par 'loc=realisation' et l'ID de la réalisation
        echo "<a href=\"index.php?loc=achievement&id={$key}\">Voir en détail</a>";
        echo "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Aucune réalisation disponible.</p>";
}
?>

  </body>
</html>
