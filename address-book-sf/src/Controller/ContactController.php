<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Manager\ContactManager;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /** @var ContactManager */
    protected $manager;

    /**
     * ContactController constructor.
     * @param ContactManager $manager
     */
    public function __construct(ContactManager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * @Route("/contact")
     */
    public function index()
    {
        $contacts = $this->manager->getAll();

        return $this->render('contact/index.html.twig', [
            'contacts' => $contacts,
        ]);
    }

    /**
     * @Route("/contact/add")
     */
    public function add(\Symfony\Component\HttpFoundation\Request $request)
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entity = $form->getData();
            $this->manager->insert($entity);

            return $this->redirectToRoute('app_contact_index');
        }

        return $this->render('contact/add.html.twig', [
            'contact_form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/contact/{id}", requirements={"id": "[1-9]\d*"})
     */
    public function show($id)
    {
        return $this->render('contact/show.html.twig', [
            'contact_id' => $id,
        ]);
    }

}
