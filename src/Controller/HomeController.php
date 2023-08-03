<?php 
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;
class HomeController extends AbstractController {
    public function bonjour()
    {
        return new Response ("bonjour");
    }
    public function aurevoir()
    {
       return $this->redirectToRoute('accueil');
    }
    public function redirecttogoogle()
    {
        return $this->redirect('https://google.fr');
    }
}