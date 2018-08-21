<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 20/08/2018
 * Time: 14:38
 */

namespace Insign\Finance;


class Owner
{
    protected $firstName;

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     * @return Owner
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }


}