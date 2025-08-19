<!DOCTYPE html>
<html lang="es" data-theme="light">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Heaven Shop' ?></title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="bg-gray-100">
    <main class="p-6">
        <?= $content ?? '' ?>
    </main>
</body>

</html>