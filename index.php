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
            'releaseYear' => '1968'
        ],
        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'purchaseUrl' => 'http://example.com',
            'releaseYear' => '2021'
        ],
        [
            'name' => 'The Martian',
            'author' => 'Andy Weir',
            'purchaseUrl' => 'http://example.com',
            'releaseYear' => '2011'
        ],

    ];
    $movies = [
        [
            'name' => 'Pink Panther',
            'releaseYear' => '1968'
        ],
        [
            'name' => 'Tenacious D ',
            'releaseYear' => '2006'
        ],
        [
            'name' => 'Barbie',
            'releaseYear' => '2023'
        ],

    ];

    function filterByAuthor($books, $author)
    {
        $filteredBooks = [];

        foreach ($books as $book) {
            if ($book['author'] === $author) {
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks;
    }

    function filterByDate($movies, $date)
    {
        $filteredMovies = [];

        foreach ($movies as $movie) {
            if ($movie['releaseYear'] >= $date) {
                $filteredMovies[] = $movie;
            }
        }
        return $filteredMovies;
    }
    ?>



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

</body>

</html>