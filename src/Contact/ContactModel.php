<?php

declare(strict_types=1);

namespace CRM\Contact;

use JsonSerializable;

class ContactModel implements JsonSerializable
{
    private int $id;
    private string $contactTitle;
    private string $contactFirst;
    private string $contactMiddle;
    private string $contactLast;
    private string $leadReferralSource;
    private string $dateOfInitialContact;
    private string $title;
    private string $company;
    private string $industry;
    private string $address;
    private string $addressStreet1;
    private string $addressStreet2;
    private string $addressCity;
    private string $addressState;
    private int $addressZip;
    private string $addressCountry;
    private string $phone;
    private string $email;
    private int $status;
    private string $website;
    private string $linkedinProfile;
    private string $backgroundInfo;
    private int $salesRep;
    private float $rating;
    private string $projectType;
    private string $projectDescription;
    private string $proposalDueDate;
    private float $budget;
    private string $deliverables;

    public function __construct(ContactDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->contactTitle = $dto->contactTitle;
        $this->contactFirst = $dto->contactFirst;
        $this->contactMiddle = $dto->contactMiddle;
        $this->contactLast = $dto->contactLast;
        $this->leadReferralSource = $dto->leadReferralSource;
        $this->dateOfInitialContact = $dto->dateOfInitialContact;
        $this->title = $dto->title;
        $this->company = $dto->company;
        $this->industry = $dto->industry;
        $this->address = $dto->address;
        $this->addressStreet1 = $dto->addressStreet1;
        $this->addressStreet2 = $dto->addressStreet2;
        $this->addressCity = $dto->addressCity;
        $this->addressState = $dto->addressState;
        $this->addressZip = $dto->addressZip;
        $this->addressCountry = $dto->addressCountry;
        $this->phone = $dto->phone;
        $this->email = $dto->email;
        $this->status = $dto->status;
        $this->website = $dto->website;
        $this->linkedinProfile = $dto->linkedinProfile;
        $this->backgroundInfo = $dto->backgroundInfo;
        $this->salesRep = $dto->salesRep;
        $this->rating = $dto->rating;
        $this->projectType = $dto->projectType;
        $this->projectDescription = $dto->projectDescription;
        $this->proposalDueDate = $dto->proposalDueDate;
        $this->budget = $dto->budget;
        $this->deliverables = $dto->deliverables;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getContactTitle(): string
    {
        return $this->contactTitle;
    }

    public function setContactTitle(string $contactTitle): void
    {
        $this->contactTitle = $contactTitle;
    }

    public function getContactFirst(): string
    {
        return $this->contactFirst;
    }

    public function setContactFirst(string $contactFirst): void
    {
        $this->contactFirst = $contactFirst;
    }

    public function getContactMiddle(): string
    {
        return $this->contactMiddle;
    }

    public function setContactMiddle(string $contactMiddle): void
    {
        $this->contactMiddle = $contactMiddle;
    }

    public function getContactLast(): string
    {
        return $this->contactLast;
    }

    public function setContactLast(string $contactLast): void
    {
        $this->contactLast = $contactLast;
    }

    public function getLeadReferralSource(): string
    {
        return $this->leadReferralSource;
    }

    public function setLeadReferralSource(string $leadReferralSource): void
    {
        $this->leadReferralSource = $leadReferralSource;
    }

    public function getDateOfInitialContact(): string
    {
        return $this->dateOfInitialContact;
    }

    public function setDateOfInitialContact(string $dateOfInitialContact): void
    {
        $this->dateOfInitialContact = $dateOfInitialContact;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getCompany(): string
    {
        return $this->company;
    }

    public function setCompany(string $company): void
    {
        $this->company = $company;
    }

    public function getIndustry(): string
    {
        return $this->industry;
    }

    public function setIndustry(string $industry): void
    {
        $this->industry = $industry;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getAddressStreet1(): string
    {
        return $this->addressStreet1;
    }

    public function setAddressStreet1(string $addressStreet1): void
    {
        $this->addressStreet1 = $addressStreet1;
    }

    public function getAddressStreet2(): string
    {
        return $this->addressStreet2;
    }

    public function setAddressStreet2(string $addressStreet2): void
    {
        $this->addressStreet2 = $addressStreet2;
    }

    public function getAddressCity(): string
    {
        return $this->addressCity;
    }

    public function setAddressCity(string $addressCity): void
    {
        $this->addressCity = $addressCity;
    }

    public function getAddressState(): string
    {
        return $this->addressState;
    }

    public function setAddressState(string $addressState): void
    {
        $this->addressState = $addressState;
    }

    public function getAddressZip(): int
    {
        return $this->addressZip;
    }

    public function setAddressZip(int $addressZip): void
    {
        $this->addressZip = $addressZip;
    }

    public function getAddressCountry(): string
    {
        return $this->addressCountry;
    }

    public function setAddressCountry(string $addressCountry): void
    {
        $this->addressCountry = $addressCountry;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function getWebsite(): string
    {
        return $this->website;
    }

    public function setWebsite(string $website): void
    {
        $this->website = $website;
    }

    public function getLinkedinProfile(): string
    {
        return $this->linkedinProfile;
    }

    public function setLinkedinProfile(string $linkedinProfile): void
    {
        $this->linkedinProfile = $linkedinProfile;
    }

    public function getBackgroundInfo(): string
    {
        return $this->backgroundInfo;
    }

    public function setBackgroundInfo(string $backgroundInfo): void
    {
        $this->backgroundInfo = $backgroundInfo;
    }

    public function getSalesRep(): int
    {
        return $this->salesRep;
    }

    public function setSalesRep(int $salesRep): void
    {
        $this->salesRep = $salesRep;
    }

    public function getRating(): float
    {
        return $this->rating;
    }

    public function setRating(float $rating): void
    {
        $this->rating = $rating;
    }

    public function getProjectType(): string
    {
        return $this->projectType;
    }

    public function setProjectType(string $projectType): void
    {
        $this->projectType = $projectType;
    }

    public function getProjectDescription(): string
    {
        return $this->projectDescription;
    }

    public function setProjectDescription(string $projectDescription): void
    {
        $this->projectDescription = $projectDescription;
    }

    public function getProposalDueDate(): string
    {
        return $this->proposalDueDate;
    }

    public function setProposalDueDate(string $proposalDueDate): void
    {
        $this->proposalDueDate = $proposalDueDate;
    }

    public function getBudget(): float
    {
        return $this->budget;
    }

    public function setBudget(float $budget): void
    {
        $this->budget = $budget;
    }

    public function getDeliverables(): string
    {
        return $this->deliverables;
    }

    public function setDeliverables(string $deliverables): void
    {
        $this->deliverables = $deliverables;
    }

    public function toDto(): ContactDto
    {
        $dto = new ContactDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->contactTitle = $this->contactTitle ?? "";
        $dto->contactFirst = $this->contactFirst ?? "";
        $dto->contactMiddle = $this->contactMiddle ?? "";
        $dto->contactLast = $this->contactLast ?? "";
        $dto->leadReferralSource = $this->leadReferralSource ?? "";
        $dto->dateOfInitialContact = $this->dateOfInitialContact ?? "";
        $dto->title = $this->title ?? "";
        $dto->company = $this->company ?? "";
        $dto->industry = $this->industry ?? "";
        $dto->address = $this->address ?? "";
        $dto->addressStreet1 = $this->addressStreet1 ?? "";
        $dto->addressStreet2 = $this->addressStreet2 ?? "";
        $dto->addressCity = $this->addressCity ?? "";
        $dto->addressState = $this->addressState ?? "";
        $dto->addressZip = (int) ($this->addressZip ?? 0);
        $dto->addressCountry = $this->addressCountry ?? "";
        $dto->phone = $this->phone ?? "";
        $dto->email = $this->email ?? "";
        $dto->status = (int) ($this->status ?? 0);
        $dto->website = $this->website ?? "";
        $dto->linkedinProfile = $this->linkedinProfile ?? "";
        $dto->backgroundInfo = $this->backgroundInfo ?? "";
        $dto->salesRep = (int) ($this->salesRep ?? 0);
        $dto->rating = (float) ($this->rating ?? 0);
        $dto->projectType = $this->projectType ?? "";
        $dto->projectDescription = $this->projectDescription ?? "";
        $dto->proposalDueDate = $this->proposalDueDate ?? "";
        $dto->budget = (float) ($this->budget ?? 0);
        $dto->deliverables = $this->deliverables ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "contact_title" => $this->contactTitle,
            "contact_first" => $this->contactFirst,
            "contact_middle" => $this->contactMiddle,
            "contact_last" => $this->contactLast,
            "lead_referral_source" => $this->leadReferralSource,
            "date_of_initial_contact" => $this->dateOfInitialContact,
            "title" => $this->title,
            "company" => $this->company,
            "industry" => $this->industry,
            "address" => $this->address,
            "address_street_1" => $this->addressStreet1,
            "address_street_2" => $this->addressStreet2,
            "address_city" => $this->addressCity,
            "address_state" => $this->addressState,
            "address_zip" => $this->addressZip,
            "address_country" => $this->addressCountry,
            "phone" => $this->phone,
            "email" => $this->email,
            "status" => $this->status,
            "website" => $this->website,
            "linkedin_profile" => $this->linkedinProfile,
            "background_info" => $this->backgroundInfo,
            "sales_rep" => $this->salesRep,
            "rating" => $this->rating,
            "project_type" => $this->projectType,
            "project_description" => $this->projectDescription,
            "proposal_due_date" => $this->proposalDueDate,
            "budget" => $this->budget,
            "deliverables" => $this->deliverables,
        ];
    }
}