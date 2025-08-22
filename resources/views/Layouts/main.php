<!DOCTYPE html>
<html lang="es" data-theme="light">

<head>
    <meta charset="UTF-8">
    <title><?= $title . " | Heaven Shop" ?? 'Heaven Shop' ?></title>
    <link rel="stylesheet" href="/css/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="shortcut icon" href="/Images/image.png" type="image/x-icon">
</head>

<body>
    <?php
    require_once BASE_PATH . "/resources/views/Components/header.php";
    ?>
    <?= $content ?? '' ?>
    <?php
    require_once BASE_PATH . "/resources/views/Components/footer.php";
    ?>
</body>

</html>