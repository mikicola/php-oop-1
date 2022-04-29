<!-- 
create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

class Movie
{
   private $title;
   private $director;

   private $genre;
   private $year;
   private $rating = '';


   // si mette $_ per distinguerli, è una convenzione
   public function __construct($_title, $_director){
      $this->title = $_title;
      $this->director = $_director;
   }

   public function getMovieTitle(){
      return $this-> title;
   }

   public function getMovieDirector(){
      return $this-> director;
   }

   public function setMovieGenre($_genre){
      $this->genre = $_genre;
      return $this;
   }

   public function setMovieYear($_year){
      $this->year = $_year;
      return $this;
   }

   public function setMovieRating($_rating){
      $this->rating = $_rating;
      return $this;
   }
}

$movieKillBill = new Movie('Kill Bill: Volume 1', 'Quentin Tarantino');
$movieKillBill->setMovieGenre('Action');
$movieKillBill->setMovieYear('2003');
$movieKillBill->setMovieRating('8,2/10');
var_dump($movieKillBill)

?>
