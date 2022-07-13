    <!-- Creare un file index.php in cui:
    - è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’
     e stampati a schermo i valori delle relative proprietà -->

    <?php

    class Movie
    {
        public $title;
        public $authorName;
        public $authorSurname;
        public $genre;
        public $year;
        public function getDirectorname(){
            return $this ->authorName . " " . $this->authorSurname;
        }

        function __construct($_title, $_authorName, $_authorSurname, $_genre, $_year)
        {
            $this->title = $_title;
            $this->authorName = $_authorName;
            $this->authorSurname = $_authorSurname;
            $this->genre = $_genre;
            $this->year = $_year;
        }
    };

    $movie1 = new Movie("Avatar", "James", "Cameron", "Fantasy", 2009);
    //var_dump($movie1);

    $movie2 = new Movie("Inception", "Cristopher", "Nolan", "ScienceDrama", 2010);
//var_dump($movie2);

    echo " Il film " . $movie1->title . " è diretto da " . $movie1->getDirectorname() . " ,è di genere " . $movie1->genre . " ed è uscito nel " . $movie1->year . ".<br>";
    echo " Il film " . $movie2->title . " è diretto da " . $movie2->getDirectorname() . " ,è di genere " . $movie2->genre . " ed è uscito nel " . $movie2->year;

    



