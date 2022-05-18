<?php include "traitement.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Operation</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="text-center">
                <h1>Calculatrice</h1>
            </div>
        </div>

        <div class="col-2 offset-5">
            <div class="row">
                <form action="operation.php" method="post">
                    <div class="row">
                        <div class="input-field">
                            <label for="first_name">Operande 1</label>
                            <input id="first_name" name="o1" type="text" class="validate form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div>
                            <label for="operateur">Opérateur</label>
                            <select class="form-control" id="operateur" name="op">
                                <option value="" disabled selected>choisir</option>
                                <?php foreach ($ops as $op) :  ?>
                                    <option value="<?= $i++ ?>"> <?= $op ?> </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <label for="disabled">Operande 2</label>
                            <input id="disabled" name="o2" type="text" class="validate form-control">
                        </div>
                    </div>
                    <button class="btn btn-primary form-control mt-4" type="submit" name="cnx" value="ok">Calculer</button>
                </form>
                <?php if (isset($erreur)) : ?>
                    <div class="alert alert-danger mt-4" role="alert">
                        <?= $erreur ?>
                    </div>
                <?php endif ?>
                <?php if (isset($result)) : ?>
                    <div class="alert alert-primary mt-4" role="alert">
                        <?= $result ?>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>


</body>

</html>