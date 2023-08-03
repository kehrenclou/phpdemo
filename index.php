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
function filter($items, $key, $value)
{
    $filteredItems = [];

    foreach ($items as $item) {
        if ($item[$key] >= $value) {
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
}
$filteredBooks = filter($books, 'releaseYear', '2000');
function filterRefactor($items, $fn)
{
    $filteredItems = [];

    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
}


$filteredBooksRefactor = filterRefactor($books, function ($book) {
    return $book['releaseYear'] >= 2000;
});
$filteredBooksPhpArrayFilter = array_filter($books, function ($book) {
    return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2000;
});

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
require "index.view.php";
?>