<?php
require_once '../App/models/WikiModel.php';
class homeController{
    public function home(){
        $allwikis = new WikiModel();
        $getwikis = $allwikis->getAllWikis();
        require_once '../Views/home.php';
}
}