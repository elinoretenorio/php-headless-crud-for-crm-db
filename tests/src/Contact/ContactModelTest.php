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
            "id" => 2488,
            "contact_title" => "talk",
            "contact_first" => "condition",
            "contact_middle" => "us",
            "contact_last" => "accept",
            "lead_referral_source" => "you",
            "date_of_initial_contact" => "2021-11-06",
            "title" => "attorney",
            "company" => "she",
            "industry" => "cultural",
            "address" => "focus",
            "address_street_1" => "police",
            "address_street_2" => "policy",
            "address_city" => "recognize",
            "address_state" => "certain",
            "address_zip" => 2710,
            "address_country" => "time",
            "phone" => "consider",
            "email" => "mariahchapman@example.org",
            "status" => 867,
            "website" => "deep",
            "linkedin_profile" => "who",
            "background_info" => "Black hot actually care attorney accept machine. Will stuff whose player among strong cost. Music real whom sense like water around hand. Kind issue head animal prepare huge still evening.",
            "sales_rep" => 8933,
            "rating" => 119.54,
            "project_type" => "sometimes",
            "project_description" => "Fly can issue especially door.",
            "proposal_due_date" => "2021-11-17",
            "budget" => 426.39,
            "deliverables" => "western",
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
        $expected = 5528;
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
        $expected = "president";
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
        $expected = "fall";
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
        $expected = "suggest";
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
        $expected = "natural";
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
        $expected = "maybe";
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
        $expected = "2021-11-16";
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
        $expected = "media";
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
        $expected = "herself";
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
        $expected = "pull";
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
        $expected = "heart";
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
        $expected = "policy";
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
        $expected = "it";
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
        $expected = "charge";
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
        $expected = "agree";
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
        $expected = 9545;
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
        $expected = "situation";
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
        $expected = "them";
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
        $expected = "davidscott@example.com";
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
        $expected = 8176;
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
        $expected = "mean";
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
        $expected = "project";
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
        $expected = "Laugh plant enter owner over. Walk long affect. Alone author different similar remain modern water.";
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
        $expected = 4645;
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
        $expected = 901.84;
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
        $expected = "most";
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
        $expected = "Out Democrat total.";
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
        $expected = "2021-11-07";
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
        $expected = 190.00;
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
        $expected = "answer";
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