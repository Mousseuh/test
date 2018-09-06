<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
/**
 * Description of TestController
 *
 * @author etudiant
 */
class TestController extends Controller {
    /**
     * @Route("/")
     * @return Response
     */
    public function indexAction() {
       $denominateur = new \stdClass();
       $denominateur->v1 = "harry";
       $denominateur->v2 = "potter";
       
        return $this->render('testUtilisateur/index.html.twig',['unevariable'=>$denominateur] );
    }
    
    /**
     * @Route("contact")
     * @return Response
     */
    public function contactAction() {
        return $this->render('testUtilisateur/contact.html.twig' );
    }
}
