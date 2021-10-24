<?php

declare(strict_types=1);

namespace CRM\Contact;

use CRM\Database\IDatabase;
use CRM\Database\DatabaseException;

class ContactRepository implements IContactRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(ContactDto $dto): int
    {
        $sql = "INSERT INTO `contact` (`contact_title`, `contact_first`, `contact_middle`, `contact_last`, `lead_referral_source`, `date_of_initial_contact`, `title`, `company`, `industry`, `address`, `address_street_1`, `address_street_2`, `address_city`, `address_state`, `address_zip`, `address_country`, `phone`, `email`, `status`, `website`, `linkedin_profile`, `background_info`, `sales_rep`, `rating`, `project_type`, `project_description`, `proposal_due_date`, `budget`, `deliverables`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->contactTitle,
                $dto->contactFirst,
                $dto->contactMiddle,
                $dto->contactLast,
                $dto->leadReferralSource,
                $dto->dateOfInitialContact,
                $dto->title,
                $dto->company,
                $dto->industry,
                $dto->address,
                $dto->addressStreet1,
                $dto->addressStreet2,
                $dto->addressCity,
                $dto->addressState,
                $dto->addressZip,
                $dto->addressCountry,
                $dto->phone,
                $dto->email,
                $dto->status,
                $dto->website,
                $dto->linkedinProfile,
                $dto->backgroundInfo,
                $dto->salesRep,
                $dto->rating,
                $dto->projectType,
                $dto->projectDescription,
                $dto->proposalDueDate,
                $dto->budget,
                $dto->deliverables
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(ContactDto $dto): int
    {
        $sql = "UPDATE `contact` SET `contact_title` = ?, `contact_first` = ?, `contact_middle` = ?, `contact_last` = ?, `lead_referral_source` = ?, `date_of_initial_contact` = ?, `title` = ?, `company` = ?, `industry` = ?, `address` = ?, `address_street_1` = ?, `address_street_2` = ?, `address_city` = ?, `address_state` = ?, `address_zip` = ?, `address_country` = ?, `phone` = ?, `email` = ?, `status` = ?, `website` = ?, `linkedin_profile` = ?, `background_info` = ?, `sales_rep` = ?, `rating` = ?, `project_type` = ?, `project_description` = ?, `proposal_due_date` = ?, `budget` = ?, `deliverables` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->contactTitle,
                $dto->contactFirst,
                $dto->contactMiddle,
                $dto->contactLast,
                $dto->leadReferralSource,
                $dto->dateOfInitialContact,
                $dto->title,
                $dto->company,
                $dto->industry,
                $dto->address,
                $dto->addressStreet1,
                $dto->addressStreet2,
                $dto->addressCity,
                $dto->addressState,
                $dto->addressZip,
                $dto->addressCountry,
                $dto->phone,
                $dto->email,
                $dto->status,
                $dto->website,
                $dto->linkedinProfile,
                $dto->backgroundInfo,
                $dto->salesRep,
                $dto->rating,
                $dto->projectType,
                $dto->projectDescription,
                $dto->proposalDueDate,
                $dto->budget,
                $dto->deliverables,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?ContactDto
    {
        $sql = "SELECT `id`, `contact_title`, `contact_first`, `contact_middle`, `contact_last`, `lead_referral_source`, `date_of_initial_contact`, `title`, `company`, `industry`, `address`, `address_street_1`, `address_street_2`, `address_city`, `address_state`, `address_zip`, `address_country`, `phone`, `email`, `status`, `website`, `linkedin_profile`, `background_info`, `sales_rep`, `rating`, `project_type`, `project_description`, `proposal_due_date`, `budget`, `deliverables`
                FROM `contact` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new ContactDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `contact_title`, `contact_first`, `contact_middle`, `contact_last`, `lead_referral_source`, `date_of_initial_contact`, `title`, `company`, `industry`, `address`, `address_street_1`, `address_street_2`, `address_city`, `address_state`, `address_zip`, `address_country`, `phone`, `email`, `status`, `website`, `linkedin_profile`, `background_info`, `sales_rep`, `rating`, `project_type`, `project_description`, `proposal_due_date`, `budget`, `deliverables`
                FROM `contact`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new ContactDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `contact` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}