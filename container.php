<?php

declare(strict_types=1);

// Core

$container->add("Pdo", PDO::class)
    ->addArgument("mysql:dbname={$_ENV["DB_NAME"]};host={$_ENV["DB_HOST"]}")
    ->addArgument($_ENV["DB_USER"])
    ->addArgument($_ENV["DB_PASS"])
    ->addArgument([]);
$container->add("Database", CRM\Database\PdoDatabase::class)
    ->addArgument("Pdo");

// Contact

$container->add("ContactRepository", CRM\Contact\ContactRepository::class)
    ->addArgument("Database");
$container->add("ContactService", CRM\Contact\ContactService::class)
    ->addArgument("ContactRepository");
$container->add(CRM\Contact\ContactController::class)
    ->addArgument("ContactService");

// ContactStatus

$container->add("ContactStatusRepository", CRM\ContactStatus\ContactStatusRepository::class)
    ->addArgument("Database");
$container->add("ContactStatusService", CRM\ContactStatus\ContactStatusService::class)
    ->addArgument("ContactStatusRepository");
$container->add(CRM\ContactStatus\ContactStatusController::class)
    ->addArgument("ContactStatusService");

// Notes

$container->add("NotesRepository", CRM\Notes\NotesRepository::class)
    ->addArgument("Database");
$container->add("NotesService", CRM\Notes\NotesService::class)
    ->addArgument("NotesRepository");
$container->add(CRM\Notes\NotesController::class)
    ->addArgument("NotesService");

// Roles

$container->add("RolesRepository", CRM\Roles\RolesRepository::class)
    ->addArgument("Database");
$container->add("RolesService", CRM\Roles\RolesService::class)
    ->addArgument("RolesRepository");
$container->add(CRM\Roles\RolesController::class)
    ->addArgument("RolesService");

// TaskStatus

$container->add("TaskStatusRepository", CRM\TaskStatus\TaskStatusRepository::class)
    ->addArgument("Database");
$container->add("TaskStatusService", CRM\TaskStatus\TaskStatusService::class)
    ->addArgument("TaskStatusRepository");
$container->add(CRM\TaskStatus\TaskStatusController::class)
    ->addArgument("TaskStatusService");

// TodoDesc

$container->add("TodoDescRepository", CRM\TodoDesc\TodoDescRepository::class)
    ->addArgument("Database");
$container->add("TodoDescService", CRM\TodoDesc\TodoDescService::class)
    ->addArgument("TodoDescRepository");
$container->add(CRM\TodoDesc\TodoDescController::class)
    ->addArgument("TodoDescService");

// TodoType

$container->add("TodoTypeRepository", CRM\TodoType\TodoTypeRepository::class)
    ->addArgument("Database");
$container->add("TodoTypeService", CRM\TodoType\TodoTypeService::class)
    ->addArgument("TodoTypeRepository");
$container->add(CRM\TodoType\TodoTypeController::class)
    ->addArgument("TodoTypeService");

// UserStatus

$container->add("UserStatusRepository", CRM\UserStatus\UserStatusRepository::class)
    ->addArgument("Database");
$container->add("UserStatusService", CRM\UserStatus\UserStatusService::class)
    ->addArgument("UserStatusRepository");
$container->add(CRM\UserStatus\UserStatusController::class)
    ->addArgument("UserStatusService");

// Users

$container->add("UsersRepository", CRM\Users\UsersRepository::class)
    ->addArgument("Database");
$container->add("UsersService", CRM\Users\UsersService::class)
    ->addArgument("UsersRepository");
$container->add(CRM\Users\UsersController::class)
    ->addArgument("UsersService");

