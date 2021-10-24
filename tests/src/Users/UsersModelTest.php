<?php

declare(strict_types=1);

namespace CRM\Tests\Users;

use PHPUnit\Framework\TestCase;
use CRM\Users\{ UsersDto, UsersModel };

class UsersModelTest extends TestCase
{
    private array $input;
    private UsersDto $dto;
    private UsersModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 6868,
            "name_title" => "treatment",
            "name_first" => "when",
            "name_middle" => "relate",
            "name_last" => "discuss",
            "email" => "orivers@example.com",
            "password" => "onto",
            "user_roles" => 5169,
            "user_status" => 8635,
        ];
        $this->dto = new UsersDto($this->input);
        $this->model = new UsersModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new UsersModel(null);

        $this->assertInstanceOf(UsersModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 2559;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetNameTitle(): void
    {
        $this->assertEquals($this->dto->nameTitle, $this->model->getNameTitle());
    }

    public function testSetNameTitle(): void
    {
        $expected = "between";
        $model = $this->model;
        $model->setNameTitle($expected);

        $this->assertEquals($expected, $model->getNameTitle());
    }

    public function testGetNameFirst(): void
    {
        $this->assertEquals($this->dto->nameFirst, $this->model->getNameFirst());
    }

    public function testSetNameFirst(): void
    {
        $expected = "voice";
        $model = $this->model;
        $model->setNameFirst($expected);

        $this->assertEquals($expected, $model->getNameFirst());
    }

    public function testGetNameMiddle(): void
    {
        $this->assertEquals($this->dto->nameMiddle, $this->model->getNameMiddle());
    }

    public function testSetNameMiddle(): void
    {
        $expected = "visit";
        $model = $this->model;
        $model->setNameMiddle($expected);

        $this->assertEquals($expected, $model->getNameMiddle());
    }

    public function testGetNameLast(): void
    {
        $this->assertEquals($this->dto->nameLast, $this->model->getNameLast());
    }

    public function testSetNameLast(): void
    {
        $expected = "what";
        $model = $this->model;
        $model->setNameLast($expected);

        $this->assertEquals($expected, $model->getNameLast());
    }

    public function testGetEmail(): void
    {
        $this->assertEquals($this->dto->email, $this->model->getEmail());
    }

    public function testSetEmail(): void
    {
        $expected = "rwalsh@example.com";
        $model = $this->model;
        $model->setEmail($expected);

        $this->assertEquals($expected, $model->getEmail());
    }

    public function testGetPassword(): void
    {
        $this->assertEquals($this->dto->password, $this->model->getPassword());
    }

    public function testSetPassword(): void
    {
        $expected = "unit";
        $model = $this->model;
        $model->setPassword($expected);

        $this->assertEquals($expected, $model->getPassword());
    }

    public function testGetUserRoles(): void
    {
        $this->assertEquals($this->dto->userRoles, $this->model->getUserRoles());
    }

    public function testSetUserRoles(): void
    {
        $expected = 6536;
        $model = $this->model;
        $model->setUserRoles($expected);

        $this->assertEquals($expected, $model->getUserRoles());
    }

    public function testGetUserStatus(): void
    {
        $this->assertEquals($this->dto->userStatus, $this->model->getUserStatus());
    }

    public function testSetUserStatus(): void
    {
        $expected = 3316;
        $model = $this->model;
        $model->setUserStatus($expected);

        $this->assertEquals($expected, $model->getUserStatus());
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