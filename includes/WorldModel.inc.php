<?php
/*
 * This is the MODEL
 */
require_once '../includes/DbP.inc.php';
require_once '../includes/DbH.inc.php';
require_once '../includes/WorldIf.inc.php';

abstract class WorldModel implements WorldIf {
    private static $dbh;

    public static function connect()
    {
        if (! self::$dbh) {
            self::$dbh = DbH::getDbH();
        }
        return self::$dbh;
    }

    abstract public function create();
    abstract public function update();
    abstract public function delete();
}