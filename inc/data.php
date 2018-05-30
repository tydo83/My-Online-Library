<?php
/*DUE 5.2.18 Data.php complete the following elements*/
$catalog = [];

/*Books*/
$catalog[101] = [
    "title" => "100 Years of Solitude",
    "img" => "img/media/100-Years-of-Solitude.png",
    "genre" => "Magic realism, Novel",
    "format" => "Paperback",
    "year" => 1967,
    "category" => "Books",
    "authors" => [
        "Gabriel García Márquez",
        "Gregory Rabassa"
    ],
    "publisher" => "Harper Perennial Modern Classics",
    "isbn" => '9780060883287'
];
$catalog[102] = [
    "title" => "The Alchemist",
    "img" => "img/media/alchemist_425x425.jpg",
    "genre" => "Quest, Adventure fiction, Fantasy Fiction",
    "format" => "Paperback",
    "year" => 1988,
    "category" => "Books",
    "authors" => ["Paulo Coelho"],
    "publisher" => "HarperOne",
    "isbn" => '9780062315007'
];
$catalog[103] = [
    "title" => "The Vegetarian",
    "img" => "img/media/KB-The-Vegetarian_425x425.jpg",
    "genre" => "Contemporary literature, Literary fiction ",
    "format" => "Paperback",
    "year" => 2007,
    "category" => "Books",
    "authors" => ["Han Kang"],
    "publisher" => "Hogarth",
    "isbn" => '9781101906118'
];
$catalog[104] = [
    "title" => "Who moved my cheese",
    "img" => "img/media/who-moved-my-cheese_425x425.jpeg",
    "genre" => "Self-help, Fiction",
    "format" => "Paperback",
    "year" => 1998,
    "category" => "Books",
    "authors" => ["Spencer Johnson"],
    "publisher" => "G. P. Putnam's Sons",
    "isbn" => '9780091816971'
];
/*Movies*/
$catalog[201] = [
    "title" => "Forest Gump",
    "img" => "img/media/forestgump_425x425.jpg",
    "genre" => "Comedy, Drama, Romance",
    "format" => "DVD",
    "year" => 2001,
    "category" => "Movies",
    "director" => "Robert Zemeckis",
    "writers" => ["Eric Roth"],
    "stars" => [
        "Tom Hanks",
        "Sally Field",
        "Gary Sinise"
    ]
];
$catalog[202] = [
    "title" => "The Green Mile",
    "img" => "img/media/greenmile_425x425.jpg",
    "genre" => "Drama, Mystery & Suspense, Science Fiction & Fantasy",
    "format" => "DVD",
    "year" => 2000,
    "category" => "Movies",
    "director" => "Frank Darabont",
    "writers" => ["Frank Darabont"],
    "stars" => [
        "Tom Hanks",
        "Michael Clarke Duncan",
        "David Morse"
    ]
];
$catalog[203] = [
    "title" => "Ready Player One",
    "img" => "img/media/ready1__425x425.jpg",
    "genre" => "Action & Adventure, Science Fiction & Fantasy",
    "format" => "Film",
    "year" => 2018,
    "category" => "Movies",
    "director" => "Steven Spielberg",
    "writers" => [
        "Zak Penn", 
        "Ernest Cline"
    ],
    "stars" => [
        "Tye Sheridan",
        "Olivia Cooke",
        "Ben Mendelsohn"
    ]
];
$catalog[204] = [
    "title" => "The Shawsank Redemption",
    "img" => "img/media/redemption_425x425.jpg",
    "genre" => "Drama",
    "format" => "DVD",
    "year" => 1998,
    "category" => "Movies",
    "director" => "Frank Darabont",
    "writers" => ["Frank Darabont"],
    "stars" => [
        "Tim Robbins",
        "Morgan Freeman",
        "Bob Gunton"
    ]
];
/*Music*/
$catalog[301] = [
    "title" => "Da Capo",
    "img" => "img/media/yoo7_425x425.jpg",
    "genre" => "Pop, Ballad, Fusion Jazz",
    "format" => "CD",
    "year" => 2014,
    "category" => "Music",
    "artist" => "Hee Yul Yoo"
];
$catalog[302] = [
    "title" => "The Black Album",
    "img" => "img/media/jayzblack_425x425.jpg",
    "genre" => "Hip Hop",
    "format" => "CD",
    "year" => 2003,
    "category" => "Music",
    "artist" => "Jay-Z"
];
$catalog[303] = [
    "title" => "Happy",
    "img" => "img/media/happy_425x425.jpg",
    "genre" => "Pop",
    "format" => "CD",
    "year" => 2013,
    "category" => "Music",
    "artist" => "Parrell Williams"
];
$catalog[304] = [
    "title" => "25",
    "img" => "img/media/adel25_425x425.jpg",
    "genre" => "Soul, Pop, R&B",
    "format" => "CD",
    "year" => 2015,
    "category" => "Music",
    "artist" => "Adel"
];
?>