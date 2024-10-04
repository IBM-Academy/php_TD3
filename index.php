<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet exemple</title>
</head>
<body>
    

<?php 

include 'template/header.php';

$loc = filter_input(INPUT_GET, "loc");
$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

echo "Your input: $loc";

switch ($loc) {
    case 'home':
        include 'pages/home.html';
        break;
    case 'contact':
        include 'pages/contact.html';
        break;
    case 'about':
        include 'pages/about.html';
        break;
    case 'achievements':
        include 'pages/achievements.php';
        break;
    case 'achievement':
        if ($id) {
            include 'pages/achievement.php';
        } else {
            include 'pages/404.html';
        }
        break;
    default:
        include 'pages/404.html';
        break;
}

include 'template/footer.php';

?>

</body>
</html>