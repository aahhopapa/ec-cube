<?php

namespace Customize\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Eccube\Controller\AbstractController;
use Customize\Form\StoreEntryType;
use Customize\Repository\StoreEntryRepository;


class StoreEntryController extends AbstractController
{

    /**
     * @var StoreEntryRepository
     */
    protected $storeEntryRepository;

    /**
     * EntryController constructor.
     *
     * @param StoreEntryRepository $storeEntryRepository
     */
    public function __construct(
        StoreEntryRepository $storeEntryRepository
    ) {
        $this->storeEntryRepository = $storeEntryRepository;
    }

    /**
     * 店舗登録画面.
     * @Method("GET")
     * @Route("/store_entry", name="store_entry", methods={"GET", "POST"})
     * @Template("StoreEntry/index.twig")
     */
    public function testMethod()
    {
        /** @var $Customer \Eccube\Entity\Customer */
        $Store = $this->storeEntryRepository->newStore();

        /* @var $builder \Symfony\Component\Form\FormBuilderInterface */
        $builder = $this->formFactory->createBuilder(StoreEntryType::class, $Store);

        /* @var $form \Symfony\Component\Form\FormInterface */
        $form = $builder->getForm();

        return  [
            'form' => $form->createView(),
        ];
    }

}
