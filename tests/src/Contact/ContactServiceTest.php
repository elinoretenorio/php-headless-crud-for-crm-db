<?php

declare(strict_types=1);

namespace CRM\Tests\Contact;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;
use CRM\Contact\{ ContactDto, ContactModel, IContactService, ContactService };

class ContactServiceTest extends TestCase
{
    private MockObject $repository;
    private array $input;
    private ContactDto $dto;
    private ContactModel $model;
    private IContactService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock("CRM\Contact\IContactRepository");
        $this->input = [
            "id" => 5642,
            "contact_title" => "police",
            "contact_first" => "race",
            "contact_middle" => "car",
            "contact_last" => "or",
            "lead_referral_source" => "analysis",
            "date_of_initial_contact" => "2021-11-05",
            "title" => "list",
            "company" => "because",
            "industry" => "strategy",
            "address" => "level",
            "address_street_1" => "war",
            "address_street_2" => "middle",
            "address_city" => "account",
            "address_state" => "else",
            "address_zip" => 2332,
            "address_country" => "small",
            "phone" => "nation",
            "email" => "wmcdonald@example.net",
            "status" => 5724,
            "website" => "push",
            "linkedin_profile" => "actually",
            "background_info" => "Word unit paper campaign person. Town they single bit glass threat.",
            "sales_rep" => 5372,
            "rating" => 0.21,
            "project_type" => "practice",
            "project_description" => "Better future tough Congress friend score letter.",
            "proposal_due_date" => "2021-11-15",
            "budget" => 522.00,
            "deliverables" => "research",
        ];
        $this->dto = new ContactDto($this->input);
        $this->model = new ContactModel($this->dto);
        $this->service = new ContactService($this->repository);
    }

    protected function tearDown(): void
    {
        unset($this->repository);
        unset($this->input);
        unset($this->dto);
        unset($this->model);
        unset($this->service);
    }

    public function testInsert_ReturnsId(): void
    {
        $expected = 3893;

        $this->repository->expects($this->once())
            ->method("insert")
            ->with($this->dto)
            ->willReturn($expected);

        $actual = $this->service->insert($this->model);
        $this->assertEquals($expected, $actual);
    }

    public function testInsert_ReturnsEmpty(): void
    {
        $expected = 0;

        $this->repository->expects($this->once())
            ->method("insert")
            ->with($this->dto)
            ->willReturn($expected);

        $actual = $this->service->insert($this->model);
        $this->assertEmpty($actual);
    }

    public function testUpdate_ReturnsRowCount(): void
    {
        $expected = 9949;

        $this->repository->expects($this->once())
            ->method("update")
            ->with($this->dto)
            ->willReturn($expected);

        $actual = $this->service->update($this->model);
        $this->assertEquals($expected, $actual);
    }

    public function testUpdate_ReturnsEmpty(): void
    {
        $expected = 0;

        $this->repository->expects($this->once())
            ->method("update")
            ->with($this->dto)
            ->willReturn($expected);

        $actual = $this->service->update($this->model);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsNull(): void
    {
        $id = 9256;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 7709;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn($this->dto);

        $actual = $this->service->get($id);
        $this->assertEquals($this->model, $actual);
    }

    public function testGetAll_ReturnsEmpty(): void
    {
        $this->repository->expects($this->once())
            ->method("getAll")
            ->willReturn([]);

        $actual = $this->service->getAll();
        $this->assertEmpty($actual);
    }

    public function testGetAll_ReturnsModels(): void
    {
        $this->repository->expects($this->once())
            ->method("getAll")
            ->willReturn([$this->dto]);

        $actual = $this->service->getAll();
        $this->assertEquals([$this->model], $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 56;
        $expected = 1989;

        $this->repository->expects($this->once())
            ->method("delete")
            ->with($id)
            ->willReturn($expected);

        $actual = $this->service->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testCreateModel_ReturnsNullIfEmpty(): void
    {
        $actual = $this->service->createModel([]);
        $this->assertNull($actual);
    }

    public function testCreateModel_ReturnsModel(): void
    {
        $actual = $this->service->createModel($this->input);
        $this->assertEquals($this->model, $actual);
    }
}