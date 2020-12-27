<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\TipoProducto;


class StandarController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('standar/index.html.twig', [
            'controller_name' => 'Mauris',
        ]);
    }

    /**
    *	@Route("/pagina2/{nombre}", name="pagina2")
    */
    public function pagina2($nombre){
    		return $this->render('standar/pagina2.html.twig', array('param1' => $nombre));
    }

    /**
    *   @Route("/pedirdatos", name="pedirDatos")
    */
    public  function pedirDatos()
    {

        $entityManager = $this->getDoctrine()->getManager();
        $producto=new TipoProducto("Usado", "true");
        
        //$producto->setEstado("Nuevo");
        //$producto->setIsActivo("true");

        $entityManager->persist($producto);
        $entityManager->flush();

        return $this->render('standar/pedirDatos.html.twig');
    }
}
