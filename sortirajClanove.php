<?php

$hostName = "localhost";
$username = "root";
$password = "";
$dbname = "teretana";
$connection = new mysqli($hostName, $username, $password, $dbname);

$kolona = $_POST['KolonaSort'];
$sort = $_POST['Sort'];

if($kolona==null || $sort==null)
{
    dead
}

$sqlQuery = "SELECT c.id as clanId, c.ime, c.prezime, c.username, c.email, t.naziv, t.clanarina, t.trajanje
         FROM clan c JOIN tip t ON c.tip_id=t.id ORDER BY $kolona $sort";

$result = $connection->query($sqlQuery);
$clanovi = [];
while ($i = $result->fetch_object())
{
    $clanovi[] = $i;
}

for ($i = 0; $i < count($clanovi); $i++)
{
?>

    <tr>
        <td><?php echo $clanovi[$i]->ime  ?></td>
        <td><?php echo $clanovi[$i]->prezime  ?></td>
        <td><?php echo $clanovi[$i]->username  ?></td>
        <td><?php echo $clanovi[$i]->naziv  ?></td>
        <td><?php echo $clanovi[$i]->trajanje ?></td>
        <td><?php echo $clanovi[$i]->clanarina . " RSD" ?></td>
        <td><?php echo ""?></td>
    <tr>

    <?php
}
    ?>