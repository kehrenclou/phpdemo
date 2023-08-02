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
            'year' => '1976'
        ],
        [
            'name' => 'Langoliers',
            'author' => 'Ima K. DIck',
            'purchaseUrl' => 'http://example.com',
            'year' => '1966'
        ],
        [
            'name' => 'Dark Matter',
            'author' => 'Philip K. DIck',
            'purchaseUrl' => 'http://example.com',
            'year' => '1956'
        ],

    ];
    ?>

    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= "{$book['name']} {$book['year']}"; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

  <h1>Solution</h1>
    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?>     <?= $book['year'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>