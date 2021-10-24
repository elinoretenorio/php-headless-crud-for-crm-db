<?php

declare(strict_types=1);

namespace CRM\Tests\Contact;

use PHPUnit\Framework\TestCase;
use CRM\Contact\{ ContactDto, ContactModel };

class ContactModelTest extends TestCase
{
    private array $input;
    private ContactDto $dto;
    private ContactModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 8596,
            "contact_title" => "detail",
            "contact_first" => "only",
            "contact_middle" => "Republican",
            "contact_last" => "conference",
            "lead_referral_source" => "experience",
            "date_of_initial_contact" => "2021-11-06",
            "title" => "believe",
            "company" => "test",
            "industry" => "drive",
            "address" => "station",
            "address_street_1" => "individual",
            "address_street_2" => "no",
            "address_city" => "letter",
            "address_state" => "hear",
            "address_zip" => 45,
            "address_country" => "total",
            "phone" => "education",
            "email" => "michael47@example.net",
            "status" => 9243,
            "website" => "book",
            "linkedin_profile" => "trouble",
            "background_info" => "American poor tend team environmental. Together effect need health suffer foot. Range heavy term clearly above close.",
            "sales_rep" => 2154,
            "rating" => 776.00,
            "project_type" => "resource",
            "project_description" => "Decision performance else analysis idea.",
            "proposal_due_date" => "2021-11-17",
            "budget" => 183.14,
            "deliverables" => "several",
        ];
        $this->dto = new ContactDto($this->input);
        $this->model = new ContactModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new ContactModel(null);

        $this->assertInstanceOf(ContactModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 9659;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetContactTitle(): void
    {
        $this->assertEquals($this->dto->contactTitle, $this->model->getContactTitle());
    }

    public function testSetContactTitle(): void
    {
        $expected = "help";
        $model = $this->model;
        $model->setContactTitle($expected);

        $this->assertEquals($expected, $model->getContactTitle());
    }

    public function testGetContactFirst(): void
    {
        $this->assertEquals($this->dto->contactFirst, $this->model->getContactFirst());
    }

    public function testSetContactFirst(): void
    {
        $expected = "before";
        $model = $this->model;
        $model->setContactFirst($expected);

        $this->assertEquals($expected, $model->getContactFirst());
    }

    public function testGetContactMiddle(): void
    {
        $this->assertEquals($this->dto->contactMiddle, $this->model->getContactMiddle());
    }

    public function testSetContactMiddle(): void
    {
        $expected = "president";
        $model = $this->model;
        $model->setContactMiddle($expected);

        $this->assertEquals($expected, $model->getContactMiddle());
    }

    public function testGetContactLast(): void
    {
        $this->assertEquals($this->dto->contactLast, $this->model->getContactLast());
    }

    public function testSetContactLast(): void
    {
        $expected = "floor";
        $model = $this->model;
        $model->setContactLast($expected);

        $this->assertEquals($expected, $model->getContactLast());
    }

    public function testGetLeadReferralSource(): void
    {
        $this->assertEquals($this->dto->leadReferralSource, $this->model->getLeadReferralSource());
    }

    public function testSetLeadReferralSource(): void
    {
        $expected = "enough";
        $model = $this->model;
        $model->setLeadReferralSource($expected);

        $this->assertEquals($expected, $model->getLeadReferralSource());
    }

    public function testGetDateOfInitialContact(): void
    {
        $this->assertEquals($this->dto->dateOfInitialContact, $this->model->getDateOfInitialContact());
    }

    public function testSetDateOfInitialContact(): void
    {
        $expected = "2021-10-27";
        $model = $this->model;
        $model->setDateOfInitialContact($expected);

        $this->assertEquals($expected, $model->getDateOfInitialContact());
    }

    public function testGetTitle(): void
    {
        $this->assertEquals($this->dto->title, $this->model->getTitle());
    }

    public function testSetTitle(): void
    {
        $expected = "forward";
        $model = $this->model;
        $model->setTitle($expected);

        $this->assertEquals($expected, $model->getTitle());
    }

    public function testGetCompany(): void
    {
        $this->assertEquals($this->dto->company, $this->model->getCompany());
    }

    public function testSetCompany(): void
    {
        $expected = "environment";
        $model = $this->model;
        $model->setCompany($expected);

        $this->assertEquals($expected, $model->getCompany());
    }

    public function testGetIndustry(): void
    {
        $this->assertEquals($this->dto->industry, $this->model->getIndustry());
    }

    public function testSetIndustry(): void
    {
        $expected = "level";
        $model = $this->model;
        $model->setIndustry($expected);

        $this->assertEquals($expected, $model->getIndustry());
    }

    public function testGetAddress(): void
    {
        $this->assertEquals($this->dto->address, $this->model->getAddress());
    }

    public function testSetAddress(): void
    {
        $expected = "later";
        $model = $this->model;
        $model->setAddress($expected);

        $this->assertEquals($expected, $model->getAddress());
    }

    public function testGetAddressStreet1(): void
    {
        $this->assertEquals($this->dto->addressStreet1, $this->model->getAddressStreet1());
    }

    public function testSetAddressStreet1(): void
    {
        $expected = "recent";
        $model = $this->model;
        $model->setAddressStreet1($expected);

        $this->assertEquals($expected, $model->getAddressStreet1());
    }

    public function testGetAddressStreet2(): void
    {
        $this->assertEquals($this->dto->addressStreet2, $this->model->getAddressStreet2());
    }

    public function testSetAddressStreet2(): void
    {
        $expected = "check";
        $model = $this->model;
        $model->setAddressStreet2($expected);

        $this->assertEquals($expected, $model->getAddressStreet2());
    }

    public function testGetAddressCity(): void
    {
        $this->assertEquals($this->dto->addressCity, $this->model->getAddressCity());
    }

    public function testSetAddressCity(): void
    {
        $expected = "plant";
        $model = $this->model;
        $model->setAddressCity($expected);

        $this->assertEquals($expected, $model->getAddressCity());
    }

    public function testGetAddressState(): void
    {
        $this->assertEquals($this->dto->addressState, $this->model->getAddressState());
    }

    public function testSetAddressState(): void
    {
        $expected = "cold";
        $model = $this->model;
        $model->setAddressState($expected);

        $this->assertEquals($expected, $model->getAddressState());
    }

    public function testGetAddressZip(): void
    {
        $this->assertEquals($this->dto->addressZip, $this->model->getAddressZip());
    }

    public function testSetAddressZip(): void
    {
        $expected = 4305;
        $model = $this->model;
        $model->setAddressZip($expected);

        $this->assertEquals($expected, $model->getAddressZip());
    }

    public function testGetAddressCountry(): void
    {
        $this->assertEquals($this->dto->addressCountry, $this->model->getAddressCountry());
    }

    public function testSetAddressCountry(): void
    {
        $expected = "difference";
        $model = $this->model;
        $model->setAddressCountry($expected);

        $this->assertEquals($expected, $model->getAddressCountry());
    }

    public function testGetPhone(): void
    {
        $this->assertEquals($this->dto->phone, $this->model->getPhone());
    }

    public function testSetPhone(): void
    {
        $expected = "hair";
        $model = $this->model;
        $model->setPhone($expected);

        $this->assertEquals($expected, $model->getPhone());
    }

    public function testGetEmail(): void
    {
        $this->assertEquals($this->dto->email, $this->model->getEmail());
    }

    public function testSetEmail(): void
    {
        $expected = "pittsshawn@example.net";
        $model = $this->model;
        $model->setEmail($expected);

        $this->assertEquals($expected, $model->getEmail());
    }

    public function testGetStatus(): void
    {
        $this->assertEquals($this->dto->status, $this->model->getStatus());
    }

    public function testSetStatus(): void
    {
        $expected = 7168;
        $model = $this->model;
        $model->setStatus($expected);

        $this->assertEquals($expected, $model->getStatus());
    }

    public function testGetWebsite(): void
    {
        $this->assertEquals($this->dto->website, $this->model->getWebsite());
    }

    public function testSetWebsite(): void
    {
        $expected = "concern";
        $model = $this->model;
        $model->setWebsite($expected);

        $this->assertEquals($expected, $model->getWebsite());
    }

    public function testGetLinkedinProfile(): void
    {
        $this->assertEquals($this->dto->linkedinProfile, $this->model->getLinkedinProfile());
    }

    public function testSetLinkedinProfile(): void
    {
        $expected = "minute";
        $model = $this->model;
        $model->setLinkedinProfile($expected);

        $this->assertEquals($expected, $model->getLinkedinProfile());
    }

    public function testGetBackgroundInfo(): void
    {
        $this->assertEquals($this->dto->backgroundInfo, $this->model->getBackgroundInfo());
    }

    public function testSetBackgroundInfo(): void
    {
        $expected = "Speak economy development article hotel individual else. Herself gun available create industry understand. Report tonight head job treatment majority nation.";
        $model = $this->model;
        $model->setBackgroundInfo($expected);

        $this->assertEquals($expected, $model->getBackgroundInfo());
    }

    public function testGetSalesRep(): void
    {
        $this->assertEquals($this->dto->salesRep, $this->model->getSalesRep());
    }

    public function testSetSalesRep(): void
    {
        $expected = 7445;
        $model = $this->model;
        $model->setSalesRep($expected);

        $this->assertEquals($expected, $model->getSalesRep());
    }

    public function testGetRating(): void
    {
        $this->assertEquals($this->dto->rating, $this->model->getRating());
    }

    public function testSetRating(): void
    {
        $expected = 425.00;
        $model = $this->model;
        $model->setRating($expected);

        $this->assertEquals($expected, $model->getRating());
    }

    public function testGetProjectType(): void
    {
        $this->assertEquals($this->dto->projectType, $this->model->getProjectType());
    }

    public function testSetProjectType(): void
    {
        $expected = "organization";
        $model = $this->model;
        $model->setProjectType($expected);

        $this->assertEquals($expected, $model->getProjectType());
    }

    public function testGetProjectDescription(): void
    {
        $this->assertEquals($this->dto->projectDescription, $this->model->getProjectDescription());
    }

    public function testSetProjectDescription(): void
    {
        $expected = "Try little area learn fill take risk top.";
        $model = $this->model;
        $model->setProjectDescription($expected);

        $this->assertEquals($expected, $model->getProjectDescription());
    }

    public function testGetProposalDueDate(): void
    {
        $this->assertEquals($this->dto->proposalDueDate, $this->model->getProposalDueDate());
    }

    public function testSetProposalDueDate(): void
    {
        $expected = "2021-11-09";
        $model = $this->model;
        $model->setProposalDueDate($expected);

        $this->assertEquals($expected, $model->getProposalDueDate());
    }

    public function testGetBudget(): void
    {
        $this->assertEquals($this->dto->budget, $this->model->getBudget());
    }

    public function testSetBudget(): void
    {
        $expected = 770.55;
        $model = $this->model;
        $model->setBudget($expected);

        $this->assertEquals($expected, $model->getBudget());
    }

    public function testGetDeliverables(): void
    {
        $this->assertEquals($this->dto->deliverables, $this->model->getDeliverables());
    }

    public function testSetDeliverables(): void
    {
        $expected = "subject";
        $model = $this->model;
        $model->setDeliverables($expected);

        $this->assertEquals($expected, $model->getDeliverables());
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