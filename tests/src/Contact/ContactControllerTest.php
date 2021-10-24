<?php

declare(strict_types=1);

namespace CRM\Tests\Contact;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;
use CRM\Contact\{ ContactDto, ContactModel, ContactController };

class ContactControllerTest extends TestCase
{
    private array $input;
    private ContactDto $dto;
    private ContactModel $model;
    private MockObject $service;
    private MockObject $request;
    private MockObject $stream;
    private ContactController $controller;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 2981,
            "contact_title" => "fear",
            "contact_first" => "travel",
            "contact_middle" => "seat",
            "contact_last" => "everyone",
            "lead_referral_source" => "price",
            "date_of_initial_contact" => "2021-10-26",
            "title" => "ability",
            "company" => "those",
            "industry" => "option",
            "address" => "anyone",
            "address_street_1" => "ever",
            "address_street_2" => "lose",
            "address_city" => "heart",
            "address_state" => "analysis",
            "address_zip" => 5564,
            "address_country" => "option",
            "phone" => "rule",
            "email" => "susan42@example.com",
            "status" => 3939,
            "website" => "save",
            "linkedin_profile" => "appear",
            "background_info" => "At would get training always parent draw. About place reality life. Condition huge yard maintain operation back almost.",
            "sales_rep" => 2942,
            "rating" => 954.52,
            "project_type" => "subject",
            "project_description" => "Call state sea end.",
            "proposal_due_date" => "2021-10-28",
            "budget" => 339.71,
            "deliverables" => "police",
        ];
        $this->dto = new ContactDto($this->input);
        $this->model = new ContactModel($this->dto);
        $this->service = $this->createMock("CRM\Contact\IContactService");
        $this->request = $this->createMock("Psr\Http\Message\ServerRequestInterface");
        $this->stream = $this->createMock("Psr\Http\Message\StreamInterface");
        $this->controller = new ContactController(
            $this->service
        );

        $this->stream->method("getContents")
            ->willReturn("[]");

        $this->request->method("getBody")
            ->willReturn($this->stream);

        $this->request->method("getParsedBody")
            ->willReturn($this->input);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
        unset($this->service);
        unset($this->request);
        unset($this->stream);
        unset($this->controller);
    }

    public function testInsert_ReturnsResponse(): void
    {
        $id = 1020;
        $expected = ["result" => $id];
        $args = [];

        $this->service->expects($this->once())
            ->method("createModel")
            ->with($this->request->getParsedBody())
            ->willReturn($this->model);
        $this->service->expects($this->once())
            ->method("insert")
            ->with($this->model)
            ->willReturn($id);

        $actual = $this->controller->insert($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }

    public function testUpdate_ReturnsErrorResponse(): void
    {
        $expected = ["result" => 0, "message" => "Invalid input"];
        $args = ["id" => 0];

        $actual = $this->controller->update($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }

    public function testUpdate_ReturnsResponse(): void
    {
        $id = 9805;
        $expected = ["result" => $id];
        $args = ["id" => 1066];

        $this->service->expects($this->once())
            ->method("createModel")
            ->with($this->request->getParsedBody())
            ->willReturn($this->model);
        $this->service->expects($this->once())
            ->method("update")
            ->with($this->model)
            ->willReturn($id);

        $actual = $this->controller->update($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }

    public function testGet_ReturnsErrorResponse(): void
    {
        $expected = ["result" => 0, "message" => "Invalid input"];
        $args = ["id" => 0];

        $actual = $this->controller->get($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }

    public function testGet_ReturnsResponse(): void
    {
        $expected = ["result" => $this->model->jsonSerialize()];
        $args = ["id" => 6251];

        $this->service->expects($this->once())
            ->method("get")
            ->with($args["id"])
            ->willReturn($this->model);

        $actual = $this->controller->get($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }

    public function testGetAll_ReturnsResponse(): void
    {
        $expected = ["result" => [$this->model->jsonSerialize()]];
        $args = [];

        $this->service->expects($this->once())
            ->method("getAll")
            ->willReturn([$this->model]);

        $actual = $this->controller->getAll($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }

    public function testDelete_ReturnsErrorResponse(): void
    {
        $expected = ["result" => 0, "message" => "Invalid input"];
        $args = ["id" => 0];

        $actual = $this->controller->delete($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }

    public function testDelete_ReturnsResponse(): void
    {
        $id = 4988;
        $expected = ["result" => $id];
        $args = ["id" => 9342];

        $this->service->expects($this->once())
            ->method("delete")
            ->with($args["id"])
            ->willReturn($id);

        $actual = $this->controller->delete($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }
}