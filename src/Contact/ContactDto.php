<?php

declare(strict_types=1);

namespace CRM\Contact;

class ContactDto 
{
    public int $id;
    public string $contactTitle;
    public string $contactFirst;
    public string $contactMiddle;
    public string $contactLast;
    public string $leadReferralSource;
    public string $dateOfInitialContact;
    public string $title;
    public string $company;
    public string $industry;
    public string $address;
    public string $addressStreet1;
    public string $addressStreet2;
    public string $addressCity;
    public string $addressState;
    public int $addressZip;
    public string $addressCountry;
    public string $phone;
    public string $email;
    public int $status;
    public string $website;
    public string $linkedinProfile;
    public string $backgroundInfo;
    public int $salesRep;
    public float $rating;
    public string $projectType;
    public string $projectDescription;
    public string $proposalDueDate;
    public float $budget;
    public string $deliverables;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->contactTitle = $row["contact_title"] ?? "";
        $this->contactFirst = $row["contact_first"] ?? "";
        $this->contactMiddle = $row["contact_middle"] ?? "";
        $this->contactLast = $row["contact_last"] ?? "";
        $this->leadReferralSource = $row["lead_referral_source"] ?? "";
        $this->dateOfInitialContact = $row["date_of_initial_contact"] ?? "";
        $this->title = $row["title"] ?? "";
        $this->company = $row["company"] ?? "";
        $this->industry = $row["industry"] ?? "";
        $this->address = $row["address"] ?? "";
        $this->addressStreet1 = $row["address_street_1"] ?? "";
        $this->addressStreet2 = $row["address_street_2"] ?? "";
        $this->addressCity = $row["address_city"] ?? "";
        $this->addressState = $row["address_state"] ?? "";
        $this->addressZip = (int) ($row["address_zip"] ?? 0);
        $this->addressCountry = $row["address_country"] ?? "";
        $this->phone = $row["phone"] ?? "";
        $this->email = $row["email"] ?? "";
        $this->status = (int) ($row["status"] ?? 0);
        $this->website = $row["website"] ?? "";
        $this->linkedinProfile = $row["linkedin_profile"] ?? "";
        $this->backgroundInfo = $row["background_info"] ?? "";
        $this->salesRep = (int) ($row["sales_rep"] ?? 0);
        $this->rating = (float) ($row["rating"] ?? 0);
        $this->projectType = $row["project_type"] ?? "";
        $this->projectDescription = $row["project_description"] ?? "";
        $this->proposalDueDate = $row["proposal_due_date"] ?? "";
        $this->budget = (float) ($row["budget"] ?? 0);
        $this->deliverables = $row["deliverables"] ?? "";
    }
}