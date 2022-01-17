<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    <?php
        /** GOAL:
          * DEFINIRE CLASSE Film:
          *      Attributi:
          *      - titolo
          *      - sottotiolo
          *      - regista
          * 
          *      Metodi:
          *      - costruttore che accetta titolo
          *      - getFullTitle: 
          *          Se sottotitolo presente:
          *            restituisce "titolo: sottotitolo" 
          *          Se sottotiolo assente:
          *            restituisce "titolo" 
          *      - __toString: 
          *          Se regista presente:
          *            restituisce "fullTitle | regista"
          *          Se regista assente:
          *            restituisce "fullTitle | ???"
          * 
          * UTILIZZO OGGETTI Film:
          * 
          *      Generare 3 istanze della classe Film:
          *      - uno con solo il titolo
          *      - uno con titolo e sottotitolo
          *      - uno con titolo, sottotiolo e regista
          * 
          *      Stampare tutti gli oggetti tramite toString (implicito)
          * 
          *  RISULTATO ATTESO:
          * 
          *      Matrix | ???
          *      Fantozzi 2: il ritorno di fantozzi | ???
          *      Peter Pan: il ritorno all'isola che non c'e' | Robin Budd
          */
    
    class Film {

        // attributi 
        public $title;
        public $subHeading;
        public $movieDirector;

        // metodi 
        public function __construct($title) {

            // valorizzo la variabile in ingresso 
            $this -> title = $title;
        }

        public function getFullTitle() {

            if( $this -> subHeading) {
                return $this -> title . ": " . $this -> subHeading;
            } else {
                return $this -> title;
            }
        }
    }
    ?>
</body>
</html>