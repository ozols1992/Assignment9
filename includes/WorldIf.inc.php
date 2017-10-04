<?php
interface WorldIf {
    public static function connect();
    public function create();
    public function update();
    public function delete();
}