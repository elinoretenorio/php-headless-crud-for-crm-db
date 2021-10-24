<?php

declare(strict_types=1);

namespace CRM\Tests\TodoDesc;

use PHPUnit\Framework\TestCase;
use CRM\TodoDesc\{ TodoDescDto, TodoDescModel };

class TodoDescModelTest extends TestCase
{
    private array $input;
    private TodoDescDto $dto;
    private TodoDescModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 9316,
            "description" => "lawyer",
        ];
        $this->dto = new TodoDescDto($this->input);
        $this->model = new TodoDescModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new TodoDescModel(null);

        $this->assertInstanceOf(TodoDescModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 7847;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetDescription(): void
    {
        $this->assertEquals($this->dto->description, $this->model->getDescription());
    }

    public function testSetDescription(): void
    {
        $expected = "discuss";
        $model = $this->model;
        $model->setDescription($expected);

        $this->assertEquals($expected, $model->getDescription());
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