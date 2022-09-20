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

use Customize\Entity\ProductStatus;
use Customize\Repository\AnyCategoryRepository;
use Customize\Repository\AnyProductCategoryRepository;
use Customize\Repository\AnyProductClassRepository;
use Customize\Repository\AnyProductRepository;
use Customize\Repository\AnyProductStatusRepository;
use Customize\Repository\AnyProductStockRepository;
use Customize\Repository\AnySaleTypeRepository;

use Eccube\Controller\AbstractController;


class DoctrineController extends AbstractController
{
    
    protected $current;

    /**
     * @var AnythingDetailRepository
     */
    protected $anythingDetailRepository;
    
    /**
     * @var AnythingRepository
     */
    protected $anythingRepository;
    
    /**
     * @var AnyCategoryRepository
     */
    protected $anyCategoryRepository;
    
    /**
     * @var AnyProductCategoryRepository
     */
    protected $anyProductCategoryRepository;
    
    /**
     * @var AnyProductClassRepository
     */
    protected $anyProductClassRepository;
    
    /**
     * @var AnyProductRepository
     */
    protected $anyProductRepository;
    
    /**
     * @var AnyProductStatusRepository
     */
    protected $anyProductStatusRepository;
    
    /**
     * @var AnyProductStockRepository
     */
    protected $anyProductStockRepository;
    
    /**
     * @var AnySaleTypeRepository
     */
    protected $anySaleTypeRepository;

    /**
     * EntryController constructor.
     *
     * @param AnythingRepository $anythingRepository
     * @param AnythingDetailRepository $anythingDetailRepository
     * @param AnyCategoryRepository $anyCategoryRepository
     * @param AnyProductCategoryRepository $anyProductCategoryRepository
     * @param AnyProductClassRepository $anyProductClassRepository
     * @param AnyProductRepository $anyProductRepository
     * @param AnyProductStatusRepository $anyProductStatusRepository
     * @param AnyProductStockRepository $anyProductStockRepository
     * @param AnySaleTypeRepository $anySaleTypeRepository
     */
    public function __construct(
        AnythingRepository $anythingRepository,
        AnythingDetailRepository $anythingDetailRepository,
        AnyCategoryRepository $anyCategoryRepository,
        AnyProductCategoryRepository $anyProductCategoryRepository,
        AnyProductClassRepository $anyProductClassRepository,
        AnyProductRepository $anyProductRepository,
        AnyProductStatusRepository $anyProductStatusRepository,
        AnyProductStockRepository $anyProductStockRepository,
        AnySaleTypeRepository $anySaleTypeRepository
    ) {
        $this->anythingRepository = $anythingRepository;
        $this->anythingDetailRepository = $anythingDetailRepository;
        $this->anyCategoryRepository = $anyCategoryRepository;
        $this->anyProductCategoryRepository = $anyProductCategoryRepository;
        $this->anyProductClassRepository = $anyProductClassRepository;
        $this->anyProductRepository = $anyProductRepository;
        $this->anyProductStatusRepository = $anyProductStatusRepository;
        $this->anyProductStockRepository = $anyProductStockRepository;
        $this->anySaleTypeRepository = $anySaleTypeRepository;
        
        $current = new \DateTime();
        $this->current = $current->format('Y-m-d H:i:s');
    }

    /**
     * @Route("/doctrine/1", methods={"GET"})
     */
    public function doctrineTest1()
    {

        $Anything = new \Customize\Entity\Anything();
        $AnythingDetail_1 = new \Customize\Entity\AnythingDetail();
        $AnythingDetail_1->setAnyDetailInput('di_1'.$this->current);
        $AnythingDetail_1->setAnyDetailSelect('ds_1'.$this->current);
        
        $AnythingDetail_2 = new \Customize\Entity\AnythingDetail();
        $AnythingDetail_2->setAnyDetailInput('di_2'.$this->current);
        $AnythingDetail_2->setAnyDetailSelect('ds_2'.$this->current);
        
        $AnythingDetail_3 = new \Customize\Entity\AnythingDetail();
        $AnythingDetail_3->setAnyDetailInput('di_3'.$this->current);
        $AnythingDetail_3->setAnyDetailSelect('ds_3'.$this->current);

        $Anything->setAnyInput('ai'.$this->current);
        $Anything->setAnySelect('as'.$this->current);
        $Anything->addAnythingDetail($AnythingDetail_1);
        $Anything->addAnythingDetail($AnythingDetail_2);
        $Anything->addAnythingDetail($AnythingDetail_3);

        $this->entityManager->persist($Anything);
        $this->entityManager->flush();

        return new Response(
            '<html><body>doctrine test 1</body></html>'
        );
    }

    /**
     * @Route("/doctrine/2", methods={"GET"})
     */
    public function doctrineTest2()
    {

        $AnyProduct = new \Customize\Entity\AnyProduct();
        $AnyProduct->setAnyInput('ai'.$this->current);
        $AnyProduct->setAnySelect('as'.$this->current);
        
        $AnyProductClass = new \Customize\Entity\AnyProductClass();
        $AnyProductStatus = $this->anyProductStatusRepository->find(AnyProductStatus::DISPLAY_HIDE);
        $AnyProduct
            ->addProductClass($ProductClass)
            ->setStatus($ProductStatus);
        $AnyProductClass->setAnyProduct($AnyProduct);
        





        $AnyCategory = new \Customize\Entity\AnyCategory();
        $AnyProductCategory_1 = new \Customize\Entity\AnyProductCategory();
        $AnyProductCategory_1->setAnyProductId($AnyProduct->getId());
        $AnyProductCategory_1->setAnyCategory($AnyCategory->getId());

        $AnyProduct->addAnyProductClass($AnyProductClass);
        $AnyProduct->addAnyProductCategory($AnyProductCategory_1);
        

        $this->entityManager->persist($AnyProduct);
        $this->entityManager->flush();

        return new Response(
            '<html><body>doctrine test 2</body></html>'
        );
    }

}