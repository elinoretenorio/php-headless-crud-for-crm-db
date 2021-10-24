<?php

declare(strict_types=1);

namespace CRM\Tests\ContactStatus;

use PHPUnit\Framework\TestCase;
use CRM\ContactStatus\{ ContactStatusDto, ContactStatusModel };

class ContactStatusModelTest extends TestCase
{
    private array $input;
    private ContactStatusDto $dto;
    private ContactStatusModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 7527,
            "status" => "toward",
        ];
        $this->dto = new ContactStatusDto($this->input);
        $this->model = new ContactStatusModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new ContactStatusModel(null);

        $this->assertInstanceOf(ContactStatusModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 8059;
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
        $expected = "local";
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