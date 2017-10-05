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
    $sql = "select name";
    $sql .= " from city";
    try
    {
        $q = $dbh->prepare($sql);
        $q->execute();
        print("<table>\n");
        while ($row = $q->fetch())
        {
            printf("</td><td class='name'>%s</td></tr>\n",
                $row['name']);
        }

        print("$row\n");
        } catch
    (PDOException $e) {
        printf("<p>%s</p>\n", $e->getMessage());
    }


