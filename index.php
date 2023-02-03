<?php

    //classe
    class Movie{

        public $titolo;
        public $anno;
        public $regista;
        public $genere;
        public $locandina;
        public $voto;

        function __construct($titoloFilm, $annoFilm, $registaFilm, $genereFilm, $locandinaFilm, $votoFilm){
            $this -> titolo = $titoloFilm;
            $this -> anno = $annoFilm;
            $this -> regista = $registaFilm;
            $this -> genere = $genereFilm;
            $this -> locandina = $locandinaFilm;
            $this -> voto = $votoFilm;
        }

        public function getVoto(){
            return $this -> voto;
        }

    }

    //creazione oggetti
    $porcoRosso = new Movie();
    $principessaMononoke = new Movie();
    $laCittaIncantata = new Movie();

    //valori oggetto 1
    $porcoRosso -> titolo = 'PORCO ROSSO';
    $porcoRosso -> anno = '1992';
    $porcoRosso -> regista = 'Hayao Miyazaki';
    $porcoRosso -> genere = 'Animazione';
    $porcoRosso -> locandina = 'https://www.cinemadelsilenzio.it/images/film/poster/11167_big.jpg';
    $porcoRosso -> voto = '3.72';

    //valori oggetto 2
    $principessaMononoke -> titolo = 'PRINCIPESSA MONONOKE';
    $principessaMononoke -> anno = '1997';
    $principessaMononoke -> regista = 'Hayao Miyazaki';
    $principessaMononoke -> genere = 'Animazione';
    $principessaMononoke -> locandina = 'https://pad.mymovies.it/filmclub/2005/11/052/locandina.jpg';
    $principessaMononoke -> voto = '4.27';

    //valori oggetto 3
    $laCittaIncantata -> titolo = 'LA CITTA\' INCANTATA';
    $laCittaIncantata -> anno = '2001';
    $laCittaIncantata -> regista = 'Hayao Miyazaki';
    $laCittaIncantata -> genere = 'Animazione';
    $laCittaIncantata -> locandina = 'https://pad.mymovies.it/filmclub/2003/04/021/locandina.jpg';
    $laCittaIncantata -> voto = '4.35';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-4">

                <div class="card">

                    <h1><?php echo $porcoRosso -> titolo; ?></h1>
                    <img src="<?php echo $porcoRosso -> locandina; ?>" alt="locandina">
                    <p><?php echo $porcoRosso -> anno; ?></p>
                    <p><?php echo $porcoRosso -> regista; ?></p>
                    <p><?php echo $porcoRosso -> genere; ?></p>
                    <p><?php echo $porcoRosso -> getVoto(); ?></p>

                </div>

            </div>

            <div class="col-4">

                <div class="card">

                    

                </div>

            </div>

            <div class="col-4">

                <div class="card">

                    

                </div>

            </div>
        </div>
    </div>

</body>
</html>