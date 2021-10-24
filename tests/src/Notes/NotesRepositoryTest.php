<?php

declare(strict_types=1);

namespace CRM\Tests\Notes;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;
use CRM\Database\DatabaseException;
use CRM\Notes\{ NotesDto, INotesRepository, NotesRepository };

class NotesRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private NotesDto $dto;
    private INotesRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("CRM\Database\IDatabase");
        $this->result = $this->createMock("CRM\Database\IDatabaseResult");
        $this->input = [
            "id" => 4870,
            "date" => "2021-11-07",
            "notes" => "Degree half talk cut market soldier.",
            "is_new_todo" => 3241,
            "todo_type_id" => 7184,
            "todo_desc_id" => 7317,
            "todo_due_date" => "quite",
            "contact" => 5996,
            "task_status" => 697,
            "task_update" => "agency",
            "sales_rep" => 320,
        ];
        $this->dto = new NotesDto($this->input);
        $this->repository = new NotesRepository($this->db);
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
        $expected = 7529;

        $sql = "INSERT INTO `notes` (`date`, `notes`, `is_new_todo`, `todo_type_id`, `todo_desc_id`, `todo_due_date`, `contact`, `task_status`, `task_update`, `sales_rep`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->date,
                $this->dto->notes,
                $this->dto->isNewTodo,
                $this->dto->todoTypeId,
                $this->dto->todoDescId,
                $this->dto->todoDueDate,
                $this->dto->contact,
                $this->dto->taskStatus,
                $this->dto->taskUpdate,
                $this->dto->salesRep
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
        $expected = 1241;

        $sql = "UPDATE `notes` SET `date` = ?, `notes` = ?, `is_new_todo` = ?, `todo_type_id` = ?, `todo_desc_id` = ?, `todo_due_date` = ?, `contact` = ?, `task_status` = ?, `task_update` = ?, `sales_rep` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->date,
                $this->dto->notes,
                $this->dto->isNewTodo,
                $this->dto->todoTypeId,
                $this->dto->todoDescId,
                $this->dto->todoDueDate,
                $this->dto->contact,
                $this->dto->taskStatus,
                $this->dto->taskUpdate,
                $this->dto->salesRep,
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
        $id = 7827;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 7715;

        $sql = "SELECT `id`, `date`, `notes`, `is_new_todo`, `todo_type_id`, `todo_desc_id`, `todo_due_date`, `contact`, `task_status`, `task_update`, `sales_rep`
                FROM `notes` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `date`, `notes`, `is_new_todo`, `todo_type_id`, `todo_desc_id`, `todo_due_date`, `contact`, `task_status`, `task_update`, `sales_rep`
                FROM `notes`";

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
        $id = 2791;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 8645;
        $expected = 2542;

        $sql = "DELETE FROM `notes` WHERE `id` = ?";

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