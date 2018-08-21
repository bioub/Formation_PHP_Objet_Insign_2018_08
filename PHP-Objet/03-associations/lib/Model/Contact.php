<?php

namespace Insign\Model;

class Contact
{
    /** @var string */
    protected $firstName;

    /** @var string */
    protected $lastName;

    /** @var Company */
    protected $company;

    // Pas de constructeur dans les Entity/Model/POPO

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return Contact
     */
    public function setFirstName(string $firstName): Contact
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return Contact
     */
    public function setLastName(string $lastName): Contact
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return Company
     */
    public function getCompany(): Company
    {
        return $this->company;
    }

    /**
     * @param Company $company
     * @return Contact
     */
    public function setCompany(Company $company): Contact
    {
        $this->company = $company;
        return $this;
    }

    public function __toString()
    {
        return "$this->firstName $this->lastName";
    }

}