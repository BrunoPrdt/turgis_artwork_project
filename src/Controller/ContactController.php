<?php
declare(strict_types=1);

/* Le code de cette page fut réalisé par Bruno Prédot - 11/2019
created by Prédot Bruno - 11/2019 */

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Notification\ContactNotification;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController{
    /**
     * @Route("Contact", name="turgis.contact")
     * @param Request $request
     * @param ContactNotification $contactNotification
     * @return Response
     */
    public function contactUs(Request $request, ContactNotification $contactNotification): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()){
            //$contactNotification->notify($contact);
            $this->addFlash('success', 'Votre message a bien été envoyé.');
            return $this->redirectToRoute('turgis.contact');
        }

        return $this->render('pages/contact.html.twig', [
            'current_menu_contact' => 'active',
            'contact' => $contact,
            'form' => $form->createView()
        ]);
    }
}