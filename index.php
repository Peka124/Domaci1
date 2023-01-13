<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Registracija | Forum | ITEH</title>
</head>

<body class="login">

    <?php
    include 'navbar.php';
    include 'domen/Tip.php';
    include 'domen/Clan.php';
    ?>

    <h2 class="text-center" id="forma-naslov"><b>Forma za registraciju</b></h2>

    <form method="post" id="dodajClanaForma" class="text-left">

        <div class="form-group mt-3">
            <label class="form-label"><b>Ime </b></label>
            <input type="text" class="form-control" name="ime">
        </div>

        <div class="form-group mt-3">
            <label class="form-label"><b>Prezime </b></label>
            <input type="text" class="form-control" name="prezime">
        </div>

        <div class="form-group mt-3">
            <label class="form-label"><b>Korisnicko ime </b></label>
            <input type="text" class="form-control" name="username">
        </div>

        <div class="form-group mt-3">
            <label class="form-label"><b>Lozinka </b></label>
            <input type="password" class="form-control" name="password">
        </div>

        <div class="form-group mt-3">
            <label class="form-label"><b>Email </b></label>
            <input type="email" class="form-control" name="email">
        </div>

        <div class="form-group mt-3 mb-3">
            <label class="form-label"><b>Tip </b></label>
            <select class="form-select text-center" name="tip">
                <?php
                $tip = new Tip();
                $sviTipovi = $tip->vratiSveTipove();

                for ($i = 0; $i < count($sviTipovi); $i++) :
                ?>
                    <option value="<?php echo $sviTipovi[$i]->id ?>"><?php echo $sviTipovi[$i]->naziv ?></option>
                <?php
                endfor;
                ?>
            </select>
        </div>
        
        <button type="submit" id="dodajClanaBtn" name="dodajClanaBtn" class="btn btn-success">Sačuvaj</button>
    </form>

    <?php

    if (isset($_POST['dodajClanaBtn'])) {
        $clan = new Clan($_POST['ime'], $_POST['prezime'], $_POST['username'], $_POST['password'], $_POST['email'], $_POST['tip']);
        $clan->sacuvajNovogClana($clan);
    }
    ?>


</body>

</html>