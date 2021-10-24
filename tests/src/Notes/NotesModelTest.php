<?php

declare(strict_types=1);

namespace CRM\Tests\Notes;

use PHPUnit\Framework\TestCase;
use CRM\Notes\{ NotesDto, NotesModel };

class NotesModelTest extends TestCase
{
    private array $input;
    private NotesDto $dto;
    private NotesModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 1075,
            "date" => "2021-11-12",
            "notes" => "Drug discover year skin those health.",
            "is_new_todo" => 8738,
            "todo_type_id" => 7124,
            "todo_desc_id" => 8213,
            "todo_due_date" => "fly",
            "contact" => 7213,
            "task_status" => 1491,
            "task_update" => "data",
            "sales_rep" => 6099,
        ];
        $this->dto = new NotesDto($this->input);
        $this->model = new NotesModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new NotesModel(null);

        $this->assertInstanceOf(NotesModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 2730;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetDate(): void
    {
        $this->assertEquals($this->dto->date, $this->model->getDate());
    }

    public function testSetDate(): void
    {
        $expected = "2021-10-25";
        $model = $this->model;
        $model->setDate($expected);

        $this->assertEquals($expected, $model->getDate());
    }

    public function testGetNotes(): void
    {
        $this->assertEquals($this->dto->notes, $this->model->getNotes());
    }

    public function testSetNotes(): void
    {
        $expected = "Large different experience traditional measure wall such.";
        $model = $this->model;
        $model->setNotes($expected);

        $this->assertEquals($expected, $model->getNotes());
    }

    public function testGetIsNewTodo(): void
    {
        $this->assertEquals($this->dto->isNewTodo, $this->model->getIsNewTodo());
    }

    public function testSetIsNewTodo(): void
    {
        $expected = 9149;
        $model = $this->model;
        $model->setIsNewTodo($expected);

        $this->assertEquals($expected, $model->getIsNewTodo());
    }

    public function testGetTodoTypeId(): void
    {
        $this->assertEquals($this->dto->todoTypeId, $this->model->getTodoTypeId());
    }

    public function testSetTodoTypeId(): void
    {
        $expected = 3571;
        $model = $this->model;
        $model->setTodoTypeId($expected);

        $this->assertEquals($expected, $model->getTodoTypeId());
    }

    public function testGetTodoDescId(): void
    {
        $this->assertEquals($this->dto->todoDescId, $this->model->getTodoDescId());
    }

    public function testSetTodoDescId(): void
    {
        $expected = 8728;
        $model = $this->model;
        $model->setTodoDescId($expected);

        $this->assertEquals($expected, $model->getTodoDescId());
    }

    public function testGetTodoDueDate(): void
    {
        $this->assertEquals($this->dto->todoDueDate, $this->model->getTodoDueDate());
    }

    public function testSetTodoDueDate(): void
    {
        $expected = "subject";
        $model = $this->model;
        $model->setTodoDueDate($expected);

        $this->assertEquals($expected, $model->getTodoDueDate());
    }

    public function testGetContact(): void
    {
        $this->assertEquals($this->dto->contact, $this->model->getContact());
    }

    public function testSetContact(): void
    {
        $expected = 4540;
        $model = $this->model;
        $model->setContact($expected);

        $this->assertEquals($expected, $model->getContact());
    }

    public function testGetTaskStatus(): void
    {
        $this->assertEquals($this->dto->taskStatus, $this->model->getTaskStatus());
    }

    public function testSetTaskStatus(): void
    {
        $expected = 4729;
        $model = $this->model;
        $model->setTaskStatus($expected);

        $this->assertEquals($expected, $model->getTaskStatus());
    }

    public function testGetTaskUpdate(): void
    {
        $this->assertEquals($this->dto->taskUpdate, $this->model->getTaskUpdate());
    }

    public function testSetTaskUpdate(): void
    {
        $expected = "nor";
        $model = $this->model;
        $model->setTaskUpdate($expected);

        $this->assertEquals($expected, $model->getTaskUpdate());
    }

    public function testGetSalesRep(): void
    {
        $this->assertEquals($this->dto->salesRep, $this->model->getSalesRep());
    }

    public function testSetSalesRep(): void
    {
        $expected = 4351;
        $model = $this->model;
        $model->setSalesRep($expected);

        $this->assertEquals($expected, $model->getSalesRep());
    }

    public function testToDto(): void
    {
        $this->assertEquals($this->dto, $this->model->toDto());
    }

    public function testJsonSerialize(): void
    {
        $this->assertEquals($this->input, $this->model->jsonSerialize());
    }
}