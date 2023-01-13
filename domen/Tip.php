<?php

class Tip
{
    public $id;
    public $naziv;
    public $clanarina;
    public $trajanje;


    public function vratiSveTipove()
    {
        $hostName = "localhost";
        $username = "root";
        $password = "";
        $dbname = "teretana";
        $connection = new mysqli($hostName, $username, $password, $dbname);

        $sqlQuery = "SELECT * FROM tip";
        $result = $connection->query($sqlQuery);
        $tipovi = [];
        while ($i = $result->fetch_object()) {
            $tipovi[] = $i;
        }

        return $tipovi;
    }
}

?>