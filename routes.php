<?php


$router->get("/", "controllers/index.php");
$router->get("/about", "controllers/about.php");
$router->get("/contact", "controllers/contact.php");

// REST Notes Path
$router->get("/notes", "controllers/notes/index.php");
$router->get("/note", "controllers/notes/show.php");
$router->patch("/note", "controllers/notes/update.php");
$router->delete("/notes", "controllers/notes/destroy.php");
$router->post("/notes", "controllers/notes/store.php");
$router->get("/notes/create", "controllers/notes/create.php");
$router->get("/note/edit", "controllers/notes/edit.php");

// User Registeration Path
$router->get("/register", "controllers/register/index.php");
$router->post("/register", "controllers/register/store.php");