<?php
    require_once '../includes/DbP.inc.php';
    require_once '../includes/DbH.inc.php';
    require_once '../includes/WorldIf.inc.php';
    require_once '../includes/WorldModel.inc.php';
class country extends WorldModel implements WorldIf {
    private $code;

    public function __construct($code)
    {
        $this->code = $code;
    }
    public function getCode(){
        return $this->code;
    }
    public function create() {}
    public function update() {}
    public function delete() {}

}