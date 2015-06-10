<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyZimbabweController extends Controller
{

    /**
     * @Route("/zimbabwe.html", name="zimbabwe")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Zimbabwe')->findAll();

        return $this->render(
            'default/zimbabwe.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
