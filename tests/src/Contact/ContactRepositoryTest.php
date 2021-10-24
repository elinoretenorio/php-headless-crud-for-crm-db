<?php

declare(strict_types=1);

namespace CRM\Tests\Contact;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;
use CRM\Database\DatabaseException;
use CRM\Contact\{ ContactDto, IContactRepository, ContactRepository };

class ContactRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private ContactDto $dto;
    private IContactRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("CRM\Database\IDatabase");
        $this->result = $this->createMock("CRM\Database\IDatabaseResult");
        $this->input = [
            "id" => 3701,
            "contact_title" => "college",
            "contact_first" => "source",
            "contact_middle" => "relationship",
            "contact_last" => "maybe",
            "lead_referral_source" => "property",
            "date_of_initial_contact" => "2021-11-04",
            "title" => "left",
            "company" => "wear",
            "industry" => "their",
            "address" => "speak",
            "address_street_1" => "other",
            "address_street_2" => "outside",
            "address_city" => "position",
            "address_state" => "themselves",
            "address_zip" => 411,
            "address_country" => "however",
            "phone" => "appear",
            "email" => "john29@example.com",
            "status" => 1499,
            "website" => "happen",
            "linkedin_profile" => "body",
            "background_info" => "Stand different image opportunity science. Determine get interesting.",
            "sales_rep" => 4971,
            "rating" => 489.00,
            "project_type" => "entire",
            "project_description" => "Game lose address than life.",
            "proposal_due_date" => "2021-11-16",
            "budget" => 115.28,
            "deliverables" => "base",
        ];
        $this->dto = new ContactDto($this->input);
        $this->repository = new ContactRepository($this->db);
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
        $expected = 3817;

        $sql = "INSERT INTO `contact` (`contact_title`, `contact_first`, `contact_middle`, `contact_last`, `lead_referral_source`, `date_of_initial_contact`, `title`, `company`, `industry`, `address`, `address_street_1`, `address_street_2`, `address_city`, `address_state`, `address_zip`, `address_country`, `phone`, `email`, `status`, `website`, `linkedin_profile`, `background_info`, `sales_rep`, `rating`, `project_type`, `project_description`, `proposal_due_date`, `budget`, `deliverables`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->contactTitle,
                $this->dto->contactFirst,
                $this->dto->contactMiddle,
                $this->dto->contactLast,
                $this->dto->leadReferralSource,
                $this->dto->dateOfInitialContact,
                $this->dto->title,
                $this->dto->company,
                $this->dto->industry,
                $this->dto->address,
                $this->dto->addressStreet1,
                $this->dto->addressStreet2,
                $this->dto->addressCity,
                $this->dto->addressState,
                $this->dto->addressZip,
                $this->dto->addressCountry,
                $this->dto->phone,
                $this->dto->email,
                $this->dto->status,
                $this->dto->website,
                $this->dto->linkedinProfile,
                $this->dto->backgroundInfo,
                $this->dto->salesRep,
                $this->dto->rating,
                $this->dto->projectType,
                $this->dto->projectDescription,
                $this->dto->proposalDueDate,
                $this->dto->budget,
                $this->dto->deliverables
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
        $expected = 6477;

        $sql = "UPDATE `contact` SET `contact_title` = ?, `contact_first` = ?, `contact_middle` = ?, `contact_last` = ?, `lead_referral_source` = ?, `date_of_initial_contact` = ?, `title` = ?, `company` = ?, `industry` = ?, `address` = ?, `address_street_1` = ?, `address_street_2` = ?, `address_city` = ?, `address_state` = ?, `address_zip` = ?, `address_country` = ?, `phone` = ?, `email` = ?, `status` = ?, `website` = ?, `linkedin_profile` = ?, `background_info` = ?, `sales_rep` = ?, `rating` = ?, `project_type` = ?, `project_description` = ?, `proposal_due_date` = ?, `budget` = ?, `deliverables` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->contactTitle,
                $this->dto->contactFirst,
                $this->dto->contactMiddle,
                $this->dto->contactLast,
                $this->dto->leadReferralSource,
                $this->dto->dateOfInitialContact,
                $this->dto->title,
                $this->dto->company,
                $this->dto->industry,
                $this->dto->address,
                $this->dto->addressStreet1,
                $this->dto->addressStreet2,
                $this->dto->addressCity,
                $this->dto->addressState,
                $this->dto->addressZip,
                $this->dto->addressCountry,
                $this->dto->phone,
                $this->dto->email,
                $this->dto->status,
                $this->dto->website,
                $this->dto->linkedinProfile,
                $this->dto->backgroundInfo,
                $this->dto->salesRep,
                $this->dto->rating,
                $this->dto->projectType,
                $this->dto->projectDescription,
                $this->dto->proposalDueDate,
                $this->dto->budget,
                $this->dto->deliverables,
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
        $id = 2804;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 4603;

        $sql = "SELECT `id`, `contact_title`, `contact_first`, `contact_middle`, `contact_last`, `lead_referral_source`, `date_of_initial_contact`, `title`, `company`, `industry`, `address`, `address_street_1`, `address_street_2`, `address_city`, `address_state`, `address_zip`, `address_country`, `phone`, `email`, `status`, `website`, `linkedin_profile`, `background_info`, `sales_rep`, `rating`, `project_type`, `project_description`, `proposal_due_date`, `budget`, `deliverables`
                FROM `contact` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `contact_title`, `contact_first`, `contact_middle`, `contact_last`, `lead_referral_source`, `date_of_initial_contact`, `title`, `company`, `industry`, `address`, `address_street_1`, `address_street_2`, `address_city`, `address_state`, `address_zip`, `address_country`, `phone`, `email`, `status`, `website`, `linkedin_profile`, `background_info`, `sales_rep`, `rating`, `project_type`, `project_description`, `proposal_due_date`, `budget`, `deliverables`
                FROM `contact`";

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
        $id = 2866;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 7632;
        $expected = 3323;

        $sql = "DELETE FROM `contact` WHERE `id` = ?";

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