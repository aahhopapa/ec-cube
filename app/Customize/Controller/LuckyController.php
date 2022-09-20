<?php

namespace Customize\Controller;
use Psr\Log\LoggerInterface;
use Symfony\Component\Validator\Constraints\DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Customize\Repository\AnythingRepository;
use Customize\Repository\AnythingDetailRepository;

use Eccube\Controller\AbstractController;


class LuckyController extends AbstractController
{
    
    /**
     * @var AnythingDetailRepository
     */
    protected $anything_detail_Repository;
    
    /**
     * @var AnythingRepository
     */
    protected $anything_Repository;

    /**
     * EntryController constructor.
     *
     * @param AnythingRepository $anything_Repository
     * @param AnythingDetailRepository $anything_detail_Repository
     */
    public function __construct(
        AnythingRepository $anything_Repository,
        AnythingDetailRepository $anything_detail_Repository
    ) {
        $this->anything_Repository = $anything_Repository;
        $this->anything_detail_Repository = $anything_detail_Repository;
    }

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