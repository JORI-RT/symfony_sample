<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Psr\Log\LoggerInterface;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number/{max}")
     */
    public function number(int $max,LoggerInterface $logger ): Response
    {
        $number = random_int(0, $max);
        $logger->info("we are logged");

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
}