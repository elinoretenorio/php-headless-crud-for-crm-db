<?php

declare(strict_types=1);

$router->get("/contact", "CRM\Contact\ContactController::getAll");
$router->post("/contact", "CRM\Contact\ContactController::insert");
$router->group("/contact", function ($router) {
    $router->get("/{id:number}", "CRM\Contact\ContactController::get");
    $router->post("/{id:number}", "CRM\Contact\ContactController::update");
    $router->delete("/{id:number}", "CRM\Contact\ContactController::delete");
});

$router->get("/contact-status", "CRM\ContactStatus\ContactStatusController::getAll");
$router->post("/contact-status", "CRM\ContactStatus\ContactStatusController::insert");
$router->group("/contact-status", function ($router) {
    $router->get("/{id:number}", "CRM\ContactStatus\ContactStatusController::get");
    $router->post("/{id:number}", "CRM\ContactStatus\ContactStatusController::update");
    $router->delete("/{id:number}", "CRM\ContactStatus\ContactStatusController::delete");
});

$router->get("/notes", "CRM\Notes\NotesController::getAll");
$router->post("/notes", "CRM\Notes\NotesController::insert");
$router->group("/notes", function ($router) {
    $router->get("/{id:number}", "CRM\Notes\NotesController::get");
    $router->post("/{id:number}", "CRM\Notes\NotesController::update");
    $router->delete("/{id:number}", "CRM\Notes\NotesController::delete");
});

$router->get("/roles", "CRM\Roles\RolesController::getAll");
$router->post("/roles", "CRM\Roles\RolesController::insert");
$router->group("/roles", function ($router) {
    $router->get("/{id:number}", "CRM\Roles\RolesController::get");
    $router->post("/{id:number}", "CRM\Roles\RolesController::update");
    $router->delete("/{id:number}", "CRM\Roles\RolesController::delete");
});

$router->get("/task-status", "CRM\TaskStatus\TaskStatusController::getAll");
$router->post("/task-status", "CRM\TaskStatus\TaskStatusController::insert");
$router->group("/task-status", function ($router) {
    $router->get("/{id:number}", "CRM\TaskStatus\TaskStatusController::get");
    $router->post("/{id:number}", "CRM\TaskStatus\TaskStatusController::update");
    $router->delete("/{id:number}", "CRM\TaskStatus\TaskStatusController::delete");
});

$router->get("/todo-desc", "CRM\TodoDesc\TodoDescController::getAll");
$router->post("/todo-desc", "CRM\TodoDesc\TodoDescController::insert");
$router->group("/todo-desc", function ($router) {
    $router->get("/{id:number}", "CRM\TodoDesc\TodoDescController::get");
    $router->post("/{id:number}", "CRM\TodoDesc\TodoDescController::update");
    $router->delete("/{id:number}", "CRM\TodoDesc\TodoDescController::delete");
});

$router->get("/todo-type", "CRM\TodoType\TodoTypeController::getAll");
$router->post("/todo-type", "CRM\TodoType\TodoTypeController::insert");
$router->group("/todo-type", function ($router) {
    $router->get("/{id:number}", "CRM\TodoType\TodoTypeController::get");
    $router->post("/{id:number}", "CRM\TodoType\TodoTypeController::update");
    $router->delete("/{id:number}", "CRM\TodoType\TodoTypeController::delete");
});

$router->get("/user-status", "CRM\UserStatus\UserStatusController::getAll");
$router->post("/user-status", "CRM\UserStatus\UserStatusController::insert");
$router->group("/user-status", function ($router) {
    $router->get("/{id:number}", "CRM\UserStatus\UserStatusController::get");
    $router->post("/{id:number}", "CRM\UserStatus\UserStatusController::update");
    $router->delete("/{id:number}", "CRM\UserStatus\UserStatusController::delete");
});

$router->get("/users", "CRM\Users\UsersController::getAll");
$router->post("/users", "CRM\Users\UsersController::insert");
$router->group("/users", function ($router) {
    $router->get("/{id:number}", "CRM\Users\UsersController::get");
    $router->post("/{id:number}", "CRM\Users\UsersController::update");
    $router->delete("/{id:number}", "CRM\Users\UsersController::delete");
});

