<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Demo</title>
    <!-- <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style> -->
</head>

<body>
    <?php
    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. DIck',
            'purchaseUrl' => 'http://example.com',
            'year'=>'1976'
        ],
        [
            'name' => 'Langoliers',
            'author' => 'Ima K. DIck',
            'purchaseUrl' => 'http://example.com',
            'year'=>'1966'
        ],
        [
            'name' => 'Dark Matter',
            'author' => 'Philip K. DIck',
            'purchaseUrl' => 'http://example.com',
            'year'=>'1956'
        ],

    ];
    ?>

    <ul>
        <?php foreach ($books as $book): ?>
            <a href="<?= $book['purchaseUrl'] ?>">
                <li><?= "{$book['name']} {$book['year']}"; ?></li>
            </a>
        <?php endforeach; ?>
    </ul>

</body>

</html>