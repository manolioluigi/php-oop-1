<?php

    //classe
    class Movie{

        public $titolo;
        public $anno;
        public $regista;
        public $genere;
        public $locandina;
        public $durata;
        public $voto;

        function __construct($titoloFilm, $annoFilm, $registaFilm, $genereFilm, $locandinaFilm, $durataFilm, $votoFilm){
            $this->titolo = $titoloFilm;
            $this->anno = $annoFilm;
            $this->regista = $registaFilm;
            $this->genere = $genereFilm;
            $this->locandina = $locandinaFilm;
            $this->durata = $durataFilm;
            $this->voto = $votoFilm;
        }

        public function getVoto(){
            return $this->voto;
        }

    }

    //creazione oggetti
    $porcoRosso = new Movie('PORCO ROSSO', '1992', 'Hayao Miyazaki', 'Animazione', 'https://www.cinemadelsilenzio.it/images/film/poster/11167_big.jpg', '94 minuti', '3.72');
    $principessaMononoke = new Movie('PRINCIPESSA MONONOKE', '1997', 'Hayao Miyazaki', 'Animazione', 'https://pad.mymovies.it/filmclub/2005/11/052/locandina.jpg', '133 minuti', '4.27');
    $laCittaIncantata = new Movie('LA CITTA\' INCANTATA', '2001', 'Hayao Miyazaki', 'Animazione', 'https://pad.mymovies.it/filmclub/2003/04/021/locandina.jpg', '125 minuti', '4.35');

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
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
    <div class="container">
        <div class="row mt-5">
            <div class="col-4">

                <div class="card text-center">

                    <div class="title">
                        <h1><?php echo $porcoRosso->titolo; ?></h1>
                    </div>
                    <img src="<?php echo $porcoRosso->locandina; ?>" alt="locandina">
                    <div class="mt-3">
                        <p><?php echo $porcoRosso->anno; ?></p>
                        <p><?php echo $porcoRosso->regista; ?></p>
                        <p><?php echo $porcoRosso->genere; ?></p>
                        <p><?php echo $porcoRosso->durata; ?></p>
                        <p><?php echo $porcoRosso->getVoto(); ?></p>
                    </div>

                </div>

            </div>

            <div class="col-4">

                <div class="card text-center">

                    <div class="title">
                        <h1><?php echo $principessaMononoke->titolo; ?></h1>
                    </div>
                    <img src="<?php echo $principessaMononoke->locandina; ?>" alt="locandina">
                    <div class="mt-3">
                        <p><?php echo $principessaMononoke->anno; ?></p>
                        <p><?php echo $principessaMononoke->regista; ?></p>
                        <p><?php echo $principessaMononoke->genere; ?></p>
                        <p><?php echo $principessaMononoke->durata; ?></p>
                        <p><?php echo $principessaMononoke->getVoto(); ?></p>
                    </div>

                </div>

            </div>

            <div class="col-4">

                <div class="card text-center">

                    <div class="title">
                        <h1><?php echo $laCittaIncantata->titolo; ?></h1>
                    </div>
                    <img src="<?php echo $laCittaIncantata->locandina; ?>" alt="locandina">
                    <div class="mt-3">
                        <p><?php echo $laCittaIncantata->anno; ?></p>
                        <p><?php echo $laCittaIncantata->regista; ?></p>
                        <p><?php echo $laCittaIncantata->genere; ?></p>
                        <p><?php echo $laCittaIncantata->durata; ?></p>
                        <p><?php echo $laCittaIncantata->getVoto(); ?></p>
                    </div>

                </div>

            </div>
        </div>
    </div>

</body>
</html>