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
            "id" => 6740,
            "contact_title" => "area",
            "contact_first" => "politics",
            "contact_middle" => "say",
            "contact_last" => "doctor",
            "lead_referral_source" => "sort",
            "date_of_initial_contact" => "2021-10-26",
            "title" => "how",
            "company" => "top",
            "industry" => "by",
            "address" => "final",
            "address_street_1" => "method",
            "address_street_2" => "above",
            "address_city" => "them",
            "address_state" => "option",
            "address_zip" => 2913,
            "address_country" => "activity",
            "phone" => "ground",
            "email" => "buchananlisa@example.org",
            "status" => 9982,
            "website" => "degree",
            "linkedin_profile" => "here",
            "background_info" => "Religious item employee. Language response traditional call speech keep clear.",
            "sales_rep" => 6835,
            "rating" => 959.00,
            "project_type" => "improve",
            "project_description" => "Security own newspaper subject.",
            "proposal_due_date" => "2021-11-05",
            "budget" => 214.00,
            "deliverables" => "full",
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
        $expected = 2317;

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
        $expected = 8901;

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
        $id = 9614;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 9477;

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
        $id = 5910;
        $expected = 656;

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