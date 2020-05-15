<?php

namespace App\Controller;

use App\Form\TestType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StartController extends AbstractController
{
    /**
     * @Route("/", name="start")
     */
    public function index()
    {
        $form1 = $this->createForm(TestType::class);
        $form2 = $this->createForm(TestType::class);
        return $this->render('start/index.html.twig', [
            'controller_name' => 'StartController',
            'form1' => $form1->createView(),
            'form2' => $form2->createView()
        ]);
    }
}
