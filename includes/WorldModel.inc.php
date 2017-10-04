<?php
/*
 * This is the MODEL
 */
require_once '../includes/DbP.inc.php';
require_once '../includes/DbH.inc.php';

class WorldModel implements WorldIf {
    private $district;      // district of cty
    private $id;            // zip code
    private $name;          // name of city
    private $population;    // population for the city
    private $language;      // Languge of country
    private $isOfficial;    // Is it official?
    private $percentage;    // percentage who speaks it.
    private $countrycode;   //

    /*
     * get state from session array
     * normally you'd read input params
     * or a database
     */


    public function getDistrict() {
        return $this->district;
    }

    public function setDistrict() {
        $this->district;

    }

    public function getChannel() {
        return $this->channel;
    }

    public function chUp() {
        $this->channel += 1;
        $this->saveState();
        $this->populateMedia($this->getChannel(), DbH::getDbH());
    }

    public function chDown() {
        if ($this->channel > 1) {
            $this->channel -= 1;
        } else {
            $this->channel = 1;
        }
        $this->saveState();
        $this->populateMedia($this->getChannel(), DbH::getDbH());
    }

    public function getVolume() {
        return $this->volume;
    }

    public function volUp() {
        $this->volume += 1;
        $this->saveState();
    }

    public function volDown() {
        $this->volume -= 1;
        $this->saveState();
    }

    public function getMute() {
        return $this->mute;
    }

    public function mute() {
        $this->mute = $this->mute ? FALSE : TRUE;
        $this->saveState();
    }

    public function getMedia() {
        return $this->videos;
    }

    private function populateMedia($ch, $db) {
        $this->videos = array();
        $this->videos = Media::setMedia($ch, $db);
    }

    private function saveState() {
        $_SESSION['on'] = $this->getTvOnOff();
        $_SESSION['channel'] = $this->getChannel();
        $_SESSION['volume'] = $this->getVolume();
        $_SESSION['mute'] = $this->getMute();
    }
}