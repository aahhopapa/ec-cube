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
use Customize\Form\AnythingDetailType;
use Customize\Repository\AnythingRepository;
use Customize\Repository\AnythingDetailRepository;
use Customize\Entity\Anything;

class AnythingDetailController extends AbstractController
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
     * @var TokenStorageInterface
     */
    protected $tokenStorage;

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

    // @Route("/anything_detail", methods={"GET", "POST"})
    /**
     * 画面.
     * @Route("/anything_detail", name="anything_detail", methods={"GET", "POST"})
     * 
     * @Template("AnythingDetail/index.twig")
     */
    public function testMethod(Request $request)
    {

        $Anythings = $this->anything_Repository->findAll();
        $AnythingDetails = $this->anything_detail_Repository->findAll();
        
        foreach ($Anythings as $Anything) {
            $anythingId = $Anything->getId();
            $AnythingDetails = $this->anything_detail_Repository->findBy(['Anything' => $anythingId]);
            foreach ($AnythingDetails as $AnythingDetail) {
                $Anything->addAnythingDetail($AnythingDetail);
            }
            // dump($AnythingDetails);
        }
        dump($Anythings);
        // $Anything = $this->anything_Repository->findAll();
        // $AnythingDetail->setAnyDetailInput();
        // $AnythingDetail->setAnyDetailSelect();
        
        $builder = $this->formFactory->createNamedBuilder(
            '',
            AnythingDetailType::class,
            null,
            [
                'anythings' => $Anythings,
            ]
        );

        // $builder = $this->formFactory->createBuilder(AnythingDetailType::class, $AnythingDetail);
   
        // $event = new EventArgs(
        //     [
        //         'builder' => $builder,
        //         'anythingDetail' => $AnythingDetail,
        //     ],
        //     $request
        // );
        // $this->eventDispatcher->dispatch(EccubeEvents::FRONT_ANYTHING_INDEX_INITIALIZE, $event);
        
        $form = $builder->getForm();

        $form->handleRequest($request);

        $var1 = $form->isSubmitted();
        if($var1) {
            $var2 = $form->isValid();
        }
        
        if ($var1 && $var2) {
            switch ($request->get('mode')) {
                case 'confirm':
                    dump('in confirm');

                    return $this->render('AnythingDetail/confirm.twig', [
                            'form' => $form->createView(),
                        ]
                    );

                case 'complete':
                    dump('in complete');
                    // $Anything = $this->anything_Repository->newAnything();

                    dump($Anything);
                    $AnythingDetail->setAnything($Anything[0]);

                    $this->entityManager->persist($AnythingDetail);
                    $this->entityManager->flush();

                    return $this->redirectToRoute('any_detail_complete');
            }
        } else {
            return  [
                'form' => $form->createView(),
            ];
        }
    }

    /**
     * 画面.
     * @Route("/anything_detail/complete", name="any_detail_complete", methods={"GET"})
     * @Template("AnythingDetail/complete.twig")
     */
    public function methodComplete()
    {
        return [];
    }
}
