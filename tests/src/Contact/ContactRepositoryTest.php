<?php

declare(strict_types=1);

namespace CRM\Tests\Contact;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;
use CRM\Database\DatabaseException;
use CRM\Contact\{ ContactDto, IContactRepository, ContactRepository };

class ContactRepositoryTest extends TestCase
{
    private MockObject $db;
    private MockObject $result;
    private array $input;
    private ContactDto $dto;
    private IContactRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("CRM\Database\IDatabase");
        $this->result = $this->createMock("CRM\Database\IDatabaseResult");
        $this->input = [
            "id" => 1056,
            "contact_title" => "own",
            "contact_first" => "customer",
            "contact_middle" => "skin",
            "contact_last" => "vote",
            "lead_referral_source" => "serve",
            "date_of_initial_contact" => "2021-11-22",
            "title" => "or",
            "company" => "everyone",
            "industry" => "difference",
            "address" => "trade",
            "address_street_1" => "second",
            "address_street_2" => "truth",
            "address_city" => "second",
            "address_state" => "college",
            "address_zip" => 6920,
            "address_country" => "would",
            "phone" => "later",
            "email" => "moorepatricia@example.org",
            "status" => 63,
            "website" => "popular",
            "linkedin_profile" => "PM",
            "background_info" => "Sense prevent light information others. Natural least action lawyer film kitchen.",
            "sales_rep" => 4747,
            "rating" => 15.00,
            "project_type" => "listen",
            "project_description" => "Study adult better push population camera themselves.",
            "proposal_due_date" => "2021-11-22",
            "budget" => 831.25,
            "deliverables" => "act",
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
        $expected = 9688;

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
        $expected = 9617;

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
        $id = 8855;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 8531;

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
        $id = 6008;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 7004;
        $expected = 8633;

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