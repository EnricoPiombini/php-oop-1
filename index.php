    <!-- Creare un file index.php in cui:
    - è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’
     e stampati a schermo i valori delle relative proprietà -->

     <?php

     class Movie {
        public $title;
        public $author;
        public $genre;
        public $year;

        function __construct($_title, $_author, $_genre, $_year)
        {
            $this->title = $_title;
            $this->author = $_author;
            $this->genre = $_genre;
            $this->year = $_year;
            }
 }

 $movie1 = new Movie()












