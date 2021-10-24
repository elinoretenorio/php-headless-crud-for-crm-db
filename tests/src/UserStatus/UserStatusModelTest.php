<?php

declare(strict_types=1);

namespace CRM\Tests\UserStatus;

use PHPUnit\Framework\TestCase;
use CRM\UserStatus\{ UserStatusDto, UserStatusModel };

class UserStatusModelTest extends TestCase
{
    private array $input;
    private UserStatusDto $dto;
    private UserStatusModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 9308,
            "status" => "model",
        ];
        $this->dto = new UserStatusDto($this->input);
        $this->model = new UserStatusModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new UserStatusModel(null);

        $this->assertInstanceOf(UserStatusModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 5093;
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
        $expected = "maintain";
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