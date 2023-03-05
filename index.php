<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP object oriented programming 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
    
    

    <?php
        class Movie {
            public $title;
            public $year;
            public $rating;
            public $votes;
            public $genres = [];

            function __construct($_title, $_year, $_rating, $_votes, $_genres) {
                $this->title = $_title;
                $this->year = $_year;
                $this->rating = $_rating;
                $this->votes = $_votes;
                $this->genres = $_genres;
            }

            function displayInfo() {
                echo "Title: " . $this->title . "<br>";
                echo "Year: " . $this->year . "<br>";
                echo "Rating: " . $this->rating . "<br>";
                echo "Votes: " . $this->votes . "<br>";
                echo "Genres: " . implode(", ", $this->genres) . "<br>";
            }
        }

        $movie1 = new Movie("The Shawshank Redemption", 1994, 9.4, "2.7m",  ["Drama"]);
        $movie2 = new Movie("Donnie Darko", 2001, 8.0, "811k", ["Drama", "Mystery", "Sci-Fi"]);

        $movie1->displayInfo();
        echo "<br>";
        $movie2->displayInfo();

    ?>






</body>
</html>