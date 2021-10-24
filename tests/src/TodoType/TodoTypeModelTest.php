<?php

declare(strict_types=1);

namespace CRM\Tests\TodoType;

use PHPUnit\Framework\TestCase;
use CRM\TodoType\{ TodoTypeDto, TodoTypeModel };

class TodoTypeModelTest extends TestCase
{
    private array $input;
    private TodoTypeDto $dto;
    private TodoTypeModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 2225,
            "type" => "behind",
        ];
        $this->dto = new TodoTypeDto($this->input);
        $this->model = new TodoTypeModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new TodoTypeModel(null);

        $this->assertInstanceOf(TodoTypeModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 667;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetType(): void
    {
        $this->assertEquals($this->dto->type, $this->model->getType());
    }

    public function testSetType(): void
    {
        $expected = "tree";
        $model = $this->model;
        $model->setType($expected);

        $this->assertEquals($expected, $model->getType());
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