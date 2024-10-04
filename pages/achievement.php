<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mes réalisations</title>
  </head>
  <body>
    <h1>Une réalisation spécifique</h1>
    <p>Uniquement celle là</p>

    <?php include_once 'data/recent_projects.php'; ?>

    <?php 
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT, [
        'options' => [
            'min_range' => 1, // Assure que l'ID est un entier positif
        ]
    ]);
    
    // Vérification si l'ID est valide et correspond à une réalisation existante
    if ($id && isset($achievements[$id])) {
        // Récupération des détails de la réalisation correspondant à l'ID
        $achievement = $achievements[$id];

        // Suppression de la ligne var_dump après vérification
        // var_dump($achievements); 
    
        // Affichage des détails de la réalisation
        echo "<h1>{$achievement['titre']}</h1>";
        echo "<p>{$achievement['description']}</p>";
        echo "<small>Date de réalisation : " . date('d-m-Y', strtotime($achievement['date'])) . "</small>";
    } else {
        // Si l'ID n'est pas valide ou n'existe pas dans le tableau, afficher un message d'erreur
        echo "<h1>Erreur</h1>";
        echo "<p>La réalisation demandée n'existe pas.</p>";
    }
    
    // Liens de navigation vers les autres réalisations
    echo '<nav>';
    foreach ($achievements as $key => $achievement) {
        echo "<a href=\"index.php?loc=achievement&id={$key}\">{$achievement['titre']}</a><br>";
    }
    echo '</nav>';
    ?>

  </body>