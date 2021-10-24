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
            "id" => 126,
            "contact_title" => "film",
            "contact_first" => "agency",
            "contact_middle" => "economic",
            "contact_last" => "idea",
            "lead_referral_source" => "maybe",
            "date_of_initial_contact" => "2021-11-03",
            "title" => "show",
            "company" => "last",
            "industry" => "trip",
            "address" => "family",
            "address_street_1" => "policy",
            "address_street_2" => "pressure",
            "address_city" => "social",
            "address_state" => "develop",
            "address_zip" => 1848,
            "address_country" => "degree",
            "phone" => "painting",
            "email" => "danderson@example.com",
            "status" => 2433,
            "website" => "crime",
            "linkedin_profile" => "loss",
            "background_info" => "Career remain interest often power during. Others explain general address from respond need.",
            "sales_rep" => 4914,
            "rating" => 717.41,
            "project_type" => "hear",
            "project_description" => "Know near forward age.",
            "proposal_due_date" => "2021-11-18",
            "budget" => 965.71,
            "deliverables" => "stop",
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
        $id = 8093;
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
        $id = 8230;
        $expected = ["result" => $id];
        $args = ["id" => 7536];

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
        $args = ["id" => 5720];

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
        $id = 49;
        $expected = ["result" => $id];
        $args = ["id" => 8392];

        $this->service->expects($this->once())
            ->method("delete")
            ->with($args["id"])
            ->willReturn($id);

        $actual = $this->controller->delete($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }
}