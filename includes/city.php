<?php
        require_once '../includes/WorldModel.inc.php';
        require_once '../includes/DbP.inc.php';
        require_once '../includes/DbH.inc.php';

class city {

    private $country;
    private $district;
    private $id;
    private $name;
    private $population;


    public function __construct($country, $district, $id, $name, $population ) {
        $this->country = $country;
        $this->district = $district;
        $this->id = $id;
        $this->name = $name;
        $this->population = $population;

    }

    public function getCountry() {
        return $this->country;
    }

    public function getDistrict() {
        return $this->district;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPopulation() {
        return $this->population;
    }





}

$dbh = DbH::getDbH();
$sql = "select countrycode ";
$sql .= " from city";
$sql .= " where countrycode='ago' ";
try {
    $q = $dbh->prepare($sql);
    $q->execute();
    print("<table>\n");
    while ($row = $q->fetch()) {
        printf("</td><td class='name'>%s</td></tr>\n",
            $row['countrycode']);
    }

    print("$row\n");
} catch
(PDOException $e) {
    printf("<p>%s</p>\n", $e->getMessage());
}

$dbh = DbH::getDbH();
$sql = "select * ";
$sql .= " from city";
$sql .= " where countrycode='LVA' ";
try {
    $q = $dbh->prepare($sql);
    $q->execute();
    print("<table>\n");
    while ($row = $q->fetch()) {
        printf("</td><td class='name'>%s</td></tr>\n",
            $row['countrycode'] . '<br>' .  $row['name'] . '<br>' . $row['district'] . '<br>' . $row['population']);
    }

    print("$row\n");
} catch
(PDOException $e) {
    printf("<p>%s</p>\n", $e->getMessage());
}





