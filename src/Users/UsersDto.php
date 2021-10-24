<?php

declare(strict_types=1);

namespace CRM\Users;

class UsersDto 
{
    public int $id;
    public string $nameTitle;
    public string $nameFirst;
    public string $nameMiddle;
    public string $nameLast;
    public string $email;
    public string $password;
    public int $userRoles;
    public int $userStatus;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->nameTitle = $row["name_title"] ?? "";
        $this->nameFirst = $row["name_first"] ?? "";
        $this->nameMiddle = $row["name_middle"] ?? "";
        $this->nameLast = $row["name_last"] ?? "";
        $this->email = $row["email"] ?? "";
        $this->password = $row["password"] ?? "";
        $this->userRoles = (int) ($row["user_roles"] ?? 0);
        $this->userStatus = (int) ($row["user_status"] ?? 0);
    }
}