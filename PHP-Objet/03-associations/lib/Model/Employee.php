<?php

namespace Insign\Model;


class Employee extends Contact
{
    protected $ssnNumber;

    /**
     * @return mixed
     */
    public function getSsnNumber()
    {
        return $this->ssnNumber;
    }

    /**
     * @param mixed $ssnNumber
     * @return Employee
     */
    public function setSsnNumber($ssnNumber)
    {
        $this->ssnNumber = $ssnNumber;
        return $this;
    }


}