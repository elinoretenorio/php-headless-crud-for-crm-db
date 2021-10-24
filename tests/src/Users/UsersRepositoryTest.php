<?php

declare(strict_types=1);

namespace CRM\Tests\Users;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;
use CRM\Database\DatabaseException;
use CRM\Users\{ UsersDto, IUsersRepository, UsersRepository };

class UsersRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private UsersDto $dto;
    private IUsersRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("CRM\Database\IDatabase");
        $this->result = $this->createMock("CRM\Database\IDatabaseResult");
        $this->input = [
            "id" => 4418,
            "name_title" => "get",
            "name_first" => "notice",
            "name_middle" => "argue",
            "name_last" => "nice",
            "email" => "sheila12@example.net",
            "password" => "among",
            "user_roles" => 8345,
            "user_status" => 9547,
        ];
        $this->dto = new UsersDto($this->input);
        $this->repository = new UsersRepository($this->db);
    }

    protected function tearDown(): void
    {
        unset($this->db);
        unset($this->result);
        unset($this->input);
        unset($this->dto);
        unset($this->repository);
    }

    public function testInsert_ReturnsFailedOnException(): void
    {
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->insert($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testInsert_ReturnsId(): void
    {
        $expected = 2163;

        $sql = "INSERT INTO `users` (`name_title`, `name_first`, `name_middle`, `name_last`, `email`, `password`, `user_roles`, `user_status`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->nameTitle,
                $this->dto->nameFirst,
                $this->dto->nameMiddle,
                $this->dto->nameLast,
                $this->dto->email,
                $this->dto->password,
                $this->dto->userRoles,
                $this->dto->userStatus
            ]);
        $this->db->expects($this->once())
            ->method("lastInsertId")
            ->willReturn($expected);

        $actual = $this->repository->insert($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testUpdate_ReturnsFailedOnException(): void
    {
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->update($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testUpdate_ReturnsRowCount(): void
    {
        $expected = 1182;

        $sql = "UPDATE `users` SET `name_title` = ?, `name_first` = ?, `name_middle` = ?, `name_last` = ?, `email` = ?, `password` = ?, `user_roles` = ?, `user_status` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->nameTitle,
                $this->dto->nameFirst,
                $this->dto->nameMiddle,
                $this->dto->nameLast,
                $this->dto->email,
                $this->dto->password,
                $this->dto->userRoles,
                $this->dto->userStatus,
                $this->dto->id
            ]);
        $this->result->expects($this->once())
            ->method("rowCount")
            ->willReturn($expected);

        $actual = $this->repository->update($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testGet_ReturnsEmptyOnException(): void
    {
        $id = 6586;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 1642;

        $sql = "SELECT `id`, `name_title`, `name_first`, `name_middle`, `name_last`, `email`, `password`, `user_roles`, `user_status`
                FROM `users` WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([$id]);
        $this->result->expects($this->once())
            ->method("fetchAll")
            ->willReturn([$this->input]);

        $actual = $this->repository->get($id);
        $this->assertEquals($this->dto, $actual);
    }

    public function testGetAll_ReturnsEmptyOnException(): void
    {
        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->getAll();
        $this->assertEmpty($actual);
    }

    public function testGetAll_ReturnsDtos(): void
    {
        $sql = "SELECT `id`, `name_title`, `name_first`, `name_middle`, `name_last`, `email`, `password`, `user_roles`, `user_status`
                FROM `users`";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute");
        $this->result->expects($this->once())
            ->method("fetchAll")
            ->willReturn([$this->input]);

        $actual = $this->repository->getAll();
        $this->assertEquals([$this->dto], $actual);
    }

    public function testDelete_ReturnsFailedOnException(): void
    {
        $id = 7616;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 3999;
        $expected = 4896;

        $sql = "DELETE FROM `users` WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([$id]);
        $this->result->expects($this->once())
            ->method("rowCount")
            ->willReturn($expected);

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }
}