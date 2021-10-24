<?php

declare(strict_types=1);

namespace CRM\Tests\Roles;

use PHPUnit\Framework\TestCase;
use CRM\Roles\{ RolesDto, RolesModel };

class RolesModelTest extends TestCase
{
    private array $input;
    private RolesDto $dto;
    private RolesModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 1988,
            "role" => "drop",
        ];
        $this->dto = new RolesDto($this->input);
        $this->model = new RolesModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new RolesModel(null);

        $this->assertInstanceOf(RolesModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 6721;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetRole(): void
    {
        $this->assertEquals($this->dto->role, $this->model->getRole());
    }

    public function testSetRole(): void
    {
        $expected = "mother";
        $model = $this->model;
        $model->setRole($expected);

        $this->assertEquals($expected, $model->getRole());
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