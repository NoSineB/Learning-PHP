<?php


$router->get("/", "controllers/index.php");
$router->get("/about", "controllers/about.php");
$router->get("/contact", "controllers/contact.php");

$router->get("/notes", "controllers/notes/index.php");
$router->get("/note", "controllers/notes/show.php");
$router->delete("/notes", "controllers/notes/destroy.php");
$router->post("/notes", "controllers/notes/add.php");
$router->get("/notes/create", "controllers/notes/create.php");
