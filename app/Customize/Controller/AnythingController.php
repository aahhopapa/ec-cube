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
use Customize\Form\AnythingType;
use Customize\Repository\AnythingRepository;

class AnythingController extends AbstractController
{

    /**
     * @var AnythingRepository
     */
    protected $anythingRepository;

    /**
     * @var TokenStorageInterface
     */
    protected $tokenStorage;

    /**
     * EntryController constructor.
     *
     * @param AnythingRepository $anythingRepository
     */
    public function __construct(
        AnythingRepository $anythingRepository
    ) {
        $this->anythingRepository = $anythingRepository;
    }

    /**
     * 画面.
     * @Route("/anything", name="anything", methods={"GET", "POST"})
     * @Route("/anything", methods={"GET", "POST"})
     * @Template("Anything/index.twig")
     */
    public function testMethod(Request $request)
    {

        /** @var $Customer \Eccube\Entity\Customer */
        $Anything = $this->anythingRepository->newAnything();
        /* @var $builder \Symfony\Component\Form\FormBuilderInterface */
        $builder = $this->formFactory->createBuilder(AnythingType::class, $Anything);
        dump($builder);
        
        // $event = new EventArgs(
        //     [
        //         'builder' => $builder,
        //         'Anything' => $Anything,
        //     ],
        //     $request
        // );

        // $this->eventDispatcher->dispatch(EccubeEvents::FRONT_ANYTHING_INDEX_INITIALIZE, $event);

        /* @var $form \Symfony\Component\Form\FormInterface */
        $form = $builder->getForm();

        $form->handleRequest($request);

        dump($form);



        $var1 = $form->isSubmitted();
        dump($var1);
        if($var1) {
            $var2 = $form->isValid();
            dump($var2);
        }
        // $anyInput = $form->get('any_input');
        
        if ($var1 && $var2) {
            switch ($request->get('mode')) {
                case 'confirm':
                    dump('in confirm');

                    return $this->render('Anything/confirm.twig', [
                            'form' => $form->createView(),
                        ]
                    );

                case 'complete':
                    dump('in complete');

                    // $this->eventDispatcher->dispatch(EccubeEvents::FRONT_ENTRY_INDEX_COMPLETE, $event);
                    return  [
                        'form' => $form->createView(),
                    ];
            }
        } else {
            return  [
                'form' => $form->createView(),
            ];
        }
    }

    /**
     * 画面.
     * @Route("/anything", name="any_complete", methods={"GET", "POST"})
     * @Template("Anything/index.twig")
     */
    public function methodComplete(Request $request)
    {

        /** @var $Customer \Eccube\Entity\Customer */
        $Anything = $this->anythingRepository->newAnything();
        /* @var $builder \Symfony\Component\Form\FormBuilderInterface */
        $builder = $this->formFactory->createBuilder(AnythingType::class, $Anything);
        
        /* @var $form \Symfony\Component\Form\FormInterface */
        $form = $builder->getForm();
        $form->handleRequest($request);

        return  [
            'form' => $form->createView(),
        ];
    }
}
