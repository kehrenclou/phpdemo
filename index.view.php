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

    <h1>FIlter for Andy Weir conditional statement</h1>
    <ul>
        <?php foreach ($books as $book): ?>
            <?php if ($book['author'] === 'Andy Weir'): ?>
                <li>
                    <a href="<?= $book['purchaseUrl'] ?>">
                        <?= $book['name']; ?>         <?= $book['releaseYear'] ?>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <h2>Use filterByAuthor function to filter</h2>
    <ul>
        <?php foreach (filterByAuthor($books, 'Andy Weir') as $book): ?>

            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?>     <?= $book['releaseYear'] ?>
                </a>
            </li>

        <?php endforeach; ?>
    </ul>
    <h2>Use filterByDate function to filter Movies</h2>
    <ul>
        <?php foreach (filterByDate($movies, '2000') as $movie): ?>

            <li>
                <?= $movie['name']; ?>     <?= $movie['releaseYear']; ?>
            </li>

        <?php endforeach; ?>
    </ul>
    <h2>Use filter to check movie by year</h2>
    <ul>
        <?php foreach (filter($movies, 'releaseYear', '2000') as $movie): ?>

            <li>
                <?= $movie['name']; ?>     <?= $movie['releaseYear']; ?>
            </li>

        <?php endforeach; ?>
    </ul>
    <h2>Filter refactor with function</h2>
    <ul>
        <?php foreach ($filteredBooksRefactor as $book): ?>
            <li>
                <?= $book['name']; ?>     <?= $book['releaseYear']; ?>
            </li>
        <?php endforeach ?>
    </ul>
    <h2>Filter refactor with array function</h2>
    <ul>
        <?php foreach ($filteredBooksPhpArrayFilter as $book): ?>
            <li>
                <?= $book['name']; ?>     <?= $book['releaseYear']; ?>
            </li>
        <?php endforeach ?>
    </ul>

</body>

</html>