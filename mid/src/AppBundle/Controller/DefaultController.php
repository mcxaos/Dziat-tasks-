<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Products;
use AppBundle\Entity\Types;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $Products = new Products();
        
    
        $repository = $this->getDoctrine()->getRepository('AppBundle\Entity\Types')->FindAll();

        $ProductList = $this->getDoctrine()->getRepository('AppBundle\Entity\Products')->FindAll();

        $form = $this->createFormBuilder($Products)
            ->add('names', TextType::class)
            ->add('prices', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Submit'));
        $form = $form ->getForm();
        return $this->render('index.html.twig', [ 'form' => $form->createView(),'products' => $ProductList]);
  
    }
}
