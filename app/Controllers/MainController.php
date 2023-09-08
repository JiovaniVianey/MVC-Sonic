<?php

namespace App\Controllers;

use App\Models\Character;
use App\Models\Type;

class MainController
{

    /**
     * Affiche la page d'accueil du site
     */
    public function home($params)
    {
        $characterModel = new Character();
        $characters = $characterModel->findAll();

        $typeModel = new Type();
        $types = $typeModel->findAll();

        $_SESSION["page"] = "home";

        $this->show('home', [
            'characters' => $characters,
            'types' => $types
        ]);
    }

    /**
     * Show creators page
     */
    public function creators()
    {
        // Affiche la page des créateurs
        $_SESSION["page"] = "creators";

        $creators = [
            "hirokazu_yasuhara_img.png" => "Hirokazu Yasuhara",
            "yuji_naka_img.png" => "Yuji Naka",
            "naoto_oshima_img.png" => "Naoto Oshima"
        ];

        $this->show('creators', [
            'creators' => $creators
        ]);
    }

    public function show($viewName, $viewData = [])
    {
        $absoluteURL = $_SERVER['BASE_URI'];
        global $router;

        require_once __DIR__ . "/../views/partials/header.tpl.php";
        require_once __DIR__ . "/../views/$viewName.tpl.php";
        require_once __DIR__ . "/../views/partials/footer.tpl.php";
    }
}
