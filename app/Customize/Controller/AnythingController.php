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

    // @Route("/anything", methods={"GET", "POST"})
    /**
     * 画面.
     * @Route("/anything", name="anything", methods={"GET", "POST"})
     * 
     * @Template("Anything/index.twig")
     */
    public function testMethod(Request $request)
    {

        $Anything = $this->anythingRepository->newAnything();
        $builder = $this->formFactory->createBuilder(AnythingType::class, $Anything);
        
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

                    return $this->render('Anything/confirm.twig', [
                            'form' => $form->createView(),
                        ]
                    );

                case 'complete':
                    dump('in complete');

                    $this->entityManager->persist($Anything);
                    $this->entityManager->flush();

                    return $this->redirectToRoute('any_complete');
            }
        } else {
            return  [
                'form' => $form->createView(),
            ];
        }
    }

    /**
     * 画面.
     * @Route("/anything/complete", name="any_complete", methods={"GET"})
     * @Template("Anything/complete.twig")
     */
    public function methodComplete()
    {
        return [];
    }
}
