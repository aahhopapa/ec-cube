<?php

namespace Customize\Controller;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number01", methods={"GET"}, name="lucky_number01")
     */
    public function lucky_number01()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

    /**
     * @Route("/lucky/number02", methods={"GET"})
     */
    public function testMethod()
    {
        //return $this->redirect('number01');
        //return $this->redirectToRoute('lucky_number01');
        return $this->redirectToRoute('lucky_number03', ['max' => 10]);
    }

    /**
     * @Route("/lucky/number03/{max}", methods={"GET"}, name="lucky_number03")
     */
    public function numberRoute(int $max, LoggerInterface $logger): Response
    {
        $logger->info('We are logging!');

        return new Response(
            '<html><body>Lucky number: '.$max.'</body></html>'
        );
    }
}