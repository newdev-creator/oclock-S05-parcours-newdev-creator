<?php

namespace sonic\app\Controllers;

use sonic\app\Models\Charactere;
use sonic\app\Models\Type;

class CoreController {
    protected function show($viewName, $viewData = [])
    {
        global $altorouter;
        $absoluteURL = isset($_SERVER['BASE_URI']) ? $_SERVER['BASE_URI'] : '';


        require_once __DIR__.'/../views/header.tpl.php';
        extract($viewData);

        
        //require_once __DIR__."/../views/{$viewName}.tpl.php";
        require_once __DIR__."/../views/home.tpl.php";


        require_once __DIR__.'/../views/footer.tpl.php';

    }

    public function homePage()
    {
        $caractereModel = new Charactere();
        $characters = $caractereModel->findall(); 
        $dataForView = ["caractere" => $characters];
        $this->show('home', $dataForView);
    }
}