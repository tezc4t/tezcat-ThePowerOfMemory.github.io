<!-- head.php -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Titre dynamique -->
    <title><?= $title ?? "Power Of Memory" ?></title>

    

    <!-- Feuille de style principale -->
    <link rel="stylesheet" href="Game/memory/pagejeux.css">

    <!-- Feuille de style spécifique à la page (optionnelle) -->
    <?php if (!empty($custom_css)): ?>
        <link rel="stylesheet" href="<?= $custom_css ?>">
    <?php endif; ?>
</head>