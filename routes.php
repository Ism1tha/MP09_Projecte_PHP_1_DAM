<?php

return [
    "/" => [
        "controller" => "app/Http/Controllers/HomeController.php",
        "layout"     => "resources/views/layouts/main.layout.php",
        "view"       => "resources/views/index.view.php",
        "title"      => "Home",
        "description"=> "Home page",
    ],
    "/users" => [
        "controller" => "app/Http/Controllers/UsersController.php",
        "layout"     => "resources/views/layouts/main.layout.php",
        "view"       => "resources/views/users.view.php",
        "title"      => "Users",
        "description"=> "Users page",
    ],
    "/contact" => [
        "controller" => "app/Http/Controllers/ContactController.php",
        "layout"     => "resources/views/layouts/main.layout.php",
        "view"       => "resources/views/contact.view.php",
        "title"      => "Contact",
        "description"=> "Contact page",
    ],
    "/about" => [
        "controller" => "app/Http/Controllers/AboutController.php",
        "layout"     => "resources/views/layouts/main.layout.php",
        "view"       => "resources/views/about.view.php",
        "title"      => "About",
        "description"=> "About page",
    ],
];