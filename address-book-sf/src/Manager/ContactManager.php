<?php

namespace App\Manager;


use App\Entity\Contact;
use Doctrine\ORM\EntityManager;

class ContactManager
{
    /** @var \Doctrine\ORM\EntityManagerInterface */
    protected $em;

    /**
     * ContactManager constructor.
     * @param \Doctrine\ORM\EntityManagerInterface $em
     */
    public function __construct(\Doctrine\ORM\EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function getAll()
    {
        $repo = $this->em->getRepository(Contact::class);
        return $repo->findAll();
    }

    public function insert(Contact $entity)
    {
        $this->em->persist($entity);
        $this->em->flush();
    }

    public function generateFixtures()
    {
        $contact1 = new Contact();
        $contact1->setFirstName('Jean')->setLastName('Dupont');

        $this->em->persist($contact1);

        $contact2 = new Contact();
        $contact2->setFirstName('Philippe')->setLastName('Martin');

        $this->em->persist($contact2);

        $this->em->flush();
    }
}