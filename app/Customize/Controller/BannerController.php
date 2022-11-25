<?php

namespace Customize\Controller;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception as HttpException;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Eccube\Controller\AbstractController;
use Customize\Form\BannerType;
use Customize\Repository\BannerRepository;

class BannerController extends AbstractController
{

    /**
     * @var Repository
     */
    protected $bannerRepository;

    /**
     * @var TokenStorageInterface
     */
    protected $tokenStorage;

    /**
     * EntryController constructor.
     *
     * @param BannerRepository $bannerRepository
     */
    public function __construct(
        BannerRepository $bannerRepository
    ) {
        $this->bannerRepository = $bannerRepository;
    }

    // @Route("/banner", methods={"GET", "POST"})
    /**
     * 画面.
     * @Route("/banner", name="banner", methods={"GET", "POST"})
     * 
     * @Template("Banner/index.twig")
     */
    public function testMethod(Request $request)
    {
        return [];
    }

    /**
     * 画面.
     * @Route("/banner/complete", name="banner_complete", methods={"GET"})
     * @Template("Banner/complete.twig")
     */
    public function methodComplete()
    {
        return [];
    }
}
