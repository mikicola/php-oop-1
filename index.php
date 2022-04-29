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

   private $genre = 'Informazione non ancora disponibile';
   private $year = 'Informazione non ancora disponibile';
   private $rating = 'Informazione non ancora disponibile';


   // si mette $_ per distinguerli, è una convenzione
   public function __construct($_title, $_director){
      $this->title = $_title;
      $this->director = $_director;
   }

   public function getMovieTitle(){
      return $this->title;
   }

   public function getMovieDirector(){
      return $this->director;
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

   public function getMovieInfo(){
      return(
         '<h2>' . $this->title . '</h2>
         <span>Regista: <b>' . $this->director . '</b></span><br>
         <span>Genere: <b>' . $this->genre . '</b></span><br>
         <span>Anno: <b>' . $this->year . '</b></span><br>
         <span>Valutazione IMDb: <b>' . $this->rating . '</b></span>'
      );
   }
}

$movieKillBill1 = new Movie('Kill Bill: Volume 1', 'Quentin Tarantino');
$movieKillBill1->setMovieGenre('Action');
$movieKillBill1->setMovieYear('2003');
$movieKillBill1->setMovieRating('8,2/10');
// var_dump($movieKillBill1);
echo $movieKillBill1->getMovieInfo();


$movieKillBill2 = new Movie('Kill Bill: Volume 2', 'Quentin Tarantino');
$movieKillBill2->setMovieGenre('Action');
$movieKillBill2->setMovieYear('2004');
$movieKillBill2->setMovieRating('8/10');
echo $movieKillBill2->getMovieInfo();

$movieOnceUponATimeInHollywood = new Movie("C'era una volta a... Hollywood", 'Quentin Tarantino');
$movieOnceUponATimeInHollywood->setMovieYear('2019');
echo $movieOnceUponATimeInHollywood->getMovieInfo();


?>
