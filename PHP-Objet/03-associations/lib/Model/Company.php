<?php

namespace Insign\Model;


class Company
{
    protected $name;

    /** @var Contact[] */
    protected $contacts = [];

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Company
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Contact[]
     */
    public function getContacts(): array
    {
        return $this->contacts;
    }

    public function addContact(Contact $contact): Company
    {
        $this->contacts[] = $contact;
        return $this;
    }

}