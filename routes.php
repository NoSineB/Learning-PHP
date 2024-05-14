<?php

// return  [
//     '/' => base_dir('controllers/index.php'),
//     '/about' => base_dir('controllers/about.php'),
//     '/notes' => base_dir('controllers/notes/index.php'),
//     '/note' => base_dir('controllers/notes/show.php'),
//     '/notes/create' => base_dir('controllers/notes/create.php'),
//     '/contact' => base_dir('controllers/contact.php'),
// ];

$router->get("/", "controllers/index.php");
$router->get("/about", "controllers/about.php");
$router->get("/contact", "controllers/contact.php");

$router->get("/notes", "controllers/notes/index.php");
$router->get("/note", "controllers/notes/show.php");
$router->get("/notes/create", "controllers/notes/create.php");