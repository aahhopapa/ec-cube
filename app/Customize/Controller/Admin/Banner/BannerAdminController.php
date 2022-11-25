<?php

namespace Customize\Controller\Admin\Banner;

use Eccube\Controller\AbstractController;
use Eccube\Event\EventArgs;
use Eccube\Util\CacheUtil;
use Knp\Component\Pager\Paginator;
use Customize\Repository\BannerRepository;
use Customize\Entity\Banner;
use Customize\Form\Admin\BannerType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use Symfony\Component\Routing\RouterInterface;


class BannerAdminController extends AbstractController
{
    /**
     * @var BannerRepository
     */
    protected $bannerRepository;

    /**
     * BannerAdminController constructor.
     *
     * @param BannerRepository $bannerRepository
     */
    public function __construct(
        BannerRepository $bannerRepository
    )
    {
        $this->bannerRepository = $bannerRepository;
    }



    // /**
    //  * ▼　　／
    //  *
    //  * @Route("/%eccube_admin_route%/banner", name="admin_banner")
    //  * @Template("@admin/Banner/index.twig")
    //  */
    // public function index(Request $request)
    // {
    //     $Banner = new Banner();
        
    //     $builder = $this->formFactory
    //     ->createBuilder(BannerType::class, $Banner);
        
    //     $event = new EventArgs(
    //         [
    //             'builder' => $builder,
    //         ],
    //         $request
    //     );
    //     $form = $builder->getForm();
    //     dump($form);
        
    //     $form = $builder->getForm();
        
    //     return [
    //         'form' => $form->createView(),
    //     ];
    // }
    
    
    /**
     * @Route("/%eccube_admin_route%/banner/banner/image/add", name="admin_banner_image_add", methods={"POST"})
     */
    public function addImage(Request $request)
    {
        if (!$request->isXmlHttpRequest()) {
            throw new BadRequestHttpException();
        }
        dump($request);
        $images = $request->files->get('admin_banner');
        
        $allowExtensions = ['gif', 'jpg', 'jpeg', 'png'];
        $files = [];
        if (count($images) > 0) {
            foreach ($images as $img) {
                foreach ($img as $image) {
                    //ファイルフォーマット検証
                    $mimeType = $image->getMimeType();
                    if (0 !== strpos($mimeType, 'image')) {
                        throw new UnsupportedMediaTypeHttpException();
                    }
                    
                    // 拡張子
                    $extension = $image->getClientOriginalExtension();
                    if (!in_array(strtolower($extension), $allowExtensions)) {
                        throw new UnsupportedMediaTypeHttpException();
                    }
                    
                    $filename = date('mdHis').uniqid('_').'.'.$extension;
                    $image->move($this->eccubeConfig['eccube_temp_image_dir'], $filename);
                    $files[] = $filename;
                }
            }
        }
        
        $event = new EventArgs(
            [
                'images' => $images,
                'files' => $files,
            ],
            $request
        );
        // $this->eventDispatcher->dispatch(EccubeEvents::ADMIN_PRODUCT_ADD_IMAGE_COMPLETE, $event);
        $files = $event->getArgument('files');
        
        return $this->json(['files' => $files], 200);
    }
    
    
    
    
    /**
     * ▼　　／
     *
     * @Route("/%eccube_admin_route%/banner/new", name="admin_banner_new")
     * @Route("/%eccube_admin_route%/banner/banner/{id}/edit", requirements={"id" = "\d+"}, name="admin_banner_banner_edit", methods={"GET", "POST"})
     * @Template("@admin/Banner/edit.twig")
     */
    // public function edit(Request $request)
    public function edit(Request $request, $id = null, RouterInterface $router, CacheUtil $cacheUtil)
    {
        //$Banners = $this->bannerRepository->findBy([], ['id' => 'DESC']);
        $Banner = new Banner();
        $builder = $this->formFactory->createBuilder();
        $builder = $this->formFactory
            ->createBuilder(BannerType::class, $Banner);
        $form = $builder->getForm();
    
        // ファイルの登録
        $images = [];
        $BannerImages = $Banner->getBannerImage();
        foreach ($BannerImages as $BannerImage) {
            $images[] = $BannerImage->getFileName();
        }
        $form['images']->setData($images);

        if ('POST' === $request->getMethod()) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                log_info('バナー登録開始', [$id]);
                $Banner = $form->getData();

                $this->entityManager->persist($Banner);
                $this->entityManager->flush();

                // 画像の登録
                $add_images = $form->get('add_images')->getData();
                foreach ($add_images as $add_image) {
                    $BannerImage = new \Customize\Entity\BannerImage();
                    $BannerImage
                        ->setFileName($add_image)
                        ->setBanner($Banner)
                        ->setSortNo(1);
                    $Banner->addBannerImage($BannerImage);
                    $this->entityManager->persist($BannerImage);

                    // 移動
                    $file = new File($this->eccubeConfig['eccube_temp_image_dir'].'/'.$add_image);
                    $file->move($this->eccubeConfig['eccube_save_image_dir']);
                }

                // $Banner->setUpdateDate(new \DateTime());
                $this->entityManager->flush();

                log_info('商品登録完了', [$id]);

                $event = new EventArgs(
                    [
                        'form' => $form,
                        'Banner' => $Banner,
                    ],
                    $request
                );

                $this->addSuccess('admin.common.save_complete', 'admin');

                // if ($returnLink = $form->get('return_link')->getData()) {
                //     try {
                //         // $returnLinkはpathの形式で渡される. pathが存在するかをルータでチェックする.
                //         $pattern = '/^'.preg_quote($request->getBasePath(), '/').'/';
                //         $returnLink = preg_replace($pattern, '', $returnLink);
                //         $result = $router->match($returnLink);
                //         // パラメータのみ抽出
                //         $params = array_filter($result, function ($key) {
                //             return 0 !== \strpos($key, '_');
                //         }, ARRAY_FILTER_USE_KEY);

                //         // pathからurlを再構築してリダイレクト.
                //         return $this->redirectToRoute($result['_route'], $params);
                //     } catch (\Exception $e) {
                //         // マッチしない場合はログ出力してスキップ.
                //         log_warning('URLの形式が不正です。');
                //     }
                // }

                $cacheUtil->clearDoctrineCache();

                // return $this->redirectToRoute('admin_banner_banner_edit', ['id' => $Product->getId()]);
            }
        }

    
        return [
            'name' => 'EC-CUBE',
            'form' => $form->createView(),
        ];

    }


}