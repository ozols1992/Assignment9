<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 04-10-2017
 * Time: 11:02
 */

class countryLanguage
{
    private $country;
    private $language;
    private $isOfficial;
    private $percentage;

    public function __construct($county , $language, $isOfficial, $percentage)
    {
        $this->country = $county;
        $this->language = $language;
        $this->isOfficial = $isOfficial;
        $this->percentage = $percentage;
    }

}