<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">


</head>
<header>

</header>

<body>


    <section class="bg-light">
        <nav class="container d-flex justify-content-between ligne-items-center ">

            <h2>FastTrain</h2>

            <div class="container_items  m-3">
                <ul class="d-flex  ">
                    <li><a href="<?= createLink("/") ?>">Home</a></li>
                    <li><a href="<?= createLink("/reservation") ?>">Reservation</a></li>
                    <li><a href="<?= createLink("/user/reservation") ?>">Mes Reservation</a></li>
                </ul>
            </div>

            <div>
                <a href="<?= createLink("/login") ?>"><button class="btn btn-primary">sign in </button></a>
                <a href="<?= createLink("/register") ?>" class="btn btn-secondary">sign up </a>
            </div>


        </nav>


        <!-- /////////////////////////// -->









        <!-- echo '<pre>', print_r($key["id"]), '</pre>'; -->
        }


    </section>
    <section class="containerForm">


        <form action="" class="formReservation  form-control" method="GET">

            <input type="text" name="garDepart" placeholder="gar de départ">
            <input type="text" name="garArrive" placeholder="gar d'arrivée">
            <input type="datetime-local" name="dateDebut" placeholder="date de départ">

            <button class="btn btn-secondary">recherch </button>

        </form>
    </section>
    <div>
        <?php
        //  echo "ana id diali". $voyageExist["id"] ."bghit nmchi l".  $voyageExist["villeArrive"] ."men". $voyageExist["villeDepart"];
        ?>
    </div>

    </section>
    <?php if (isset($voyages)) : ?>
        <section class="containerVoyahe">
            <!-- /////////////////////////// -->

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">date de départ</th>
                        <th scope="col">date d'arriver</th>
                        <th scope="col">prix</th>
                        <th></th>
                    </tr>
                </thead>
                <?php
                foreach ($voyages as $voyage) : ?>
                    <tbody>
                        <tr>

                            <td><?= $voyage["nom"] ?></td>
                            <td><?= $voyage["dateDebut"] ?></td>
                            <td><?= $voyage["dateArrive"] ?></td>
                            <td><?= $voyage["prix"] ?></td>
                            <td><a href="<?= createLink("reservation/create/" . $voyage["voyageId"]) ?>">reservé</a></td>
                        </tr>

                    </tbody>'
                <?php endforeach; ?>

            </table>
        </section>
    <?php endif; ?>

</body>

</html>