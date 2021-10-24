<?php

declare(strict_types=1);

namespace CRM\Tests\TaskStatus;

use PHPUnit\Framework\TestCase;
use CRM\TaskStatus\{ TaskStatusDto, TaskStatusModel };

class TaskStatusModelTest extends TestCase
{
    private array $input;
    private TaskStatusDto $dto;
    private TaskStatusModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 3051,
            "status" => "three",
        ];
        $this->dto = new TaskStatusDto($this->input);
        $this->model = new TaskStatusModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new TaskStatusModel(null);

        $this->assertInstanceOf(TaskStatusModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 3879;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetStatus(): void
    {
        $this->assertEquals($this->dto->status, $this->model->getStatus());
    }

    public function testSetStatus(): void
    {
        $expected = "perform";
        $model = $this->model;
        $model->setStatus($expected);

        $this->assertEquals($expected, $model->getStatus());
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