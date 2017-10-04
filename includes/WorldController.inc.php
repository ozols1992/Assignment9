<?php
/*
 * This is a CONTROLLER
 */
require_once '../includes/WorldIf.inc.php';
require_once '../includes/WorldModel.inc.php';

class WorldController {
    private $world;

    public function __construct(WorldModel $world) {
        $this->world = $world;
    }

    public function action($p) {
        if (isset($p['connect'])) {
            $this->world->connect();
        } elseif (isset($p['add'])) {
            $this->world->create();
        }
    }
}