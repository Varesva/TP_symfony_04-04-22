<?php

namespace App\Controller;

use App\Form\NewsletterType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NewsletterController extends AbstractController
{
    /**
     * @Route("/newsletter", name="app_newsletter")
     */
    public function index(Request $request): Response
    {
        $news_form = $this->createForm(NewsletterType::class);

        $news_form->handleRequest($request);
        if ($news_form->isSubmitted()) {
            $data = $news_form->getData();
            return $this->renderForm('newsletter/submitted.html.twig', [
                'data' => $data,
            ]);
        } else {
            return $this->renderForm('newsletter/index.html.twig', [
                'form' => $news_form,
            ]);
        }
    }
}
