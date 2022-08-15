<?php

namespace App\Models;

class UserModel
{

    private string $name;
    private string $surname;
    private string $email;
    private int $id;

    public function __construct(int $id, string $name, string $surname, string $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getAll(): array
    {

        return [$this->getId(), $this->getName(), $this->getSurname(), $this->getEmail()];
    }
}
