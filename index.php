<?php
    class Movie {
        public $nome;
        public $genere;
        public $lingua;
        public $durata;

        function __construct($nome,$genere,$lingua,$durata)
        {
            $this -> nome = $nome;
            $this -> genere = $genere;
            $this -> lingua = $lingua;
            $this -> durata = $durata;
        }
        public function createHtml(){
            return  "Movie: " . $this -> nome . "<br>" . "Genere: " .
            $this -> genere . "<br>" . "Lingua: " . $this -> lingua . "<br>" . 
            "Durata: " . $this -> durata . "min" . "<br>" ;
        }

    }

$nope = new Movie("Nope", "Horror","Italiano",190);
$ole = new Movie("Olè","Commedia","Italiano", 150);

echo $nope -> createHtml();
echo "<br>";
echo $ole -> createHtml();
    

?>
 