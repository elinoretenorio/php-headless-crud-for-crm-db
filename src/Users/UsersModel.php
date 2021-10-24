<?php

declare(strict_types=1);

namespace CRM\Users;

use JsonSerializable;

class UsersModel implements JsonSerializable
{
    private int $id;
    private string $nameTitle;
    private string $nameFirst;
    private string $nameMiddle;
    private string $nameLast;
    private string $email;
    private string $password;
    private int $userRoles;
    private int $userStatus;

    public function __construct(UsersDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->nameTitle = $dto->nameTitle;
        $this->nameFirst = $dto->nameFirst;
        $this->nameMiddle = $dto->nameMiddle;
        $this->nameLast = $dto->nameLast;
        $this->email = $dto->email;
        $this->password = $dto->password;
        $this->userRoles = $dto->userRoles;
        $this->userStatus = $dto->userStatus;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getNameTitle(): string
    {
        return $this->nameTitle;
    }

    public function setNameTitle(string $nameTitle): void
    {
        $this->nameTitle = $nameTitle;
    }

    public function getNameFirst(): string
    {
        return $this->nameFirst;
    }

    public function setNameFirst(string $nameFirst): void
    {
        $this->nameFirst = $nameFirst;
    }

    public function getNameMiddle(): string
    {
        return $this->nameMiddle;
    }

    public function setNameMiddle(string $nameMiddle): void
    {
        $this->nameMiddle = $nameMiddle;
    }

    public function getNameLast(): string
    {
        return $this->nameLast;
    }

    public function setNameLast(string $nameLast): void
    {
        $this->nameLast = $nameLast;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getUserRoles(): int
    {
        return $this->userRoles;
    }

    public function setUserRoles(int $userRoles): void
    {
        $this->userRoles = $userRoles;
    }

    public function getUserStatus(): int
    {
        return $this->userStatus;
    }

    public function setUserStatus(int $userStatus): void
    {
        $this->userStatus = $userStatus;
    }

    public function toDto(): UsersDto
    {
        $dto = new UsersDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->nameTitle = $this->nameTitle ?? "";
        $dto->nameFirst = $this->nameFirst ?? "";
        $dto->nameMiddle = $this->nameMiddle ?? "";
        $dto->nameLast = $this->nameLast ?? "";
        $dto->email = $this->email ?? "";
        $dto->password = $this->password ?? "";
        $dto->userRoles = (int) ($this->userRoles ?? 0);
        $dto->userStatus = (int) ($this->userStatus ?? 0);

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "name_title" => $this->nameTitle,
            "name_first" => $this->nameFirst,
            "name_middle" => $this->nameMiddle,
            "name_last" => $this->nameLast,
            "email" => $this->email,
            "password" => $this->password,
            "user_roles" => $this->userRoles,
            "user_status" => $this->userStatus,
        ];
    }
}