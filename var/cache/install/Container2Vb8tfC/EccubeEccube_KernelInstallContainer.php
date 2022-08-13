<?php

namespace Container2Vb8tfC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class EccubeEccube_KernelInstallContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $targetDir;
    private $parameters = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'Eccube\\Common\\EccubeConfig' => 'getEccubeConfigService',
            'Eccube\\Repository\\PluginRepository' => 'getPluginRepositoryService',
            'data_collector.cache' => 'getDataCollector_CacheService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'http_kernel' => 'getHttpKernelService',
            'profiler' => 'getProfilerService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'session' => 'getSessionService',
            'state_machine.order' => 'getStateMachine_OrderService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'validator' => 'getValidatorService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
        ];
        $this->fileMap = [
            'Eccube\\Controller\\AbstractController' => 'getAbstractControllerService.php',
            'Eccube\\Controller\\AbstractShoppingController' => 'getAbstractShoppingControllerService.php',
            'Eccube\\Controller\\Admin\\AbstractCsvImportController' => 'getAbstractCsvImportControllerService.php',
            'Eccube\\Controller\\Admin\\AdminController' => 'getAdminControllerService.php',
            'Eccube\\Controller\\Admin\\Content\\BlockController' => 'getBlockControllerService.php',
            'Eccube\\Controller\\Admin\\Content\\CacheController' => 'getCacheControllerService.php',
            'Eccube\\Controller\\Admin\\Content\\CssController' => 'getCssControllerService.php',
            'Eccube\\Controller\\Admin\\Content\\FileController' => 'getFileControllerService.php',
            'Eccube\\Controller\\Admin\\Content\\JsController' => 'getJsControllerService.php',
            'Eccube\\Controller\\Admin\\Content\\LayoutController' => 'getLayoutControllerService.php',
            'Eccube\\Controller\\Admin\\Content\\MaintenanceController' => 'getMaintenanceControllerService.php',
            'Eccube\\Controller\\Admin\\Content\\NewsController' => 'getNewsControllerService.php',
            'Eccube\\Controller\\Admin\\Content\\PageController' => 'getPageControllerService.php',
            'Eccube\\Controller\\Admin\\Customer\\CustomerController' => 'getCustomerControllerService.php',
            'Eccube\\Controller\\Admin\\Customer\\CustomerDeliveryEditController' => 'getCustomerDeliveryEditControllerService.php',
            'Eccube\\Controller\\Admin\\Customer\\CustomerEditController' => 'getCustomerEditControllerService.php',
            'Eccube\\Controller\\Admin\\Order\\CsvImportController' => 'getCsvImportControllerService.php',
            'Eccube\\Controller\\Admin\\Order\\EditController' => 'getEditControllerService.php',
            'Eccube\\Controller\\Admin\\Order\\MailController' => 'getMailControllerService.php',
            'Eccube\\Controller\\Admin\\Order\\OrderController' => 'getOrderControllerService.php',
            'Eccube\\Controller\\Admin\\Order\\ShippingController' => 'getShippingControllerService.php',
            'Eccube\\Controller\\Admin\\Product\\CategoryController' => 'getCategoryControllerService.php',
            'Eccube\\Controller\\Admin\\Product\\ClassCategoryController' => 'getClassCategoryControllerService.php',
            'Eccube\\Controller\\Admin\\Product\\ClassNameController' => 'getClassNameControllerService.php',
            'Eccube\\Controller\\Admin\\Product\\CsvImportController' => 'getCsvImportController2Service.php',
            'Eccube\\Controller\\Admin\\Product\\ProductClassController' => 'getProductClassControllerService.php',
            'Eccube\\Controller\\Admin\\Product\\ProductController' => 'getProductControllerService.php',
            'Eccube\\Controller\\Admin\\Product\\TagController' => 'getTagControllerService.php',
            'Eccube\\Controller\\Admin\\Setting\\Shop\\CsvController' => 'getCsvControllerService.php',
            'Eccube\\Controller\\Admin\\Setting\\Shop\\DeliveryController' => 'getDeliveryControllerService.php',
            'Eccube\\Controller\\Admin\\Setting\\Shop\\MailController' => 'getMailController2Service.php',
            'Eccube\\Controller\\Admin\\Setting\\Shop\\OrderStatusController' => 'getOrderStatusControllerService.php',
            'Eccube\\Controller\\Admin\\Setting\\Shop\\PaymentController' => 'getPaymentControllerService.php',
            'Eccube\\Controller\\Admin\\Setting\\Shop\\ShopController' => 'getShopControllerService.php',
            'Eccube\\Controller\\Admin\\Setting\\Shop\\TaxRuleController' => 'getTaxRuleControllerService.php',
            'Eccube\\Controller\\Admin\\Setting\\System\\AuthorityController' => 'getAuthorityControllerService.php',
            'Eccube\\Controller\\Admin\\Setting\\System\\LogController' => 'getLogControllerService.php',
            'Eccube\\Controller\\Admin\\Setting\\System\\LoginHistoryController' => 'getLoginHistoryControllerService.php',
            'Eccube\\Controller\\Admin\\Setting\\System\\MasterdataController' => 'getMasterdataControllerService.php',
            'Eccube\\Controller\\Admin\\Setting\\System\\MemberController' => 'getMemberControllerService.php',
            'Eccube\\Controller\\Admin\\Setting\\System\\SecurityController' => 'getSecurityControllerService.php',
            'Eccube\\Controller\\Admin\\Setting\\System\\SystemController' => 'getSystemControllerService.php',
            'Eccube\\Controller\\Admin\\Setting\\System\\TwoFactorAuthController' => 'getTwoFactorAuthControllerService.php',
            'Eccube\\Controller\\Admin\\Store\\OwnerStoreController' => 'getOwnerStoreControllerService.php',
            'Eccube\\Controller\\Admin\\Store\\PluginController' => 'getPluginControllerService.php',
            'Eccube\\Controller\\Admin\\Store\\TemplateController' => 'getTemplateControllerService.php',
            'Eccube\\Controller\\Block\\CartController' => 'getCartControllerService.php',
            'Eccube\\Controller\\Block\\SearchProductController' => 'getSearchProductControllerService.php',
            'Eccube\\Controller\\CartController' => 'getCartController2Service.php',
            'Eccube\\Controller\\ContactController' => 'getContactControllerService.php',
            'Eccube\\Controller\\EntryController' => 'getEntryControllerService.php',
            'Eccube\\Controller\\ForgotController' => 'getForgotControllerService.php',
            'Eccube\\Controller\\HelpController' => 'getHelpControllerService.php',
            'Eccube\\Controller\\InstallPluginController' => 'getInstallPluginControllerService.php',
            'Eccube\\Controller\\Install\\InstallController' => 'getInstallControllerService.php',
            'Eccube\\Controller\\Mypage\\ChangeController' => 'getChangeControllerService.php',
            'Eccube\\Controller\\Mypage\\DeliveryController' => 'getDeliveryController2Service.php',
            'Eccube\\Controller\\Mypage\\MypageController' => 'getMypageControllerService.php',
            'Eccube\\Controller\\Mypage\\WithdrawController' => 'getWithdrawControllerService.php',
            'Eccube\\Controller\\NonMemberShoppingController' => 'getNonMemberShoppingControllerService.php',
            'Eccube\\Controller\\ProductController' => 'getProductController2Service.php',
            'Eccube\\Controller\\ShippingMultipleController' => 'getShippingMultipleControllerService.php',
            'Eccube\\Controller\\ShoppingController' => 'getShoppingControllerService.php',
            'Eccube\\Controller\\SitemapController' => 'getSitemapControllerService.php',
            'Eccube\\Controller\\TopController' => 'getTopControllerService.php',
            'Eccube\\Controller\\UserDataController' => 'getUserDataControllerService.php',
            'Eccube\\DependencyInjection\\Facade\\AnnotationReaderFacade' => 'getAnnotationReaderFacadeService.php',
            'Eccube\\Service\\Composer\\ComposerApiService' => 'getComposerApiServiceService.php',
            'Eccube\\Service\\Payment\\Method\\Cash' => 'getCashService.php',
            'Eccube\\Service\\PluginService' => 'getPluginServiceService.php',
            'Eccube\\Service\\SystemService' => 'getSystemServiceService.php',
            'Eccube\\Service\\TaxRuleService' => 'getTaxRuleServiceService.php',
            'SunCat\\MobileDetectBundle\\DeviceDetector\\MobileDetector' => 'getMobileDetectorService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateController2Service.php',
            'Trikoder\\Bundle\\OAuth2Bundle\\Controller\\AuthorizationController' => 'getAuthorizationControllerService.php',
            'Trikoder\\Bundle\\OAuth2Bundle\\Controller\\TokenController' => 'getTokenControllerService.php',
            'Trikoder\\Bundle\\OAuth2Bundle\\Manager\\ClientManagerInterface' => 'getClientManagerInterfaceService.php',
            'cache.app' => 'getCache_AppService.php',
            'cache.app_clearer' => 'getCache_AppClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system' => 'getCache_SystemService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'console.command.public_alias.Eccube\\Command\\UpdateSchemaDoctrineCommand' => 'getUpdateSchemaDoctrineCommandService.php',
            'console.command.public_alias.doctrine_cache.contains_command' => 'getConsole_Command_PublicAlias_DoctrineCache_ContainsCommandService.php',
            'console.command.public_alias.doctrine_cache.delete_command' => 'getConsole_Command_PublicAlias_DoctrineCache_DeleteCommandService.php',
            'console.command.public_alias.doctrine_cache.flush_command' => 'getConsole_Command_PublicAlias_DoctrineCache_FlushCommandService.php',
            'console.command.public_alias.doctrine_cache.stats_command' => 'getConsole_Command_PublicAlias_DoctrineCache_StatsCommandService.php',
            'console.command.public_alias.doctrine_migrations.diff_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_DiffCommandService.php',
            'console.command.public_alias.doctrine_migrations.execute_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_ExecuteCommandService.php',
            'console.command.public_alias.doctrine_migrations.generate_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_GenerateCommandService.php',
            'console.command.public_alias.doctrine_migrations.latest_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_LatestCommandService.php',
            'console.command.public_alias.doctrine_migrations.migrate_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_MigrateCommandService.php',
            'console.command.public_alias.doctrine_migrations.status_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_StatusCommandService.php',
            'console.command.public_alias.doctrine_migrations.version_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_VersionCommandService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService.php',
            'eccube.logger' => 'getEccube_LoggerService.php',
            'error_controller' => 'getErrorControllerService.php',
            'filesystem' => 'getFilesystemService.php',
            'form.factory' => 'getForm_FactoryService.php',
            'form.type.file' => 'getForm_Type_FileService.php',
            'knp_paginator' => 'getKnpPaginatorService.php',
            'monolog.logger.admin' => 'getMonolog_Logger_AdminService.php',
            'monolog.logger.front' => 'getMonolog_Logger_FrontService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService.php',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService.php',
            'serializer' => 'getSerializerService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService.php',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService.php',
            'swiftmailer.transport' => 'getSwiftmailer_TransportService.php',
            'templating' => 'getTemplatingService.php',
            'templating.loader' => 'getTemplating_LoaderService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService.php',
            'web_profiler.controller.exception_panel' => 'getWebProfiler_Controller_ExceptionPanelService.php',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService.php',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService.php',
        ];
        $this->aliases = [
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'mailer' => 'swiftmailer.mailer.default',
        ];

        $this->privates['service_container'] = function () {
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'HttpKernelInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'KernelInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'RebootableInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'TerminableInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Kernel.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Kernel'.\DIRECTORY_SEPARATOR.'MicroKernelTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Kernel.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'event-dispatcher-contracts'.\DIRECTORY_SEPARATOR.'EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'event-dispatcher'.\DIRECTORY_SEPARATOR.'EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'event-dispatcher'.\DIRECTORY_SEPARATOR.'EventDispatcher.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Event'.\DIRECTORY_SEPARATOR.'EventDispatcherWrapper.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'service-contracts'.\DIRECTORY_SEPARATOR.'ResetInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'DataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'DataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'EccubeDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Query'.\DIRECTORY_SEPARATOR.'Queries.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectRepository.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'collections'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Collections'.\DIRECTORY_SEPARATOR.'Selectable.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityRepository.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepositoryInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepository.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'AbstractRepository.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'BaseInfoRepository.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'CartRepository.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'OrderRepository.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ProductClassRepository.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ProductRepository.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'ExtensionInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'AbstractExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'EccubeExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'TaxExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'EccubeConfig.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'SessionProcessor.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'TokenProcessor.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'ProcessorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'ResettableInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'UidProcessor.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'IntrospectionProcessor.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'WebProcessor.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'event-dispatcher'.\DIRECTORY_SEPARATOR.'EventSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'monolog-bridge'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'WebProcessor.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerNameParser.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'ControllerMetadata'.\DIRECTORY_SEPARATOR.'ArgumentMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'ControllerMetadata'.\DIRECTORY_SEPARATOR.'ArgumentMetadataFactory.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ResponseListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'StreamedResponseListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'LocaleListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ValidateRequestListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ResolveControllerNameSubscriber.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ErrorListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'HttpKernel.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerResolverInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerResolver.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ContainerControllerResolver.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerResolver.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolverInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'RequestStack.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'UriSigner.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'ConfigCacheFactoryInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'ResourceCheckerConfigCacheFactory.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'LocaleAwareListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'CacheItemPoolInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'AdapterInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache-contracts'.\DIRECTORY_SEPARATOR.'CacheInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'log'.\DIRECTORY_SEPARATOR.'Psr'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'LoggerAwareInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'ResettableInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'log'.\DIRECTORY_SEPARATOR.'Psr'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'LoggerAwareTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Traits'.\DIRECTORY_SEPARATOR.'AbstractTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Traits'.\DIRECTORY_SEPARATOR.'AbstractAdapterTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache-contracts'.\DIRECTORY_SEPARATOR.'CacheTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Traits'.\DIRECTORY_SEPARATOR.'ContractsTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'AbstractAdapter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'SessionInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'Session.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'SessionStorageInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'NativeSessionStorage.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'AbstractSessionHandler.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'StrictSessionHandler.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'SameSiteNoneCompatSessionHandler.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'NativeFileSessionHandler.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'SessionBagInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'MetadataBag.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'AbstractSessionListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'SessionListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'container'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ContainerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'service-contracts'.\DIRECTORY_SEPARATOR.'ServiceProviderInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'service-contracts'.\DIRECTORY_SEPARATOR.'ServiceLocatorTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ServiceLocator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Csrf'.\DIRECTORY_SEPARATOR.'TokenStorage'.\DIRECTORY_SEPARATOR.'TokenStorageInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Csrf'.\DIRECTORY_SEPARATOR.'TokenStorage'.\DIRECTORY_SEPARATOR.'ClearableTokenStorageInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Csrf'.\DIRECTORY_SEPARATOR.'TokenStorage'.\DIRECTORY_SEPARATOR.'SessionTokenStorage.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Csrf'.\DIRECTORY_SEPARATOR.'CsrfTokenManagerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Csrf'.\DIRECTORY_SEPARATOR.'CsrfTokenManager.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Csrf'.\DIRECTORY_SEPARATOR.'TokenGenerator'.\DIRECTORY_SEPARATOR.'TokenGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Csrf'.\DIRECTORY_SEPARATOR.'TokenGenerator'.\DIRECTORY_SEPARATOR.'UriSafeTokenGenerator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ValidatorBuilderInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ValidatorBuilder.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'Validation.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidatorFactoryInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ContainerConstraintValidatorFactory.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation-contracts'.\DIRECTORY_SEPARATOR.'LocaleAwareInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'TranslatorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation-contracts'.\DIRECTORY_SEPARATOR.'TranslatorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'LegacyTranslatorProxy.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'PruneableInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Traits'.\DIRECTORY_SEPARATOR.'ProxyTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Traits'.\DIRECTORY_SEPARATOR.'PhpArrayTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'PhpArrayAdapter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ObjectInitializerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'DoctrineInitializer.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'AutoMappingTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'DoctrineLoader.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'HttpCache'.\DIRECTORY_SEPARATOR.'SurrogateInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'HttpCache'.\DIRECTORY_SEPARATOR.'AbstractSurrogate.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'HttpCache'.\DIRECTORY_SEPARATOR.'Esi.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'SurrogateListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'FragmentListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'TranslatorBagInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Translator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'WarmableInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Translator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Formatter'.\DIRECTORY_SEPARATOR.'MessageFormatterInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Formatter'.\DIRECTORY_SEPARATOR.'IntlFormatterInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Formatter'.\DIRECTORY_SEPARATOR.'ChoiceMessageFormatterInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Formatter'.\DIRECTORY_SEPARATOR.'MessageFormatter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation-contracts'.\DIRECTORY_SEPARATOR.'TranslatorTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'IdentityTranslator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Profiler'.\DIRECTORY_SEPARATOR.'Profiler.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Profiler'.\DIRECTORY_SEPARATOR.'ProfilerStorageInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Profiler'.\DIRECTORY_SEPARATOR.'FileProfilerStorage.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'log'.\DIRECTORY_SEPARATOR.'Psr'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'LoggerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Logger.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'DebugLoggerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'monolog-bridge'.\DIRECTORY_SEPARATOR.'Logger.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'LateDataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'TimeDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'MemoryDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'ValidatorDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'AjaxDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'ExceptionDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'LoggerDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'EventDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'TranslationDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'SecurityDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'TwigDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Profiler'.\DIRECTORY_SEPARATOR.'Profile.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'DoctrineDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'DoctrineDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'swiftmailer-bundle'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'MessageDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'suncat'.\DIRECTORY_SEPARATOR.'mobile-detect-bundle'.\DIRECTORY_SEPARATOR.'SunCat'.\DIRECTORY_SEPARATOR.'MobileDetectBundle'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'DeviceDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'ConfigDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ProfilerListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'RequestDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'RouterDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'RouterDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'CacheDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'FormDataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'FormDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'FormDataExtractorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'FormDataExtractor.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'workflow'.\DIRECTORY_SEPARATOR.'WorkflowInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'workflow'.\DIRECTORY_SEPARATOR.'Workflow.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'workflow'.\DIRECTORY_SEPARATOR.'StateMachine.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'workflow'.\DIRECTORY_SEPARATOR.'Definition.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'workflow'.\DIRECTORY_SEPARATOR.'Transition.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'workflow'.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'MetadataStoreInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'workflow'.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'GetMetadataTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'workflow'.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'InMemoryMetadataStore.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'workflow'.\DIRECTORY_SEPARATOR.'MarkingStore'.\DIRECTORY_SEPARATOR.'MarkingStoreInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'workflow'.\DIRECTORY_SEPARATOR.'MarkingStore'.\DIRECTORY_SEPARATOR.'SingleStateMarkingStore.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'DebugHandlersListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Debug'.\DIRECTORY_SEPARATOR.'FileLinkFormatter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'stopwatch'.\DIRECTORY_SEPARATOR.'Stopwatch.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'RequestContext.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'RouterListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'annotations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Annotations'.\DIRECTORY_SEPARATOR.'Reader.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'annotations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Annotations'.\DIRECTORY_SEPARATOR.'AnnotationReader.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'annotations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Annotations'.\DIRECTORY_SEPARATOR.'AnnotationRegistry.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'AuthorizationCheckerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'AuthorizationChecker.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'Token'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'TokenStorageInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'service-contracts'.\DIRECTORY_SEPARATOR.'ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'Token'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'UsageTrackingTokenStorage.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'Token'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'TokenStorage.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticationManagerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticationProviderManager.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticationTrustResolverInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticationTrustResolver.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'AccessDecisionManagerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'AccessDecisionManager.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Role'.\DIRECTORY_SEPARATOR.'RoleHierarchyInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Role'.\DIRECTORY_SEPARATOR.'RoleHierarchy.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'Firewall.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'FirewallListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'FirewallMapInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'FirewallMap.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'Logout'.\DIRECTORY_SEPARATOR.'LogoutUrlGenerator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'RememberMe'.\DIRECTORY_SEPARATOR.'ResponseListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ConnectionRegistry.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ManagerRegistry.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'AbstractManagerRegistry.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'ManagerRegistry.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'RegistryInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Registry.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'DBAL'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'Connection.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'DBAL'.\DIRECTORY_SEPARATOR.'Connection.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'ConnectionFactory.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'DBAL'.\DIRECTORY_SEPARATOR.'Configuration.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'event-manager'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'EventManager.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'ContainerAwareEventManager.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Traits'.\DIRECTORY_SEPARATOR.'ArrayTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'ArrayAdapter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ControllerListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ParamConverterListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Request'.\DIRECTORY_SEPARATOR.'ParamConverter'.\DIRECTORY_SEPARATOR.'ParamConverterManager.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Request'.\DIRECTORY_SEPARATOR.'ParamConverter'.\DIRECTORY_SEPARATOR.'ParamConverterInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Request'.\DIRECTORY_SEPARATOR.'ParamConverter'.\DIRECTORY_SEPARATOR.'DoctrineParamConverter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'expression-language'.\DIRECTORY_SEPARATOR.'ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Request'.\DIRECTORY_SEPARATOR.'ParamConverter'.\DIRECTORY_SEPARATOR.'DateTimeParamConverter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'TemplateListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Templating'.\DIRECTORY_SEPARATOR.'TemplateGuesser.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'HttpCacheListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'SecurityListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'IsGrantedListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Request'.\DIRECTORY_SEPARATOR.'ArgumentNameConverter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'HandlerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'AbstractHandler.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'BufferHandler.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'AbstractProcessingHandler.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'StreamHandler.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easy-log-handler'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EasyLogHandler.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'monolog-bridge'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'ConsoleHandler.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Environment.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'ExistsLoaderInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'SourceContextLoaderInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'FilesystemLoader.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'FilesystemLoader.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'CsrfExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'LogoutUrlExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'SecurityExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'TranslationExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'AssetExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'Packages.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'PackageInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'Package.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'PathPackage.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'VersionStrategy'.\DIRECTORY_SEPARATOR.'VersionStrategyInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'VersionStrategy'.\DIRECTORY_SEPARATOR.'EmptyVersionStrategy.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'Context'.\DIRECTORY_SEPARATOR.'ContextInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'Context'.\DIRECTORY_SEPARATOR.'RequestStackContext.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'CodeExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'RoutingExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'YamlExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'StopwatchExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'ExpressionExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'HttpKernelExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'HttpFoundationExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'UrlHelper.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'WorkflowExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'workflow'.\DIRECTORY_SEPARATOR.'Registry.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'workflow'.\DIRECTORY_SEPARATOR.'SupportStrategy'.\DIRECTORY_SEPARATOR.'WorkflowSupportStrategyInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'workflow'.\DIRECTORY_SEPARATOR.'SupportStrategy'.\DIRECTORY_SEPARATOR.'InstanceOfSupportStrategy.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'FormExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DumpExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'CartServiceExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'CsrfExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'EccubeBlockExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'IntlExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'RepositoryExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'SafeTextmailEscaperExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'TwigIncludeExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'StringLoaderExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'extensions'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Extensions'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Intl.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'DoctrineExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'ProfilerExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-profiler-bundle'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'WebProfilerExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'DataDumperInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Cloner'.\DIRECTORY_SEPARATOR.'DumperInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'AbstractDumper.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'CliDumper.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'HtmlDumper.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'suncat'.\DIRECTORY_SEPARATOR.'mobile-detect-bundle'.\DIRECTORY_SEPARATOR.'SunCat'.\DIRECTORY_SEPARATOR.'MobileDetectBundle'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'MobileDetectExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'PaginationExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Processor.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'exercise'.\DIRECTORY_SEPARATOR.'htmlpurifier-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'HTMLPurifierExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'AppVariable.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'RuntimeLoader'.\DIRECTORY_SEPARATOR.'RuntimeLoaderInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'RuntimeLoader'.\DIRECTORY_SEPARATOR.'ContainerRuntimeLoader.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'IgnoreRoutingNotFoundExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'Configurator'.\DIRECTORY_SEPARATOR.'EnvironmentConfigurator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'DumpDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Cloner'.\DIRECTORY_SEPARATOR.'ClonerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Cloner'.\DIRECTORY_SEPARATOR.'AbstractCloner.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Cloner'.\DIRECTORY_SEPARATOR.'VarCloner.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'mobiledetect'.\DIRECTORY_SEPARATOR.'mobiledetectlib'.\DIRECTORY_SEPARATOR.'Mobile_Detect.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'mobiledetect'.\DIRECTORY_SEPARATOR.'mobiledetectlib'.\DIRECTORY_SEPARATOR.'namespaced'.\DIRECTORY_SEPARATOR.'Detection'.\DIRECTORY_SEPARATOR.'MobileDetect.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'suncat'.\DIRECTORY_SEPARATOR.'mobile-detect-bundle'.\DIRECTORY_SEPARATOR.'SunCat'.\DIRECTORY_SEPARATOR.'MobileDetectBundle'.\DIRECTORY_SEPARATOR.'DeviceDetector'.\DIRECTORY_SEPARATOR.'MobileDetector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'suncat'.\DIRECTORY_SEPARATOR.'mobile-detect-bundle'.\DIRECTORY_SEPARATOR.'SunCat'.\DIRECTORY_SEPARATOR.'MobileDetectBundle'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'DeviceView.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'suncat'.\DIRECTORY_SEPARATOR.'mobile-detect-bundle'.\DIRECTORY_SEPARATOR.'SunCat'.\DIRECTORY_SEPARATOR.'MobileDetectBundle'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'RequestResponseListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle'.\DIRECTORY_SEPARATOR.'Subscriber'.\DIRECTORY_SEPARATOR.'SlidingPaginationSubscriber.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'DataCollectorTranslator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'RequestContextAwareInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Matcher'.\DIRECTORY_SEPARATOR.'UrlMatcherInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Generator'.\DIRECTORY_SEPARATOR.'UrlGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'RouterInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Matcher'.\DIRECTORY_SEPARATOR.'RequestMatcherInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Router.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'CompatibilityServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'Router.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ParameterBag'.\DIRECTORY_SEPARATOR.'ParameterBagInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ParameterBag'.\DIRECTORY_SEPARATOR.'ParameterBag.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ParameterBag'.\DIRECTORY_SEPARATOR.'FrozenParameterBag.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ParameterBag'.\DIRECTORY_SEPARATOR.'ContainerBagInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ParameterBag'.\DIRECTORY_SEPARATOR.'ContainerBag.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'MetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'ValidatorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'TraceableValidator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'annotations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Annotations'.\DIRECTORY_SEPARATOR.'PsrCachedReader.php';
        };
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    protected function createProxy($class, \Closure $factory)
    {
        class_exists($class, false) || $this->load("{$class}.php");

        return $factory();
    }

    /*
     * Gets the public 'Eccube\Common\EccubeConfig' shared autowired service.
     *
     * @return \Eccube\Common\EccubeConfig
     */
    protected function getEccubeConfigService()
    {
        return $this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this);
    }

    /*
     * Gets the public 'Eccube\Repository\PluginRepository' shared autowired service.
     *
     * @return \Eccube\Repository\PluginRepository
     */
    protected function getPluginRepositoryService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['Eccube\\Repository\\PluginRepository'] = $this->createProxy('PluginRepository_c4546a6', function () {
                return \PluginRepository_c4546a6::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getPluginRepositoryService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'PluginRepository.php';

        return new \Eccube\Repository\PluginRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the public 'data_collector.cache' shared service.
     *
     * @return \Symfony\Component\Cache\DataCollector\CacheDataCollector
     */
    protected function getDataCollector_CacheService()
    {
        return $this->services['data_collector.cache'] = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
    }

    /*
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), 'UTF-8', NULL, NULL);
    }

    /*
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /*
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Eccube\\Doctrine\\EventSubscriber\\InitSubscriber' => ['privates', 'Eccube\\Doctrine\\EventSubscriber\\InitSubscriber', 'getInitSubscriberService.php', true],
            'Eccube\\Doctrine\\EventSubscriber\\SaveEventSubscriber' => ['privates', 'Eccube\\Doctrine\\EventSubscriber\\SaveEventSubscriber', 'getSaveEventSubscriberService.php', true],
            'Eccube\\Doctrine\\EventSubscriber\\TaxRuleEventSubscriber' => ['privates', 'Eccube\\Doctrine\\EventSubscriber\\TaxRuleEventSubscriber', 'getTaxRuleEventSubscriberService.php', true],
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php', true],
        ], [
            'Eccube\\Doctrine\\EventSubscriber\\InitSubscriber' => '?',
            'Eccube\\Doctrine\\EventSubscriber\\SaveEventSubscriber' => '?',
            'Eccube\\Doctrine\\EventSubscriber\\TaxRuleEventSubscriber' => '?',
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
        ]), [0 => 'Eccube\\Doctrine\\EventSubscriber\\InitSubscriber', 1 => 'Eccube\\Doctrine\\EventSubscriber\\SaveEventSubscriber', 2 => 'Eccube\\Doctrine\\EventSubscriber\\TaxRuleEventSubscriber']);
        $a->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');

        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory($this->parameters['doctrine.dbal.connection_factory.types']))->createConnection(['driver' => 'pdo_sqlite', 'charset' => 'utf8', 'url' => $this->getEnv('DATABASE_URL'), 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [], 'serverVersion' => $this->getEnv('DATABASE_SERVER_VERSION'), 'defaultTableOptions' => ['collate' => 'utf8_general_ci']], new \Doctrine\DBAL\Configuration(), $a, []);
    }

    /*
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['doctrine.orm.default_entity_manager'] = $this->createProxy('EntityManager_9a5be93', function () {
                return \EntityManager_9a5be93::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getDoctrine_Orm_DefaultEntityManagerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Configuration.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'Cache.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'FlushableCache.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'ClearableCache.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'MultiGetCache.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'MultiDeleteCache.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'MultiPutCache.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'MultiOperationCache.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'CacheProvider.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'DoctrineProvider.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'MappingDriver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'MappingDriverChain.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'FileDriver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'XmlDriver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'FileLocator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'SymfonyFileLocator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'AnnotationDriver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'AnnotationDriver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'AnnotationDriver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'NamingStrategy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'UnderscoreNamingStrategy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'QuoteStrategy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'DefaultQuoteStrategy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'EntityListenerResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'EntityListenerServiceResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'ContainerEntityListenerResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'RepositoryFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ContainerRepositoryFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'ManagerConfigurator.php';

        $a = new \Doctrine\ORM\Configuration();

        $b = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();

        $c = ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService());

        $d = new \Eccube\Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => (\dirname(__DIR__, 4).'/src/Eccube/Entity')]);
        $d->setTraitProxiesDirectory((\dirname(__DIR__, 4).'/app/proxy/entity'));
        $e = new \Eccube\Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => (\dirname(__DIR__, 4).'/app/Plugin/Api/Entity')]);
        $e->setTraitProxiesDirectory((\dirname(__DIR__, 4).'/app/proxy/entity'));
        $f = new \Eccube\Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => (\dirname(__DIR__, 4).'/app/Plugin/Coupon4/Entity')]);
        $f->setTraitProxiesDirectory((\dirname(__DIR__, 4).'/app/proxy/entity'));
        $g = new \Eccube\Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => (\dirname(__DIR__, 4).'/app/Plugin/MailMagazine4/Entity')]);
        $g->setTraitProxiesDirectory((\dirname(__DIR__, 4).'/app/proxy/entity'));
        $h = new \Eccube\Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => (\dirname(__DIR__, 4).'/app/Plugin/ProductReview4/Entity')]);
        $h->setTraitProxiesDirectory((\dirname(__DIR__, 4).'/app/proxy/entity'));
        $i = new \Eccube\Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => (\dirname(__DIR__, 4).'/app/Plugin/Recommend4/Entity')]);
        $i->setTraitProxiesDirectory((\dirname(__DIR__, 4).'/app/proxy/entity'));
        $j = new \Eccube\Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => (\dirname(__DIR__, 4).'/app/Plugin/RelatedProduct4/Entity')]);
        $j->setTraitProxiesDirectory((\dirname(__DIR__, 4).'/app/proxy/entity'));
        $k = new \Eccube\Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => (\dirname(__DIR__, 4).'/app/Plugin/Securitychecker4/Entity')]);
        $k->setTraitProxiesDirectory((\dirname(__DIR__, 4).'/app/proxy/entity'));
        $l = new \Eccube\Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => (\dirname(__DIR__, 4).'/app/Plugin/SiteKit/Entity')]);
        $l->setTraitProxiesDirectory((\dirname(__DIR__, 4).'/app/proxy/entity'));

        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([(\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'trikoder'.\DIRECTORY_SEPARATOR.'oauth2-bundle'.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'model') => 'Trikoder\\Bundle\\OAuth2Bundle\\Model'], '.orm.xml')), 'Trikoder\\Bundle\\OAuth2Bundle\\Model');
        $b->addDriver($d, 'Eccube\\Entity');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => (\dirname(__DIR__, 4).'/app/Customize/Entity')]), 'Customize\\Entity');
        $b->addDriver($e, 'Plugin\\Api\\Entity');
        $b->addDriver($f, 'Plugin\\Coupon4\\Entity');
        $b->addDriver($g, 'Plugin\\MailMagazine4\\Entity');
        $b->addDriver($h, 'Plugin\\ProductReview4\\Entity');
        $b->addDriver($i, 'Plugin\\Recommend4\\Entity');
        $b->addDriver($j, 'Plugin\\RelatedProduct4\\Entity');
        $b->addDriver($k, 'Plugin\\Securitychecker4\\Entity');
        $b->addDriver($l, 'Plugin\\SiteKit\\Entity');

        $a->setEntityNamespaces([]);
        $a->setMetadataCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['cache.doctrine.orm.default.metadata'] ?? ($this->privates['cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter()))));
        $a->setQueryCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['cache.doctrine.orm.default.query'] ?? ($this->privates['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter()))));
        $a->setResultCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['cache.doctrine.orm.default.result'] ?? ($this->privates['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter()))));
        $a->setMetadataDriverImpl($b);
        $a->setProxyDir(($this->targetDir.''.'/doctrine/orm/Proxies'));
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(false);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true));
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Eccube\\Repository\\AuthorityRoleRepository' => ['privates', 'Eccube\\Repository\\AuthorityRoleRepository', 'getAuthorityRoleRepositoryService.php', true],
            'Eccube\\Repository\\BaseInfoRepository' => ['privates', 'Eccube\\Repository\\BaseInfoRepository', 'getBaseInfoRepositoryService', false],
            'Eccube\\Repository\\BlockPositionRepository' => ['privates', 'Eccube\\Repository\\BlockPositionRepository', 'getBlockPositionRepositoryService.php', true],
            'Eccube\\Repository\\BlockRepository' => ['privates', 'Eccube\\Repository\\BlockRepository', 'getBlockRepositoryService.php', true],
            'Eccube\\Repository\\CartItemRepository' => ['privates', 'Eccube\\Repository\\CartItemRepository', 'getCartItemRepositoryService.php', true],
            'Eccube\\Repository\\CartRepository' => ['privates', 'Eccube\\Repository\\CartRepository', 'getCartRepositoryService', false],
            'Eccube\\Repository\\CategoryRepository' => ['privates', 'Eccube\\Repository\\CategoryRepository', 'getCategoryRepositoryService.php', true],
            'Eccube\\Repository\\ClassCategoryRepository' => ['privates', 'Eccube\\Repository\\ClassCategoryRepository', 'getClassCategoryRepositoryService.php', true],
            'Eccube\\Repository\\ClassNameRepository' => ['privates', 'Eccube\\Repository\\ClassNameRepository', 'getClassNameRepositoryService.php', true],
            'Eccube\\Repository\\CsvRepository' => ['privates', 'Eccube\\Repository\\CsvRepository', 'getCsvRepositoryService.php', true],
            'Eccube\\Repository\\CustomerAddressRepository' => ['privates', 'Eccube\\Repository\\CustomerAddressRepository', 'getCustomerAddressRepositoryService.php', true],
            'Eccube\\Repository\\CustomerFavoriteProductRepository' => ['privates', 'Eccube\\Repository\\CustomerFavoriteProductRepository', 'getCustomerFavoriteProductRepositoryService.php', true],
            'Eccube\\Repository\\CustomerRepository' => ['privates', 'Eccube\\Repository\\CustomerRepository', 'getCustomerRepositoryService.php', true],
            'Eccube\\Repository\\DeliveryDurationRepository' => ['privates', 'Eccube\\Repository\\DeliveryDurationRepository', 'getDeliveryDurationRepositoryService.php', true],
            'Eccube\\Repository\\DeliveryFeeRepository' => ['privates', 'Eccube\\Repository\\DeliveryFeeRepository', 'getDeliveryFeeRepositoryService.php', true],
            'Eccube\\Repository\\DeliveryRepository' => ['privates', 'Eccube\\Repository\\DeliveryRepository', 'getDeliveryRepositoryService.php', true],
            'Eccube\\Repository\\DeliveryTimeRepository' => ['privates', 'Eccube\\Repository\\DeliveryTimeRepository', 'getDeliveryTimeRepositoryService.php', true],
            'Eccube\\Repository\\LayoutRepository' => ['privates', 'Eccube\\Repository\\LayoutRepository', 'getLayoutRepositoryService.php', true],
            'Eccube\\Repository\\LoginHistoryRepository' => ['privates', 'Eccube\\Repository\\LoginHistoryRepository', 'getLoginHistoryRepositoryService.php', true],
            'Eccube\\Repository\\MailHistoryRepository' => ['privates', 'Eccube\\Repository\\MailHistoryRepository', 'getMailHistoryRepositoryService.php', true],
            'Eccube\\Repository\\MailTemplateRepository' => ['privates', 'Eccube\\Repository\\MailTemplateRepository', 'getMailTemplateRepositoryService.php', true],
            'Eccube\\Repository\\Master\\AuthorityRepository' => ['privates', 'Eccube\\Repository\\Master\\AuthorityRepository', 'getAuthorityRepositoryService.php', true],
            'Eccube\\Repository\\Master\\CountryRepository' => ['privates', 'Eccube\\Repository\\Master\\CountryRepository', 'getCountryRepositoryService.php', true],
            'Eccube\\Repository\\Master\\CsvTypeRepository' => ['privates', 'Eccube\\Repository\\Master\\CsvTypeRepository', 'getCsvTypeRepositoryService.php', true],
            'Eccube\\Repository\\Master\\CustomerOrderStatusRepository' => ['privates', 'Eccube\\Repository\\Master\\CustomerOrderStatusRepository', 'getCustomerOrderStatusRepositoryService.php', true],
            'Eccube\\Repository\\Master\\CustomerStatusRepository' => ['privates', 'Eccube\\Repository\\Master\\CustomerStatusRepository', 'getCustomerStatusRepositoryService.php', true],
            'Eccube\\Repository\\Master\\DeviceTypeRepository' => ['privates', 'Eccube\\Repository\\Master\\DeviceTypeRepository', 'getDeviceTypeRepositoryService.php', true],
            'Eccube\\Repository\\Master\\JobRepository' => ['privates', 'Eccube\\Repository\\Master\\JobRepository', 'getJobRepositoryService.php', true],
            'Eccube\\Repository\\Master\\LoginHistoryStatusRepository' => ['privates', 'Eccube\\Repository\\Master\\LoginHistoryStatusRepository', 'getLoginHistoryStatusRepositoryService.php', true],
            'Eccube\\Repository\\Master\\OrderItemTypeRepository' => ['privates', 'Eccube\\Repository\\Master\\OrderItemTypeRepository', 'getOrderItemTypeRepositoryService.php', true],
            'Eccube\\Repository\\Master\\OrderStatusColorRepository' => ['privates', 'Eccube\\Repository\\Master\\OrderStatusColorRepository', 'getOrderStatusColorRepositoryService.php', true],
            'Eccube\\Repository\\Master\\OrderStatusRepository' => ['privates', 'Eccube\\Repository\\Master\\OrderStatusRepository', 'getOrderStatusRepositoryService.php', true],
            'Eccube\\Repository\\Master\\PageMaxRepository' => ['privates', 'Eccube\\Repository\\Master\\PageMaxRepository', 'getPageMaxRepositoryService.php', true],
            'Eccube\\Repository\\Master\\PrefRepository' => ['privates', 'Eccube\\Repository\\Master\\PrefRepository', 'getPrefRepositoryService.php', true],
            'Eccube\\Repository\\Master\\ProductListMaxRepository' => ['privates', 'Eccube\\Repository\\Master\\ProductListMaxRepository', 'getProductListMaxRepositoryService.php', true],
            'Eccube\\Repository\\Master\\ProductListOrderByRepository' => ['privates', 'Eccube\\Repository\\Master\\ProductListOrderByRepository', 'getProductListOrderByRepositoryService.php', true],
            'Eccube\\Repository\\Master\\ProductStatusRepository' => ['privates', 'Eccube\\Repository\\Master\\ProductStatusRepository', 'getProductStatusRepositoryService.php', true],
            'Eccube\\Repository\\Master\\RoundingTypeRepository' => ['privates', 'Eccube\\Repository\\Master\\RoundingTypeRepository', 'getRoundingTypeRepositoryService.php', true],
            'Eccube\\Repository\\Master\\SaleTypeRepository' => ['privates', 'Eccube\\Repository\\Master\\SaleTypeRepository', 'getSaleTypeRepositoryService.php', true],
            'Eccube\\Repository\\Master\\SexRepository' => ['privates', 'Eccube\\Repository\\Master\\SexRepository', 'getSexRepositoryService.php', true],
            'Eccube\\Repository\\Master\\TaxDisplayTypeRepository' => ['privates', 'Eccube\\Repository\\Master\\TaxDisplayTypeRepository', 'getTaxDisplayTypeRepositoryService.php', true],
            'Eccube\\Repository\\Master\\TaxTypeRepository' => ['privates', 'Eccube\\Repository\\Master\\TaxTypeRepository', 'getTaxTypeRepositoryService.php', true],
            'Eccube\\Repository\\Master\\WorkRepository' => ['privates', 'Eccube\\Repository\\Master\\WorkRepository', 'getWorkRepositoryService.php', true],
            'Eccube\\Repository\\MemberRepository' => ['privates', 'Eccube\\Repository\\MemberRepository', 'getMemberRepositoryService.php', true],
            'Eccube\\Repository\\NewsRepository' => ['privates', 'Eccube\\Repository\\NewsRepository', 'getNewsRepositoryService.php', true],
            'Eccube\\Repository\\OrderItemRepository' => ['privates', 'Eccube\\Repository\\OrderItemRepository', 'getOrderItemRepositoryService.php', true],
            'Eccube\\Repository\\OrderPdfRepository' => ['privates', 'Eccube\\Repository\\OrderPdfRepository', 'getOrderPdfRepositoryService.php', true],
            'Eccube\\Repository\\OrderRepository' => ['privates', 'Eccube\\Repository\\OrderRepository', 'getOrderRepositoryService', false],
            'Eccube\\Repository\\PageLayoutRepository' => ['privates', 'Eccube\\Repository\\PageLayoutRepository', 'getPageLayoutRepositoryService.php', true],
            'Eccube\\Repository\\PageRepository' => ['privates', 'Eccube\\Repository\\PageRepository', 'getPageRepositoryService.php', true],
            'Eccube\\Repository\\PaymentOptionRepository' => ['privates', 'Eccube\\Repository\\PaymentOptionRepository', 'getPaymentOptionRepositoryService.php', true],
            'Eccube\\Repository\\PaymentRepository' => ['privates', 'Eccube\\Repository\\PaymentRepository', 'getPaymentRepositoryService.php', true],
            'Eccube\\Repository\\PluginRepository' => ['services', 'Eccube\\Repository\\PluginRepository', 'getPluginRepositoryService', false],
            'Eccube\\Repository\\ProductCategoryRepository' => ['privates', 'Eccube\\Repository\\ProductCategoryRepository', 'getProductCategoryRepositoryService.php', true],
            'Eccube\\Repository\\ProductClassRepository' => ['privates', 'Eccube\\Repository\\ProductClassRepository', 'getProductClassRepositoryService', false],
            'Eccube\\Repository\\ProductImageRepository' => ['privates', 'Eccube\\Repository\\ProductImageRepository', 'getProductImageRepositoryService.php', true],
            'Eccube\\Repository\\ProductRepository' => ['privates', 'Eccube\\Repository\\ProductRepository', 'getProductRepositoryService', false],
            'Eccube\\Repository\\ProductStockRepository' => ['privates', 'Eccube\\Repository\\ProductStockRepository', 'getProductStockRepositoryService.php', true],
            'Eccube\\Repository\\ProductTagRepository' => ['privates', 'Eccube\\Repository\\ProductTagRepository', 'getProductTagRepositoryService.php', true],
            'Eccube\\Repository\\ShippingRepository' => ['privates', 'Eccube\\Repository\\ShippingRepository', 'getShippingRepositoryService.php', true],
            'Eccube\\Repository\\TagRepository' => ['privates', 'Eccube\\Repository\\TagRepository', 'getTagRepositoryService.php', true],
            'Eccube\\Repository\\TaxRuleRepository' => ['privates', 'Eccube\\Repository\\TaxRuleRepository', 'getTaxRuleRepositoryService', false],
            'Eccube\\Repository\\TemplateRepository' => ['privates', 'Eccube\\Repository\\TemplateRepository', 'getTemplateRepositoryService.php', true],
            'Plugin\\Api\\Repository\\WebHookRepository' => ['privates', 'Plugin\\Api\\Repository\\WebHookRepository', 'getWebHookRepositoryService.php', true],
            'Plugin\\Coupon4\\Repository\\CouponDetailRepository' => ['privates', 'Plugin\\Coupon4\\Repository\\CouponDetailRepository', 'getCouponDetailRepositoryService.php', true],
            'Plugin\\Coupon4\\Repository\\CouponOrderRepository' => ['privates', 'Plugin\\Coupon4\\Repository\\CouponOrderRepository', 'getCouponOrderRepositoryService.php', true],
            'Plugin\\Coupon4\\Repository\\CouponRepository' => ['privates', 'Plugin\\Coupon4\\Repository\\CouponRepository', 'getCouponRepositoryService.php', true],
            'Plugin\\MailMagazine4\\Repository\\MailMagazineSendHistoryRepository' => ['privates', 'Plugin\\MailMagazine4\\Repository\\MailMagazineSendHistoryRepository', 'getMailMagazineSendHistoryRepositoryService.php', true],
            'Plugin\\MailMagazine4\\Repository\\MailMagazineTemplateRepository' => ['privates', 'Plugin\\MailMagazine4\\Repository\\MailMagazineTemplateRepository', 'getMailMagazineTemplateRepositoryService.php', true],
            'Plugin\\ProductReview4\\Repository\\ProductReviewConfigRepository' => ['privates', 'Plugin\\ProductReview4\\Repository\\ProductReviewConfigRepository', 'getProductReviewConfigRepositoryService.php', true],
            'Plugin\\ProductReview4\\Repository\\ProductReviewRepository' => ['privates', 'Plugin\\ProductReview4\\Repository\\ProductReviewRepository', 'getProductReviewRepositoryService.php', true],
            'Plugin\\ProductReview4\\Repository\\ProductReviewStatusRepository' => ['privates', 'Plugin\\ProductReview4\\Repository\\ProductReviewStatusRepository', 'getProductReviewStatusRepositoryService.php', true],
            'Plugin\\Recommend4\\Repository\\RecommendProductRepository' => ['privates', 'Plugin\\Recommend4\\Repository\\RecommendProductRepository', 'getRecommendProductRepositoryService.php', true],
            'Plugin\\RelatedProduct4\\Repository\\RelatedProductRepository' => ['privates', 'Plugin\\RelatedProduct4\\Repository\\RelatedProductRepository', 'getRelatedProductRepositoryService.php', true],
            'Plugin\\Securitychecker4\\Repository\\ConfigRepository' => ['privates', 'Plugin\\Securitychecker4\\Repository\\ConfigRepository', 'getConfigRepositoryService.php', true],
            'Plugin\\SiteKit\\Repository\\IdTokenRepository' => ['privates', 'Plugin\\SiteKit\\Repository\\IdTokenRepository', 'getIdTokenRepositoryService.php', true],
        ], [
            'Eccube\\Repository\\AuthorityRoleRepository' => '?',
            'Eccube\\Repository\\BaseInfoRepository' => '?',
            'Eccube\\Repository\\BlockPositionRepository' => '?',
            'Eccube\\Repository\\BlockRepository' => '?',
            'Eccube\\Repository\\CartItemRepository' => '?',
            'Eccube\\Repository\\CartRepository' => '?',
            'Eccube\\Repository\\CategoryRepository' => '?',
            'Eccube\\Repository\\ClassCategoryRepository' => '?',
            'Eccube\\Repository\\ClassNameRepository' => '?',
            'Eccube\\Repository\\CsvRepository' => '?',
            'Eccube\\Repository\\CustomerAddressRepository' => '?',
            'Eccube\\Repository\\CustomerFavoriteProductRepository' => '?',
            'Eccube\\Repository\\CustomerRepository' => '?',
            'Eccube\\Repository\\DeliveryDurationRepository' => '?',
            'Eccube\\Repository\\DeliveryFeeRepository' => '?',
            'Eccube\\Repository\\DeliveryRepository' => '?',
            'Eccube\\Repository\\DeliveryTimeRepository' => '?',
            'Eccube\\Repository\\LayoutRepository' => '?',
            'Eccube\\Repository\\LoginHistoryRepository' => '?',
            'Eccube\\Repository\\MailHistoryRepository' => '?',
            'Eccube\\Repository\\MailTemplateRepository' => '?',
            'Eccube\\Repository\\Master\\AuthorityRepository' => '?',
            'Eccube\\Repository\\Master\\CountryRepository' => '?',
            'Eccube\\Repository\\Master\\CsvTypeRepository' => '?',
            'Eccube\\Repository\\Master\\CustomerOrderStatusRepository' => '?',
            'Eccube\\Repository\\Master\\CustomerStatusRepository' => '?',
            'Eccube\\Repository\\Master\\DeviceTypeRepository' => '?',
            'Eccube\\Repository\\Master\\JobRepository' => '?',
            'Eccube\\Repository\\Master\\LoginHistoryStatusRepository' => '?',
            'Eccube\\Repository\\Master\\OrderItemTypeRepository' => '?',
            'Eccube\\Repository\\Master\\OrderStatusColorRepository' => '?',
            'Eccube\\Repository\\Master\\OrderStatusRepository' => '?',
            'Eccube\\Repository\\Master\\PageMaxRepository' => '?',
            'Eccube\\Repository\\Master\\PrefRepository' => '?',
            'Eccube\\Repository\\Master\\ProductListMaxRepository' => '?',
            'Eccube\\Repository\\Master\\ProductListOrderByRepository' => '?',
            'Eccube\\Repository\\Master\\ProductStatusRepository' => '?',
            'Eccube\\Repository\\Master\\RoundingTypeRepository' => '?',
            'Eccube\\Repository\\Master\\SaleTypeRepository' => '?',
            'Eccube\\Repository\\Master\\SexRepository' => '?',
            'Eccube\\Repository\\Master\\TaxDisplayTypeRepository' => '?',
            'Eccube\\Repository\\Master\\TaxTypeRepository' => '?',
            'Eccube\\Repository\\Master\\WorkRepository' => '?',
            'Eccube\\Repository\\MemberRepository' => '?',
            'Eccube\\Repository\\NewsRepository' => '?',
            'Eccube\\Repository\\OrderItemRepository' => '?',
            'Eccube\\Repository\\OrderPdfRepository' => '?',
            'Eccube\\Repository\\OrderRepository' => '?',
            'Eccube\\Repository\\PageLayoutRepository' => '?',
            'Eccube\\Repository\\PageRepository' => '?',
            'Eccube\\Repository\\PaymentOptionRepository' => '?',
            'Eccube\\Repository\\PaymentRepository' => '?',
            'Eccube\\Repository\\PluginRepository' => '?',
            'Eccube\\Repository\\ProductCategoryRepository' => '?',
            'Eccube\\Repository\\ProductClassRepository' => '?',
            'Eccube\\Repository\\ProductImageRepository' => '?',
            'Eccube\\Repository\\ProductRepository' => '?',
            'Eccube\\Repository\\ProductStockRepository' => '?',
            'Eccube\\Repository\\ProductTagRepository' => '?',
            'Eccube\\Repository\\ShippingRepository' => '?',
            'Eccube\\Repository\\TagRepository' => '?',
            'Eccube\\Repository\\TaxRuleRepository' => '?',
            'Eccube\\Repository\\TemplateRepository' => '?',
            'Plugin\\Api\\Repository\\WebHookRepository' => '?',
            'Plugin\\Coupon4\\Repository\\CouponDetailRepository' => '?',
            'Plugin\\Coupon4\\Repository\\CouponOrderRepository' => '?',
            'Plugin\\Coupon4\\Repository\\CouponRepository' => '?',
            'Plugin\\MailMagazine4\\Repository\\MailMagazineSendHistoryRepository' => '?',
            'Plugin\\MailMagazine4\\Repository\\MailMagazineTemplateRepository' => '?',
            'Plugin\\ProductReview4\\Repository\\ProductReviewConfigRepository' => '?',
            'Plugin\\ProductReview4\\Repository\\ProductReviewRepository' => '?',
            'Plugin\\ProductReview4\\Repository\\ProductReviewStatusRepository' => '?',
            'Plugin\\Recommend4\\Repository\\RecommendProductRepository' => '?',
            'Plugin\\RelatedProduct4\\Repository\\RelatedProductRepository' => '?',
            'Plugin\\Securitychecker4\\Repository\\ConfigRepository' => '?',
            'Plugin\\SiteKit\\Repository\\IdTokenRepository' => '?',
        ])));
        $a->addCustomStringFunction('NORMALIZE', 'Eccube\\Doctrine\\ORM\\Query\\Normalize');
        $a->addCustomNumericFunction('EXTRACT', 'Eccube\\Doctrine\\ORM\\Query\\Extract');
        $a->addFilter('option_nostock_hidden', 'Eccube\\Doctrine\\Filter\\NoStockHiddenFilter');
        $a->addFilter('incomplete_order_status_hidden', 'Eccube\\Doctrine\\Filter\\OrderStatusFilter');
        $a->addEntityNamespace('TrikoderOAuth2Bundle', 'Trikoder\\Bundle\\OAuth2Bundle\\Model');

        $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }

    /*
     * Gets the public 'event_dispatcher' shared autowired service.
     *
     * @return \Eccube\Event\EventDispatcherWrapper
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Eccube\Event\EventDispatcherWrapper();

        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['Symfony\\Bridge\\Monolog\\Processor\\WebProcessor'] ?? $this->getWebProcessorService());
        }, 1 => 'onKernelRequest'], 1024);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['mobile_detect.request_listener'] ?? $this->getMobileDetect_RequestListenerService());
        }, 1 => 'handleRequest'], 1);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['mobile_detect.request_listener'] ?? $this->getMobileDetect_RequestListenerService());
        }, 1 => 'handleResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.sliding_pagination'] ?? $this->getKnpPaginator_Subscriber_SlidingPaginationService());
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('trikoder.oauth2.authorization_request_resolve', [0 => function () {
            return ($this->privates['Trikoder\\Bundle\\OAuth2Bundle\\EventListener\\AuthorizationRequestUserResolvingListener'] ?? $this->load('getAuthorizationRequestUserResolvingListenerService.php'));
        }, 1 => 'onAuthorizationRequest'], 1024);
        $instance->addListener('form.pre_submit', [0 => function () {
            return ($this->privates['Eccube\\Form\\EventListener\\ConvertKanaListener'] ?? ($this->privates['Eccube\\Form\\EventListener\\ConvertKanaListener'] = new \Eccube\Form\EventListener\ConvertKanaListener()));
        }, 1 => 'onPreSubmit'], 0);
        $instance->addListener('form.pre_submit', [0 => function () {
            return ($this->privates['Eccube\\Form\\EventListener\\HTMLPurifierListener'] ?? ($this->privates['Eccube\\Form\\EventListener\\HTMLPurifierListener'] = new \Eccube\Form\EventListener\HTMLPurifierListener()));
        }, 1 => 'purifySubmittedData'], 1000001);
        $instance->addListener('form.pre_submit', [0 => function () {
            return ($this->privates['Eccube\\Form\\EventListener\\TruncateHyphenListener'] ?? ($this->privates['Eccube\\Form\\EventListener\\TruncateHyphenListener'] = new \Eccube\Form\EventListener\TruncateHyphenListener()));
        }, 1 => 'onPreSubmit'], 0);
        $instance->addListener('workflow.order.completed', [0 => function () {
            return ($this->privates['Eccube\\Service\\OrderStateMachine'] ?? $this->load('getOrderStateMachineService.php'));
        }, 1 => 'onCompleted'], 0);
        $instance->addListener('workflow.order.transition.pay', [0 => function () {
            return ($this->privates['Eccube\\Service\\OrderStateMachine'] ?? $this->load('getOrderStateMachineService.php'));
        }, 1 => 'updatePaymentDate'], 0);
        $instance->addListener('workflow.order.transition.cancel', [0 => function () {
            return ($this->privates['Eccube\\Service\\OrderStateMachine'] ?? $this->load('getOrderStateMachineService.php'));
        }, 1 => 'rollbackStock'], 0);
        $instance->addListener('workflow.order.transition.cancel', [0 => function () {
            return ($this->privates['Eccube\\Service\\OrderStateMachine'] ?? $this->load('getOrderStateMachineService.php'));
        }, 1 => 'rollbackUsePoint'], 0);
        $instance->addListener('workflow.order.transition.back_to_in_progress', [0 => function () {
            return ($this->privates['Eccube\\Service\\OrderStateMachine'] ?? $this->load('getOrderStateMachineService.php'));
        }, 1 => 'commitStock'], 0);
        $instance->addListener('workflow.order.transition.back_to_in_progress', [0 => function () {
            return ($this->privates['Eccube\\Service\\OrderStateMachine'] ?? $this->load('getOrderStateMachineService.php'));
        }, 1 => 'commitUsePoint'], 0);
        $instance->addListener('workflow.order.transition.ship', [0 => function () {
            return ($this->privates['Eccube\\Service\\OrderStateMachine'] ?? $this->load('getOrderStateMachineService.php'));
        }, 1 => 'commitAddPoint'], 0);
        $instance->addListener('workflow.order.transition.return', [0 => function () {
            return ($this->privates['Eccube\\Service\\OrderStateMachine'] ?? $this->load('getOrderStateMachineService.php'));
        }, 1 => 'rollbackUsePoint'], 0);
        $instance->addListener('workflow.order.transition.return', [0 => function () {
            return ($this->privates['Eccube\\Service\\OrderStateMachine'] ?? $this->load('getOrderStateMachineService.php'));
        }, 1 => 'rollbackAddPoint'], 0);
        $instance->addListener('workflow.order.transition.cancel_return', [0 => function () {
            return ($this->privates['Eccube\\Service\\OrderStateMachine'] ?? $this->load('getOrderStateMachineService.php'));
        }, 1 => 'commitUsePoint'], 0);
        $instance->addListener('workflow.order.transition.cancel_return', [0 => function () {
            return ($this->privates['Eccube\\Service\\OrderStateMachine'] ?? $this->load('getOrderStateMachineService.php'));
        }, 1 => 'commitAddPoint'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->services['Eccube\\Service\\SystemService'] ?? $this->load('getSystemServiceService.php'));
        }, 1 => 'disableMaintenanceEvent'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['Eccube\\Util\\CacheUtil'] ?? ($this->privates['Eccube\\Util\\CacheUtil'] = new \Eccube\Util\CacheUtil(($this->services['kernel'] ?? $this->get('kernel', 1)), $this)));
        }, 1 => 'forceClearCache'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['Symfony\\Bridge\\Monolog\\Processor\\WebProcessor'] ?? $this->getWebProcessorService());
        }, 1 => 'onKernelRequest'], 4096);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'setDefaultLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['.legacy_resolve_controller_name_subscriber'] ?? $this->get_LegacyResolveControllerNameSubscriberService());
        }, 1 => 'resolveControllerName'], 24);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onControllerArguments'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelRequest'], 15);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelFinishRequest'], -15);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['esi_listener'] ?? $this->getEsiListenerService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['fragment.listener'] ?? $this->getFragment_ListenerService());
        }, 1 => 'onKernelRequest'], 48);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelResponse'], -100);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelTerminate'], -1024);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'configureLogoutUrlGenerator'], 8);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.controller.listener'] ?? $this->getSensioFrameworkExtra_Controller_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.converter.listener'] ?? $this->getSensioFrameworkExtra_Converter_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelController'], -128);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['sensio_framework_extra.security.listener'] ?? $this->getSensioFrameworkExtra_Security_ListenerService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['framework_extra_bundle.event.is_granted'] ?? $this->getFrameworkExtraBundle_Event_IsGrantedService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['sensio_framework_extra.psr7.listener.response'] ?? $this->load('getSensioFrameworkExtra_Psr7_Listener_ResponseService.php'));
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onCommand'], 255);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onTerminate'], -255);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.dump_listener'] ?? $this->load('getDebug_DumpListenerService.php'));
        }, 1 => 'configure'], 1024);
        $instance->addListener('knp_pager.before', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.paginate'] ?? ($this->privates['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber()));
        }, 1 => 'before'], 0);
        $instance->addListener('knp_pager.pagination', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.paginate'] ?? ($this->privates['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber()));
        }, 1 => 'pagination'], 0);
        $instance->addListener('knp_pager.before', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.sortable'] ?? ($this->privates['knp_paginator.subscriber.sortable'] = new \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber()));
        }, 1 => 'before'], 1);
        $instance->addListener('knp_pager.before', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.filtration'] ?? ($this->privates['knp_paginator.subscriber.filtration'] = new \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber()));
        }, 1 => 'before'], 1);
        $instance->addListener('knp_pager.pagination', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.sliding_pagination'] ?? $this->getKnpPaginator_Subscriber_SlidingPaginationService());
        }, 1 => 'pagination'], 1);

        return $instance;
    }

    /*
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), ($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false)))), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['argument_resolver.request_attribute'] ?? ($this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()));
            yield 1 => ($this->privates['argument_resolver.request'] ?? ($this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()));
            yield 2 => ($this->privates['argument_resolver.session'] ?? ($this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()));
            yield 3 => ($this->privates['security.user_value_resolver'] ?? $this->load('getSecurity_UserValueResolverService.php'));
            yield 4 => ($this->privates['sensio_framework_extra.psr7.argument_value_resolver.server_request'] ?? $this->load('getSensioFrameworkExtra_Psr7_ArgumentValueResolver_ServerRequestService.php'));
            yield 5 => ($this->privates['argument_resolver.service'] ?? $this->load('getArgumentResolver_ServiceService.php'));
            yield 6 => ($this->privates['argument_resolver.default'] ?? ($this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()));
            yield 7 => ($this->privates['argument_resolver.variadic'] ?? ($this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()));
        }, 8)));
    }

    /*
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('profiler');
        $a->pushProcessor(($this->privates['Eccube\\Log\\Processor\\SessionProcessor'] ?? $this->getSessionProcessorService()));
        $a->pushProcessor(($this->privates['Eccube\\Log\\Processor\\TokenProcessor'] ?? $this->getTokenProcessorService()));
        $a->pushProcessor(($this->privates['Monolog\\Processor\\UidProcessor'] ?? ($this->privates['Monolog\\Processor\\UidProcessor'] = new \Monolog\Processor\UidProcessor())));
        $a->pushProcessor(($this->privates['Monolog\\Processor\\IntrospectionProcessor'] ?? ($this->privates['Monolog\\Processor\\IntrospectionProcessor'] = new \Monolog\Processor\IntrospectionProcessor('!php/const:Monolog\\Logger::DEBUG', [0 => 'Eccube\\\\Log', 1 => 'Psr\\\\Log']))));
        $a->pushProcessor(($this->privates['Symfony\\Bridge\\Monolog\\Processor\\WebProcessor'] ?? $this->getWebProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.buffered'] ?? $this->getMonolog_Handler_BufferedService()));

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDir.''.'/profiler')), $a, true);

        $b = ($this->services['kernel'] ?? $this->get('kernel'));
        $c = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $d = new \SunCat\MobileDetectBundle\DataCollector\DeviceDataCollector(($this->privates['mobile_detect.device_view'] ?? $this->getMobileDetect_DeviceViewService()));
        $d->setRedirectConfig($this->parameters['mobile_detect.redirect']);
        $e = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $e->setKernel($b);
        }

        $instance->add(($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\Validator\DataCollector\ValidatorDataCollector(($this->services['validator'] ?? $this->getValidatorService())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, ($this->targetDir.''.'/EccubeEccube_KernelInstallContainer'), $c));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(NULL, $c));
        $instance->add(($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector())));
        $instance->add(($this->services['data_collector.cache'] ?? ($this->services['data_collector.cache'] = new \Symfony\Component\Cache\DataCollector\CacheDataCollector())));
        $instance->add(new \Symfony\Component\Translation\DataCollector\TranslationDataCollector(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()), ($this->privates['security.access.decision_manager'] ?? $this->getSecurity_Access_DecisionManagerService()), ($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), NULL));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(new \Twig\Profiler\Profile(), ($this->services['twig'] ?? $this->getTwigService())));
        $instance->add(new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(($this->services['doctrine'] ?? $this->getDoctrineService())));
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(($this->services['data_collector.dump'] ?? $this->getDataCollector_DumpService()));
        $instance->add(($this->privates['Eccube\\DataCollector\\EccubeDataCollector'] ?? $this->getEccubeDataCollectorService()));
        $instance->add($d);
        $instance->add($e);
        $instance->add(($this->privates['eccube.collector.core'] ?? $this->getEccube_Collector_CoreService()));

        return $instance;
    }

    /*
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('router');
        $a->pushProcessor(($this->privates['Eccube\\Log\\Processor\\SessionProcessor'] ?? $this->getSessionProcessorService()));
        $a->pushProcessor(($this->privates['Eccube\\Log\\Processor\\TokenProcessor'] ?? $this->getTokenProcessorService()));
        $a->pushProcessor(($this->privates['Monolog\\Processor\\UidProcessor'] ?? ($this->privates['Monolog\\Processor\\UidProcessor'] = new \Monolog\Processor\UidProcessor())));
        $a->pushProcessor(($this->privates['Monolog\\Processor\\IntrospectionProcessor'] ?? ($this->privates['Monolog\\Processor\\IntrospectionProcessor'] = new \Monolog\Processor\IntrospectionProcessor('!php/const:Monolog\\Logger::DEBUG', [0 => 'Eccube\\\\Log', 1 => 'Psr\\\\Log']))));
        $a->pushProcessor(($this->privates['Symfony\\Bridge\\Monolog\\Processor\\WebProcessor'] ?? $this->getWebProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.buffered'] ?? $this->getMonolog_Handler_BufferedService()));

        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService.php', true],
        ], [
            'routing.loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDir.'', 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => NULL, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this), $a, $this->getEnv('ECCUBE_LOCALE'));

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? ($this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())));

        return $instance;
    }

    /*
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.access.decision_manager'] ?? $this->getSecurity_Access_DecisionManagerService()), false);
    }

    /*
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), ($this->privates['security.csrf.token_storage'] ?? $this->getSecurity_Csrf_TokenStorageService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'session' => '?',
        ]));
    }

    /*
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->getParameter('session.storage.options'), new \Eccube\Session\Storage\Handler\SameSiteNoneCompatSessionHandler(new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler((\dirname(__DIR__, 4).'/var/sessions/install'))), new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0)));
    }

    /*
     * Gets the public 'state_machine.order' shared service.
     *
     * @return \Symfony\Component\Workflow\StateMachine
     */
    protected function getStateMachine_OrderService()
    {
        return $this->services['state_machine.order'] = new \Symfony\Component\Workflow\StateMachine(new \Symfony\Component\Workflow\Definition([0 => '1', 1 => '3', 2 => '4', 3 => '5', 4 => '6', 5 => '7', 6 => '8', 7 => '9'], [0 => new \Symfony\Component\Workflow\Transition('pay', '1', '6'), 1 => new \Symfony\Component\Workflow\Transition('packing', '1', '4'), 2 => new \Symfony\Component\Workflow\Transition('packing', '6', '4'), 3 => new \Symfony\Component\Workflow\Transition('cancel', '1', '3'), 4 => new \Symfony\Component\Workflow\Transition('cancel', '4', '3'), 5 => new \Symfony\Component\Workflow\Transition('cancel', '6', '3'), 6 => new \Symfony\Component\Workflow\Transition('back_to_in_progress', '3', '4'), 7 => new \Symfony\Component\Workflow\Transition('ship', '1', '5'), 8 => new \Symfony\Component\Workflow\Transition('ship', '6', '5'), 9 => new \Symfony\Component\Workflow\Transition('ship', '4', '5'), 10 => new \Symfony\Component\Workflow\Transition('return', '5', '9'), 11 => new \Symfony\Component\Workflow\Transition('cancel_return', '9', '5')], [0 => '1'], new \Symfony\Component\Workflow\Metadata\InMemoryMetadataStore([], [], new \SplObjectStorage())), new \Symfony\Component\Workflow\MarkingStore\SingleStateMarkingStore('status'), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), 'order');
    }

    /*
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator(($this->privates['translator.default'] ?? $this->getTranslator_DefaultService()));
    }

    /*
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(($this->privates['templating.locator'] ?? $this->load('getTemplating_LocatorService.php')), ($this->privates['templating.name_parser'] ?? $this->load('getTemplating_NameParserService.php')), \dirname(__DIR__, 4));
        $a->addPath((\dirname(__DIR__, 4).'/app/template/'.$this->getEnv('string:ECCUBE_TEMPLATE_CODE')));
        $a->addPath((\dirname(__DIR__, 4).'/src/Eccube/Resource/template/default'));
        $a->addPath((\dirname(__DIR__, 4).'/app/Plugin'));
        $a->addPath((\dirname(__DIR__, 4).'/app/template/admin'), 'admin');
        $a->addPath((\dirname(__DIR__, 4).'/src/Eccube/Resource/template/admin'), 'admin');
        $a->addPath((\dirname(__DIR__, 4).'/app/template/user_data'), 'user_data');
        $a->addPath((\dirname(__DIR__, 4).'/src/Eccube/Resource/template/toolbar'), 'toolbar');
        $a->addPath((\dirname(__DIR__, 4).'/src/Eccube/Resource/template/common'), 'common');
        $a->addPath((\dirname(__DIR__, 4).'/src/Eccube/Resource/template/install'));
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle/Resources/views'), 'Framework');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle/Resources/views'), '!Framework');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle/Resources/views'), 'Security');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle/Resources/views'), '!Security');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle/Resources/views'), 'Doctrine');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle/Resources/views'), '!Doctrine');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle/Resources/views'), 'Twig');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle/Resources/views'), '!Twig');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'debug-bundle/Resources/views'), 'Debug');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'debug-bundle/Resources/views'), '!Debug');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-profiler-bundle/Resources/views'), 'WebProfiler');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-profiler-bundle/Resources/views'), '!WebProfiler');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'suncat'.\DIRECTORY_SEPARATOR.'mobile-detect-bundle'.\DIRECTORY_SEPARATOR.'SunCat'.\DIRECTORY_SEPARATOR.'MobileDetectBundle/Resources/views'), 'MobileDetect');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'suncat'.\DIRECTORY_SEPARATOR.'mobile-detect-bundle'.\DIRECTORY_SEPARATOR.'SunCat'.\DIRECTORY_SEPARATOR.'MobileDetectBundle/Resources/views'), '!MobileDetect');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/Resources/views'), 'KnpPaginator');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/Resources/views'), '!KnpPaginator');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Email'), 'email');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Email'), '!email');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Form'));

        $this->services['twig'] = $instance = new \Twig\Environment($a, ['debug' => false, 'strict_variables' => false, 'base_template_class' => 'Eccube\\Twig\\Template', 'autoescape' => 'name', 'cache' => ($this->targetDir.''.'/twig'), 'charset' => 'UTF-8']);

        $b = ($this->services['translator'] ?? $this->getTranslatorService());
        $c = new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy();
        $d = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        $e = new \Symfony\Component\Asset\Context\RequestStackContext($d, '', false);
        $f = ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService());
        $g = ($this->services['router'] ?? $this->getRouterService());
        $h = new \Symfony\Component\Workflow\Registry();
        $h->addWorkflow(($this->services['state_machine.order'] ?? $this->getStateMachine_OrderService()), new \Symfony\Component\Workflow\SupportStrategy\InstanceOfSupportStrategy('Eccube\\Service\\OrderStateMachineContext'));
        $i = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $i->setDisplayOptions(['maxStringLength' => 4096, 'fileLinkFormat' => $f]);
        $j = new \SunCat\MobileDetectBundle\Twig\Extension\MobileDetectExtension(($this->privates['mobile_detect.mobile_detector.default'] ?? ($this->privates['mobile_detect.mobile_detector.default'] = new \SunCat\MobileDetectBundle\DeviceDetector\MobileDetector())), ($this->privates['mobile_detect.device_view'] ?? $this->getMobileDetect_DeviceViewService()), $this->parameters['mobile_detect.redirect']);
        $j->setRequestByRequestStack($d);
        $k = new \Symfony\Bridge\Twig\AppVariable();
        $k->setEnvironment('install');
        $k->setDebug(false);
        if ($this->has('security.token_storage')) {
            $k->setTokenStorage(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
        }
        if ($this->has('request_stack')) {
            $k->setRequestStack($d);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('/html/template/'.$this->getEnv('string:ECCUBE_TEMPLATE_CODE'), $c, $e), ['admin' => new \Symfony\Component\Asset\PathPackage('/html/template/admin', $c, $e), 'save_image' => new \Symfony\Component\Asset\PathPackage('/html/upload/save_image', $c, $e), 'plugin' => new \Symfony\Component\Asset\PathPackage('/html/plugin', $c, $e), 'install' => new \Symfony\Component\Asset\PathPackage('/html/template/install', $c, $e), 'temp_image' => new \Symfony\Component\Asset\PathPackage('/html/upload/temp_image', $c, $e), 'user_data' => new \Symfony\Component\Asset\PathPackage('/html/user_data', $c, $e)])));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($f, \dirname(__DIR__, 4), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($g));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper($d, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()))));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WorkflowExtension($h));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension(($this->services['var_dumper.cloner'] ?? $this->getVarDumper_ClonerService()), ($this->privates['var_dumper.html_dumper'] ?? $this->getVarDumper_HtmlDumperService())));
        $instance->addExtension(new \Eccube\Twig\Extension\CartServiceExtension(($this->privates['Eccube\\Service\\CartService'] ?? $this->getCartServiceService())));
        $instance->addExtension(new \Eccube\Twig\Extension\CsrfExtension(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService())));
        $instance->addExtension(new \Eccube\Twig\Extension\EccubeBlockExtension($instance, []));
        $instance->addExtension(($this->privates['Eccube\\Twig\\Extension\\EccubeExtension'] ?? $this->getEccubeExtensionService()));
        $instance->addExtension(new \Eccube\Twig\Extension\IntlExtension());
        $instance->addExtension(new \Eccube\Twig\Extension\RepositoryExtension(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService())));
        $instance->addExtension(new \Eccube\Twig\Extension\SafeTextmailEscaperExtension($instance));
        $instance->addExtension(($this->privates['Eccube\\Twig\\Extension\\TaxExtension'] ?? $this->getTaxExtensionService()));
        $instance->addExtension(new \Eccube\Twig\Extension\TwigIncludeExtension($instance));
        $instance->addExtension(new \Twig_Extension_StringLoader());
        $instance->addExtension(new \Twig\Extensions\IntlExtension());
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($i));
        $instance->addExtension($j);
        $instance->addExtension(new \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension(new \Knp\Bundle\PaginatorBundle\Helper\Processor($g, $b)));
        $instance->addExtension(new \Exercise\HTMLPurifierBundle\Twig\HTMLPurifierExtension());
        $instance->addGlobal('app', $k);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Exercise\\HTMLPurifierBundle\\Twig\\HTMLPurifierRuntime' => ['privates', 'exercise_html_purifier.twig.runtime', 'getExerciseHtmlPurifier_Twig_RuntimeService.php', true],
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService.php', true],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService.php', true],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService.php', true],
        ], [
            'Exercise\\HTMLPurifierBundle\\Twig\\HTMLPurifierRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
            'Symfony\\Component\\Form\\FormRenderer' => '?',
        ])));
        $instance->addGlobal('BaseInfo', NULL);
        $instance->addGlobal('eccube_config', ($this->services['Eccube\\Common\\EccubeConfig'] ?? ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))));
        $instance->addGlobal('event_dispatcher', ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
        $instance->addExtension(new \Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension($g));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', $this->getEnv('ECCUBE_TIMEZONE'), 0, '.', ','))->configure($instance);

        return $instance;
    }

    /*
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\TraceableValidator
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator\TraceableValidator(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService())->getValidator());
    }

    /*
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMinDepth(1);
        $instance->setMaxString(-1);
        $instance->addCasters(['Closure' => 'Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster::unsetClosureFileInfo']);

        return $instance;
    }

    /*
     * Gets the private '.legacy_resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function get_LegacyResolveControllerNameSubscriberService()
    {
        return $this->privates['.legacy_resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))), false);
    }

    /*
     * Gets the private 'Eccube\DataCollector\EccubeDataCollector' shared autowired service.
     *
     * @return \Eccube\DataCollector\EccubeDataCollector
     */
    protected function getEccubeDataCollectorService()
    {
        return $this->privates['Eccube\\DataCollector\\EccubeDataCollector'] = new \Eccube\DataCollector\EccubeDataCollector($this, ($this->services['Eccube\\Repository\\PluginRepository'] ?? $this->getPluginRepositoryService()));
    }

    /*
     * Gets the private 'Eccube\Log\Processor\SessionProcessor' shared autowired service.
     *
     * @return \Eccube\Log\Processor\SessionProcessor
     */
    protected function getSessionProcessorService()
    {
        return $this->privates['Eccube\\Log\\Processor\\SessionProcessor'] = new \Eccube\Log\Processor\SessionProcessor(($this->services['session'] ?? $this->getSessionService()));
    }

    /*
     * Gets the private 'Eccube\Log\Processor\TokenProcessor' shared autowired service.
     *
     * @return \Eccube\Log\Processor\TokenProcessor
     */
    protected function getTokenProcessorService()
    {
        return $this->privates['Eccube\\Log\\Processor\\TokenProcessor'] = new \Eccube\Log\Processor\TokenProcessor(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
    }

    /*
     * Gets the private 'Eccube\Repository\BaseInfoRepository' shared autowired service.
     *
     * @return \Eccube\Repository\BaseInfoRepository
     */
    protected function getBaseInfoRepositoryService()
    {
        return $this->privates['Eccube\\Repository\\BaseInfoRepository'] = new \Eccube\Repository\BaseInfoRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'Eccube\Repository\CartRepository' shared autowired service.
     *
     * @return \Eccube\Repository\CartRepository
     */
    protected function getCartRepositoryService()
    {
        return $this->privates['Eccube\\Repository\\CartRepository'] = new \Eccube\Repository\CartRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'Eccube\Repository\OrderRepository' shared autowired service.
     *
     * @return \Eccube\Repository\OrderRepository
     */
    protected function getOrderRepositoryService()
    {
        return $this->privates['Eccube\\Repository\\OrderRepository'] = new \Eccube\Repository\OrderRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->privates['Eccube\\Doctrine\\Query\\Queries'] ?? ($this->privates['Eccube\\Doctrine\\Query\\Queries'] = new \Eccube\Doctrine\Query\Queries())));
    }

    /*
     * Gets the private 'Eccube\Repository\ProductClassRepository' shared autowired service.
     *
     * @return \Eccube\Repository\ProductClassRepository
     */
    protected function getProductClassRepositoryService()
    {
        return $this->privates['Eccube\\Repository\\ProductClassRepository'] = new \Eccube\Repository\ProductClassRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'Eccube\Repository\ProductRepository' shared autowired service.
     *
     * @return \Eccube\Repository\ProductRepository
     */
    protected function getProductRepositoryService()
    {
        return $this->privates['Eccube\\Repository\\ProductRepository'] = new \Eccube\Repository\ProductRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->privates['Eccube\\Doctrine\\Query\\Queries'] ?? ($this->privates['Eccube\\Doctrine\\Query\\Queries'] = new \Eccube\Doctrine\Query\Queries())), ($this->services['Eccube\\Common\\EccubeConfig'] ?? ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))));
    }

    /*
     * Gets the private 'Eccube\Repository\TaxRuleRepository' shared autowired service.
     *
     * @return \Eccube\Repository\TaxRuleRepository
     */
    protected function getTaxRuleRepositoryService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['Eccube\\Repository\\TaxRuleRepository'] = $this->createProxy('TaxRuleRepository_f7111db', function () {
                return \TaxRuleRepository_f7111db::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getTaxRuleRepositoryService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'TaxRuleRepository.php';

        return new \Eccube\Repository\TaxRuleRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['Eccube\\Repository\\BaseInfoRepository'] ?? $this->getBaseInfoRepositoryService()), ($this->services['Eccube\\Common\\EccubeConfig'] ?? ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))));
    }

    /*
     * Gets the private 'Eccube\Service\CartService' shared autowired service.
     *
     * @return \Eccube\Service\CartService
     */
    protected function getCartServiceService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['Eccube\\Service\\CartService'] = $this->createProxy('CartService_9dde17f', function () {
                return \CartService_9dde17f::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getCartServiceService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'CartService.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Cart'.\DIRECTORY_SEPARATOR.'CartItemComparator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Cart'.\DIRECTORY_SEPARATOR.'ProductClassComparator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Cart'.\DIRECTORY_SEPARATOR.'CartItemAllocator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Cart'.\DIRECTORY_SEPARATOR.'SaleTypeCartAllocator.php';

        return new \Eccube\Service\CartService(($this->services['session'] ?? $this->getSessionService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['Eccube\\Repository\\ProductClassRepository'] ?? $this->getProductClassRepositoryService()), ($this->privates['Eccube\\Repository\\CartRepository'] ?? $this->getCartRepositoryService()), new \Eccube\Service\Cart\ProductClassComparator(), new \Eccube\Service\Cart\SaleTypeCartAllocator(), ($this->privates['Eccube\\Repository\\OrderRepository'] ?? $this->getOrderRepositoryService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /*
     * Gets the private 'Eccube\Twig\Extension\EccubeExtension' shared autowired service.
     *
     * @return \Eccube\Twig\Extension\EccubeExtension
     */
    protected function getEccubeExtensionService()
    {
        return $this->privates['Eccube\\Twig\\Extension\\EccubeExtension'] = new \Eccube\Twig\Extension\EccubeExtension(($this->services['Eccube\\Common\\EccubeConfig'] ?? ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))), ($this->privates['Eccube\\Repository\\ProductRepository'] ?? $this->getProductRepositoryService()));
    }

    /*
     * Gets the private 'Eccube\Twig\Extension\TaxExtension' shared autowired service.
     *
     * @return \Eccube\Twig\Extension\TaxExtension
     */
    protected function getTaxExtensionService()
    {
        return $this->privates['Eccube\\Twig\\Extension\\TaxExtension'] = new \Eccube\Twig\Extension\TaxExtension(($this->privates['Eccube\\Repository\\TaxRuleRepository'] ?? $this->getTaxRuleRepositoryService()));
    }

    /*
     * Gets the private 'Symfony\Bridge\Monolog\Processor\WebProcessor' shared autowired service.
     *
     * @return \Symfony\Bridge\Monolog\Processor\WebProcessor
     */
    protected function getWebProcessorService()
    {
        return $this->privates['Symfony\\Bridge\\Monolog\\Processor\\WebProcessor'] = new \Symfony\Bridge\Monolog\Processor\WebProcessor(['url' => 'REQUEST_URI', 'ip' => 'REMOTE_ADDR', 'http_method' => 'REQUEST_METHOD', 'server' => 'SERVER_NAME', 'referrer' => 'HTTP_REFERER', 'user_agent' => 'HTTP_USER_AGENT']);
    }

    /*
     * Gets the private 'annotations.cache_adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\PhpArrayAdapter
     */
    protected function getAnnotations_CacheAdapterService()
    {
        return \Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/annotations.php'), ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()));
    }

    /*
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\PsrCachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\PsrCachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), $this->getAnnotations_CacheAdapterService(), false);
    }

    /*
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /*
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_AnnotationsService()
    {
        return $this->privates['cache.annotations'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('+fBJj1Y+Ti', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_ValidatorService()
    {
        return $this->privates['cache.validator'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('XvFFnfuEBe', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->privates['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor());
    }

    /*
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('php');
        $a->pushProcessor(($this->privates['Eccube\\Log\\Processor\\SessionProcessor'] ?? $this->getSessionProcessorService()));
        $a->pushProcessor(($this->privates['Eccube\\Log\\Processor\\TokenProcessor'] ?? $this->getTokenProcessorService()));
        $a->pushProcessor(($this->privates['Monolog\\Processor\\UidProcessor'] ?? ($this->privates['Monolog\\Processor\\UidProcessor'] = new \Monolog\Processor\UidProcessor())));
        $a->pushProcessor(($this->privates['Monolog\\Processor\\IntrospectionProcessor'] ?? ($this->privates['Monolog\\Processor\\IntrospectionProcessor'] = new \Monolog\Processor\IntrospectionProcessor('!php/const:Monolog\\Logger::DEBUG', [0 => 'Eccube\\\\Log', 1 => 'Psr\\\\Log']))));
        $a->pushProcessor(($this->privates['Symfony\\Bridge\\Monolog\\Processor\\WebProcessor'] ?? $this->getWebProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.buffered'] ?? $this->getMonolog_Handler_BufferedService()));

        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $a, NULL, 0, false, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), false);
    }

    /*
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), \dirname(__DIR__, 4), function () {
            return ($this->privates['debug.file_link_formatter.url_format'] ?? $this->load('getDebug_FileLinkFormatter_UrlFormatService.php'));
        });
    }

    /*
     * Gets the private 'eccube.collector.core' shared autowired service.
     *
     * @return \Eccube\DataCollector\EccubeDataCollector
     */
    protected function getEccube_Collector_CoreService()
    {
        return $this->privates['eccube.collector.core'] = new \Eccube\DataCollector\EccubeDataCollector($this, ($this->services['Eccube\\Repository\\PluginRepository'] ?? $this->getPluginRepositoryService()));
    }

    /*
     * Gets the private 'esi_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SurrogateListener
     */
    protected function getEsiListenerService()
    {
        return $this->privates['esi_listener'] = new \Symfony\Component\HttpKernel\EventListener\SurrogateListener(($this->privates['esi'] ?? ($this->privates['esi'] = new \Symfony\Component\HttpKernel\HttpCache\Esi())));
    }

    /*
     * Gets the private 'exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ErrorListener
     */
    protected function getExceptionListenerService()
    {
        return $this->privates['exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorListener('error_controller', ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), false);
    }

    /*
     * Gets the private 'fragment.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener
     */
    protected function getFragment_ListenerService()
    {
        return $this->privates['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener(($this->privates['uri_signer'] ?? ($this->privates['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner($this->getEnv('ECCUBE_AUTH_MAGIC')))), '/_fragment');
    }

    /*
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->privates['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())));
    }

    /*
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->privates['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /*
     * Gets the private 'knp_paginator.subscriber.sliding_pagination' shared service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber
     */
    protected function getKnpPaginator_Subscriber_SlidingPaginationService()
    {
        return $this->privates['knp_paginator.subscriber.sliding_pagination'] = new \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber(['defaultPaginationTemplate' => '@KnpPaginator/Pagination/sliding.html.twig', 'defaultSortableTemplate' => '@KnpPaginator/Pagination/sortable_link.html.twig', 'defaultFiltrationTemplate' => '@KnpPaginator/Pagination/filtration.html.twig', 'defaultPageRange' => 5]);
    }

    /*
     * Gets the private 'locale_aware_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener
     */
    protected function getLocaleAwareListenerService()
    {
        return $this->privates['locale_aware_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener(new RewindableGenerator(function () {
            yield 0 => ($this->privates['translator.default'] ?? $this->getTranslator_DefaultService());
        }, 1), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), $this->getEnv('ECCUBE_LOCALE'), ($this->services['router'] ?? $this->getRouterService()));
    }

    /*
     * Gets the private 'mobile_detect.device_view' shared service.
     *
     * @return \SunCat\MobileDetectBundle\Helper\DeviceView
     */
    protected function getMobileDetect_DeviceViewService()
    {
        $this->privates['mobile_detect.device_view'] = $instance = new \SunCat\MobileDetectBundle\Helper\DeviceView(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        $instance->setCookieKey('device_view');
        $instance->setCookiePath('/');
        $instance->setCookieDomain('');
        $instance->setCookieSecure(false);
        $instance->setCookieHttpOnly(true);
        $instance->setSwitchParam('device_view');
        $instance->setCookieExpireDatetimeModifier('1 month');
        $instance->setRedirectConfig($this->parameters['mobile_detect.redirect']);

        return $instance;
    }

    /*
     * Gets the private 'mobile_detect.request_listener' shared service.
     *
     * @return \SunCat\MobileDetectBundle\EventListener\RequestResponseListener
     */
    protected function getMobileDetect_RequestListenerService()
    {
        return $this->privates['mobile_detect.request_listener'] = new \SunCat\MobileDetectBundle\EventListener\RequestResponseListener(($this->privates['mobile_detect.mobile_detector.default'] ?? ($this->privates['mobile_detect.mobile_detector.default'] = new \SunCat\MobileDetectBundle\DeviceDetector\MobileDetector())), ($this->privates['mobile_detect.device_view'] ?? $this->getMobileDetect_DeviceViewService()), ($this->services['router'] ?? $this->getRouterService()), $this->parameters['mobile_detect.redirect'], true);
    }

    /*
     * Gets the private 'monolog.handler.buffered' shared service.
     *
     * @return \Monolog\Handler\BufferHandler
     */
    protected function getMonolog_Handler_BufferedService()
    {
        return $this->privates['monolog.handler.buffered'] = new \Monolog\Handler\BufferHandler(new \EasyCorp\EasyLog\EasyLogHandler((\dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'log/install/site.log')), 0, 100, true, false);
    }

    /*
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, [], []);
    }

    /*
     * Gets the private 'monolog.logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_LoggerService()
    {
        $this->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(($this->privates['Eccube\\Log\\Processor\\SessionProcessor'] ?? $this->getSessionProcessorService()));
        $instance->pushProcessor(($this->privates['Eccube\\Log\\Processor\\TokenProcessor'] ?? $this->getTokenProcessorService()));
        $instance->pushProcessor(($this->privates['Monolog\\Processor\\UidProcessor'] ?? ($this->privates['Monolog\\Processor\\UidProcessor'] = new \Monolog\Processor\UidProcessor())));
        $instance->pushProcessor(($this->privates['Monolog\\Processor\\IntrospectionProcessor'] ?? ($this->privates['Monolog\\Processor\\IntrospectionProcessor'] = new \Monolog\Processor\IntrospectionProcessor('!php/const:Monolog\\Logger::DEBUG', [0 => 'Eccube\\\\Log', 1 => 'Psr\\\\Log']))));
        $instance->pushProcessor(($this->privates['Symfony\\Bridge\\Monolog\\Processor\\WebProcessor'] ?? $this->getWebProcessorService()));
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.buffered'] ?? $this->getMonolog_Handler_BufferedService()));

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->privates['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(($this->privates['Eccube\\Log\\Processor\\SessionProcessor'] ?? $this->getSessionProcessorService()));
        $instance->pushProcessor(($this->privates['Eccube\\Log\\Processor\\TokenProcessor'] ?? $this->getTokenProcessorService()));
        $instance->pushProcessor(($this->privates['Monolog\\Processor\\UidProcessor'] ?? ($this->privates['Monolog\\Processor\\UidProcessor'] = new \Monolog\Processor\UidProcessor())));
        $instance->pushProcessor(($this->privates['Monolog\\Processor\\IntrospectionProcessor'] ?? ($this->privates['Monolog\\Processor\\IntrospectionProcessor'] = new \Monolog\Processor\IntrospectionProcessor('!php/const:Monolog\\Logger::DEBUG', [0 => 'Eccube\\\\Log', 1 => 'Psr\\\\Log']))));
        $instance->pushProcessor(($this->privates['Symfony\\Bridge\\Monolog\\Processor\\WebProcessor'] ?? $this->getWebProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.buffered'] ?? $this->getMonolog_Handler_BufferedService()));

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(($this->privates['Eccube\\Log\\Processor\\SessionProcessor'] ?? $this->getSessionProcessorService()));
        $instance->pushProcessor(($this->privates['Eccube\\Log\\Processor\\TokenProcessor'] ?? $this->getTokenProcessorService()));
        $instance->pushProcessor(($this->privates['Monolog\\Processor\\UidProcessor'] ?? ($this->privates['Monolog\\Processor\\UidProcessor'] = new \Monolog\Processor\UidProcessor())));
        $instance->pushProcessor(($this->privates['Monolog\\Processor\\IntrospectionProcessor'] ?? ($this->privates['Monolog\\Processor\\IntrospectionProcessor'] = new \Monolog\Processor\IntrospectionProcessor('!php/const:Monolog\\Logger::DEBUG', [0 => 'Eccube\\\\Log', 1 => 'Psr\\\\Log']))));
        $instance->pushProcessor(($this->privates['Symfony\\Bridge\\Monolog\\Processor\\WebProcessor'] ?? $this->getWebProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.buffered'] ?? $this->getMonolog_Handler_BufferedService()));

        return $instance;
    }

    /*
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->privates['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), NULL, false, false);
    }

    /*
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /*
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), \dirname(__DIR__, 4), false);
    }

    /*
     * Gets the private 'security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->privates['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.access.authenticated_voter'] ?? $this->load('getSecurity_Access_AuthenticatedVoterService.php'));
            yield 1 => ($this->privates['security.access.simple_role_voter'] ?? ($this->privates['security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter()));
            yield 2 => ($this->privates['security.access.expression_voter'] ?? $this->load('getSecurity_Access_ExpressionVoterService.php'));
            yield 3 => ($this->privates['Eccube\\Security\\Voter\\AuthorityVoter'] ?? $this->load('getAuthorityVoterService.php'));
        }, 4), 'unanimous', false, true);
    }

    /*
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.oauth2.api'] ?? $this->load('getSecurity_Authentication_Provider_Oauth2_ApiService.php'));
            yield 1 => ($this->privates['security.authentication.provider.dao.admin'] ?? $this->load('getSecurity_Authentication_Provider_Dao_AdminService.php'));
            yield 2 => ($this->privates['security.authentication.provider.anonymous.admin'] ?? ($this->privates['security.authentication.provider.anonymous.admin'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
            yield 3 => ($this->privates['security.authentication.provider.dao.customer'] ?? $this->load('getSecurity_Authentication_Provider_Dao_CustomerService.php'));
            yield 4 => ($this->privates['security.authentication.provider.rememberme.customer'] ?? $this->load('getSecurity_Authentication_Provider_Rememberme_CustomerService.php'));
            yield 5 => ($this->privates['security.authentication.provider.anonymous.customer'] ?? ($this->privates['security.authentication.provider.anonymous.customer'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 6), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /*
     * Gets the private 'security.csrf.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage
     */
    protected function getSecurity_Csrf_TokenStorageService()
    {
        return $this->privates['security.csrf.token_storage'] = new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(($this->services['session'] ?? $this->getSessionService()));
    }

    /*
     * Gets the private 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->privates['security.firewall'] = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener(($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /*
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->privates['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.admin' => ['privates', 'security.firewall.map.context.admin', 'getSecurity_Firewall_Map_Context_AdminService.php', true],
            'security.firewall.map.context.api' => ['privates', 'security.firewall.map.context.api', 'getSecurity_Firewall_Map_Context_ApiService.php', true],
            'security.firewall.map.context.customer' => ['privates', 'security.firewall.map.context.customer', 'getSecurity_Firewall_Map_Context_CustomerService.php', true],
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService.php', true],
        ], [
            'security.firewall.map.context.admin' => '?',
            'security.firewall.map.context.api' => '?',
            'security.firewall.map.context.customer' => '?',
            'security.firewall.map.context.dev' => '?',
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.Iy.T22O'] ?? ($this->privates['.security.request_matcher.Iy.T22O'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')));
            yield 'security.firewall.map.context.api' => ($this->privates['.security.request_matcher.p4VlLPC'] ?? ($this->privates['.security.request_matcher.p4VlLPC'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/api')));
            yield 'security.firewall.map.context.admin' => ($this->privates['.security.request_matcher.UeytjTY'] ?? ($this->privates['.security.request_matcher.UeytjTY'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/'.$this->getEnv('string:ECCUBE_ADMIN_ROUTE').'/')));
            yield 'security.firewall.map.context.customer' => ($this->privates['.security.request_matcher.3UEFixr'] ?? ($this->privates['.security.request_matcher.3UEFixr'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/')));
        }, 4));
    }

    /*
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->privates['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));

        $instance->registerListener('admin', 'admin_logout', 'logout', '_csrf_token', NULL, NULL);
        $instance->registerListener('customer', 'logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /*
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->privates['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /*
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        $a = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(($this->services['doctrine'] ?? $this->getDoctrineService()), new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()), 0, 'doctrine.orm');
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $this->privates['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($a, true);
    }

    /*
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->privates['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /*
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        $this->privates['sensio_framework_extra.view.listener'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1))));

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]))->withContext('sensio_framework_extra.view.listener', $this));

        return $instance;
    }

    /*
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, false],
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'initialized_session' => '?',
            'session' => '?',
        ]));
    }

    /*
     * Gets the private 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->privates['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService.php', true],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService.php', true],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService.php', true],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService.php', true],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService.php', true],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService.php', true],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService.php', true],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService.php', true],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService.php', true],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService.php', true],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService.php', true],
        ], [
            'translation.loader.csv' => '?',
            'translation.loader.dat' => '?',
            'translation.loader.ini' => '?',
            'translation.loader.json' => '?',
            'translation.loader.mo' => '?',
            'translation.loader.php' => '?',
            'translation.loader.po' => '?',
            'translation.loader.qt' => '?',
            'translation.loader.res' => '?',
            'translation.loader.xliff' => '?',
            'translation.loader.yml' => '?',
        ]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), $this->getEnv('ECCUBE_LOCALE'), ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDir.''.'/translations'), 'debug' => false, 'resource_files' => ['af' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.af.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.af.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.af.xlf')], 'ar' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ar.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ar.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.ar.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.ar.xliff')], 'az' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.az.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.az.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.az.xlf')], 'be' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.be.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.be.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.be.xlf')], 'bg' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.bg.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.bg.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.bg.xlf')], 'bs' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.bs.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.bs.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.bs.xlf')], 'ca' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ca.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ca.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.ca.xlf')], 'cs' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.cs.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.cs.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.cs.xlf')], 'cy' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.cy.xlf')], 'da' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.da.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.da.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.da.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.da.xliff')], 'de' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.de.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.de.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.de.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.de.xliff')], 'el' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.el.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.el.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.el.xlf')], 'en' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.en.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.en.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.en.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.en.xliff'), 4 => (\dirname(__DIR__, 4).'/src/Eccube/Resource/locale'.\DIRECTORY_SEPARATOR.'messages.en.yaml'), 5 => (\dirname(__DIR__, 4).'/src/Eccube/Resource/locale'.\DIRECTORY_SEPARATOR.'validators.en.yaml')], 'es' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.es.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.es.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.es.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.es.xliff')], 'et' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.et.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.et.xlf')], 'eu' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.eu.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.eu.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.eu.xlf')], 'fa' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.fa.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.fa.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.fa.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.fa.xliff')], 'fi' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.fi.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.fi.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.fi.xlf')], 'fr' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.fr.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.fr.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.fr.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.fr.xliff')], 'gl' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.gl.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.gl.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.gl.xlf')], 'he' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.he.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.he.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.he.xlf')], 'hr' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.hr.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.hr.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.hr.xlf')], 'hu' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.hu.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.hu.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.hu.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.hu.xliff')], 'hy' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.hy.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.hy.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.hy.xlf')], 'id' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.id.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.id.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.id.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.id.xliff')], 'it' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.it.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.it.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.it.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.it.xliff')], 'ja' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ja.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ja.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.ja.xlf'), 3 => (\dirname(__DIR__, 4).'/src/Eccube/Resource/locale'.\DIRECTORY_SEPARATOR.'messages.ja.yaml'), 4 => (\dirname(__DIR__, 4).'/src/Eccube/Resource/locale'.\DIRECTORY_SEPARATOR.'validators.ja.yaml')], 'lb' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.lb.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.lb.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.lb.xlf')], 'lt' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.lt.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.lt.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.lt.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.lt.xliff')], 'lv' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.lv.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.lv.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.lv.xlf')], 'mn' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.mn.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.mn.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.mn.xlf')], 'nb' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.nb.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.nb.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.nb.xlf')], 'nl' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.nl.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.nl.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.nl.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.nl.xliff')], 'nn' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.nn.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.nn.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.nn.xlf')], 'no' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.no.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.no.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.no.xlf')], 'pl' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.pl.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.pl.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.pl.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.pl.xliff')], 'pt' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.pt.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.pt.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.pt.xlf')], 'pt_BR' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.pt_BR.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.pt_BR.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.pt_BR.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.pt_BR.xliff')], 'ro' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ro.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ro.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.ro.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.ro.xliff')], 'ru' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ru.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ru.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.ru.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.ru.xliff')], 'sk' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sk.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sk.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.sk.xlf')], 'sl' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sl.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sl.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.sl.xlf')], 'sq' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sq.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sq.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.sq.xlf')], 'sr_Cyrl' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sr_Cyrl.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sr_Cyrl.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.sr_Cyrl.xlf')], 'sr_Latn' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sr_Latn.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sr_Latn.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.sr_Latn.xlf')], 'sv' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sv.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sv.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.sv.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.sv.xliff')], 'th' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.th.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.th.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.th.xlf')], 'tl' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.tl.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.tl.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.tl.xlf')], 'tr' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.tr.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.tr.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.tr.xlf')], 'uk' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.uk.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.uk.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.uk.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.uk.xliff')], 'uz' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.uz.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.uz.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.uz.xlf')], 'vi' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.vi.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.vi.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.vi.xlf')], 'zh_CN' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.zh_CN.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.zh_CN.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.zh_CN.xlf')], 'zh_TW' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.zh_TW.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.zh_TW.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.zh_TW.xlf')], 'ky' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.ky.xliff')], 'sw' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.sw.xliff')]], 'scanned_directories' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/Resources/translations'), 4 => (\dirname(__DIR__, 4).'/src/Eccube/Resource/locale/'), 5 => (\dirname(__DIR__, 4).'/app/Customize/Resource/locale/'), 6 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle/translations'), 7 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/FrameworkBundle/translations'), 8 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle/translations'), 9 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/SecurityBundle/translations'), 10 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-cache-bundle/translations'), 11 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/DoctrineCacheBundle/translations'), 12 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle/translations'), 13 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/DoctrineBundle/translations'), 14 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-migrations-bundle/translations'), 15 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/DoctrineMigrationsBundle/translations'), 16 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-fixtures-bundle/translations'), 17 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/DoctrineFixturesBundle/translations'), 18 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src/translations'), 19 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/SensioFrameworkExtraBundle/translations'), 20 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'monolog-bundle/translations'), 21 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/MonologBundle/translations'), 22 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'swiftmailer-bundle/translations'), 23 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/SwiftmailerBundle/translations'), 24 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle/translations'), 25 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/TwigBundle/translations'), 26 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'debug-bundle/translations'), 27 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/DebugBundle/translations'), 28 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-server-bundle/translations'), 29 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/WebServerBundle/translations'), 30 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-profiler-bundle/translations'), 31 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/WebProfilerBundle/translations'), 32 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'suncat'.\DIRECTORY_SEPARATOR.'mobile-detect-bundle'.\DIRECTORY_SEPARATOR.'SunCat'.\DIRECTORY_SEPARATOR.'MobileDetectBundle/translations'), 33 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/MobileDetectBundle/translations'), 34 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/KnpPaginatorBundle/translations'), 35 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'exercise'.\DIRECTORY_SEPARATOR.'htmlpurifier-bundle'.\DIRECTORY_SEPARATOR.'src/translations'), 36 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/ExerciseHTMLPurifierBundle/translations'), 37 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'Api'.\DIRECTORY_SEPARATOR.'Bundle/translations'), 38 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/ApiBundle/translations'), 39 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'trikoder'.\DIRECTORY_SEPARATOR.'oauth2-bundle/translations'), 40 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/TrikoderOAuth2Bundle/translations'), 41 => (\dirname(__DIR__, 4).'/translations'), 42 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/translations')], 'cache_vary' => ['scanned_directories' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/Resources/translations'), 4 => 'src/Eccube/Resource/locale/', 5 => 'app/Customize/Resource/locale/', 6 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle/translations'), 7 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/FrameworkBundle/translations'), 8 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle/translations'), 9 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/SecurityBundle/translations'), 10 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-cache-bundle/translations'), 11 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/DoctrineCacheBundle/translations'), 12 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle/translations'), 13 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/DoctrineBundle/translations'), 14 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-migrations-bundle/translations'), 15 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/DoctrineMigrationsBundle/translations'), 16 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-fixtures-bundle/translations'), 17 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/DoctrineFixturesBundle/translations'), 18 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src/translations'), 19 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/SensioFrameworkExtraBundle/translations'), 20 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'monolog-bundle/translations'), 21 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/MonologBundle/translations'), 22 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'swiftmailer-bundle/translations'), 23 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/SwiftmailerBundle/translations'), 24 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle/translations'), 25 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/TwigBundle/translations'), 26 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'debug-bundle/translations'), 27 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/DebugBundle/translations'), 28 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-server-bundle/translations'), 29 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/WebServerBundle/translations'), 30 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-profiler-bundle/translations'), 31 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/WebProfilerBundle/translations'), 32 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'suncat'.\DIRECTORY_SEPARATOR.'mobile-detect-bundle'.\DIRECTORY_SEPARATOR.'SunCat'.\DIRECTORY_SEPARATOR.'MobileDetectBundle/translations'), 33 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/MobileDetectBundle/translations'), 34 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/KnpPaginatorBundle/translations'), 35 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'exercise'.\DIRECTORY_SEPARATOR.'htmlpurifier-bundle'.\DIRECTORY_SEPARATOR.'src/translations'), 36 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/ExerciseHTMLPurifierBundle/translations'), 37 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'Api'.\DIRECTORY_SEPARATOR.'Bundle/translations'), 38 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/ApiBundle/translations'), 39 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'trikoder'.\DIRECTORY_SEPARATOR.'oauth2-bundle/translations'), 40 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/TrikoderOAuth2Bundle/translations'), 41 => 'translations', 42 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube/Resources/translations')]]]);

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? ($this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())));
        $instance->setFallbackLocales([0 => $this->getEnv('ECCUBE_LOCALE'), 1 => $this->getEnv('ECCUBE_LOCALE')]);

        return $instance;
    }

    /*
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilder
     */
    protected function getValidator_BuilderService()
    {
        $this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Eccube\\Form\\Validator\\EmailValidator' => ['privates', 'Eccube\\Form\\Validator\\EmailValidator', 'getEmailValidatorService.php', true],
            'Eccube\\Form\\Validator\\TwigLintValidator' => ['privates', 'Eccube\\Form\\Validator\\TwigLintValidator', 'getTwigLintValidatorService.php', true],
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService.php', true],
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService.php', true],
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => ['privates', 'validator.email', 'getValidator_EmailService.php', true],
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => ['privates', 'validator.expression', 'getValidator_ExpressionService.php', true],
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => ['privates', 'validator.not_compromised_password', 'getValidator_NotCompromisedPasswordService.php', true],
            'doctrine.orm.validator.unique' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService.php', true],
            'security.validator.user_password' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService.php', true],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService.php', true],
        ], [
            'Eccube\\Form\\Validator\\EmailValidator' => '?',
            'Eccube\\Form\\Validator\\TwigLintValidator' => '?',
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => '?',
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => '?',
            'doctrine.orm.validator.unique' => '?',
            'security.validator.user_password' => '?',
            'validator.expression' => '?',
        ])));
        $instance->setTranslator(new \Symfony\Component\Validator\Util\LegacyTranslatorProxy(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings([0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/config/validation.xml')]);
        $instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->setMappingCache(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/validation.php'), ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService())));
        $instance->addObjectInitializers([0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService()))]);
        $instance->addLoader(new \Symfony\Bridge\Doctrine\Validator\DoctrineLoader(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), NULL));

        return $instance;
    }

    /*
     * Gets the private 'var_dumper.html_dumper' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\HtmlDumper
     */
    protected function getVarDumper_HtmlDumperService()
    {
        $this->privates['var_dumper.html_dumper'] = $instance = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);

        $instance->setDisplayOptions(['fileLinkFormat' => ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())]);

        return $instance;
    }

    /**
     * @return array|bool|float|int|string|null
     */
    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name): bool
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.cache_dir' => false,
        'locale' => false,
        'timezone' => false,
        'currency' => false,
        'eccube_database_url' => false,
        'eccube_mailer_url' => false,
        'eccube_admin_route' => false,
        'eccube_user_data_route' => false,
        'eccube_admin_allow_hosts' => false,
        'eccube_admin_deny_hosts' => false,
        'eccube_force_ssl' => false,
        'eccube.theme' => false,
        'eccube_theme_code' => false,
        'eccube_auth_magic' => false,
        'eccube_theme_front_dir' => false,
        'eccube_html_front_dir' => false,
        'eccube_csv_temp_realdir' => false,
        'eccube_owners_store_url' => false,
        'eccube_package_api_url' => false,
        'eccube_content_maintenance_file_path' => false,
        'eccube_2fa_enabled' => false,
        'eccube_2fa_cookie_name' => false,
        'eccube_2fa_expire' => false,
        'kernel.secret' => false,
        'kernel.default_locale' => false,
        'session.storage.options' => false,
        'validator.mapping.cache.file' => false,
        'profiler.storage.dsn' => false,
        'serializer.mapping.cache.file' => false,
        'doctrine.orm.proxy_dir' => false,
        'swiftmailer.spool.default.memory.path' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDir.''; break;
            case 'locale': $value = $this->getEnv('ECCUBE_LOCALE'); break;
            case 'timezone': $value = $this->getEnv('ECCUBE_TIMEZONE'); break;
            case 'currency': $value = $this->getEnv('ECCUBE_CURRENCY'); break;
            case 'eccube_database_url': $value = $this->getEnv('DATABASE_URL'); break;
            case 'eccube_mailer_url': $value = $this->getEnv('MAILER_URL'); break;
            case 'eccube_admin_route': $value = $this->getEnv('ECCUBE_ADMIN_ROUTE'); break;
            case 'eccube_user_data_route': $value = $this->getEnv('ECCUBE_USER_DATA_ROUTE'); break;
            case 'eccube_admin_allow_hosts': $value = $this->getEnv('json:ECCUBE_ADMIN_ALLOW_HOSTS'); break;
            case 'eccube_admin_deny_hosts': $value = $this->getEnv('json:ECCUBE_ADMIN_DENY_HOSTS'); break;
            case 'eccube_force_ssl': $value = $this->getEnv('bool:ECCUBE_FORCE_SSL'); break;
            case 'eccube.theme': $value = $this->getEnv('ECCUBE_TEMPLATE_CODE'); break;
            case 'eccube_theme_code': $value = $this->getEnv('ECCUBE_TEMPLATE_CODE'); break;
            case 'eccube_auth_magic': $value = $this->getEnv('ECCUBE_AUTH_MAGIC'); break;
            case 'eccube_theme_front_dir': $value = (\dirname(__DIR__, 4).'/app/template/'.$this->getEnv('string:ECCUBE_TEMPLATE_CODE')); break;
            case 'eccube_html_front_dir': $value = (\dirname(__DIR__, 4).'/html/template/'.$this->getEnv('string:ECCUBE_TEMPLATE_CODE')); break;
            case 'eccube_csv_temp_realdir': $value = ($this->targetDir.''.'/install/eccube'); break;
            case 'eccube_owners_store_url': $value = $this->getEnv('ECCUBE_OWNERS_STORE_URL'); break;
            case 'eccube_package_api_url': $value = $this->getEnv('ECCUBE_PACKAGE_API_URL'); break;
            case 'eccube_content_maintenance_file_path': $value = $this->getEnv('ECCUBE_MAINTENANCE_FILE_PATH'); break;
            case 'eccube_2fa_enabled': $value = $this->getEnv('ECCUBE_2FA_ENABLED'); break;
            case 'eccube_2fa_cookie_name': $value = $this->getEnv('ECCUBE_2FA_COOKIE_NAME'); break;
            case 'eccube_2fa_expire': $value = $this->getEnv('ECCUBE_2FA_EXPIRE'); break;
            case 'kernel.secret': $value = $this->getEnv('ECCUBE_AUTH_MAGIC'); break;
            case 'kernel.default_locale': $value = $this->getEnv('ECCUBE_LOCALE'); break;
            case 'session.storage.options': $value = [
                'cache_limiter' => '0',
                'name' => $this->getEnv('ECCUBE_COOKIE_NAME'),
                'cookie_lifetime' => $this->getEnv('ECCUBE_COOKIE_LIFETIME'),
                'cookie_httponly' => true,
                'gc_maxlifetime' => $this->getEnv('ECCUBE_GC_MAXLIFETIME'),
                'gc_probability' => 1,
            ]; break;
            case 'validator.mapping.cache.file': $value = ($this->targetDir.''.'/validation.php'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDir.''.'/profiler'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDir.''.'/serialization.php'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDir.''.'/doctrine/orm/Proxies'); break;
            case 'swiftmailer.spool.default.memory.path': $value = ($this->targetDir.''.'/swiftmailer/spool/default'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.root_dir' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'),
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'install',
            'kernel.debug' => false,
            'kernel.name' => 'Eccube',
            'kernel.logs_dir' => (\dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'log'),
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'DoctrineCacheBundle' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'WebServerBundle' => 'Symfony\\Bundle\\WebServerBundle\\WebServerBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'MobileDetectBundle' => 'SunCat\\MobileDetectBundle\\MobileDetectBundle',
                'KnpPaginatorBundle' => 'Knp\\Bundle\\PaginatorBundle\\KnpPaginatorBundle',
                'ExerciseHTMLPurifierBundle' => 'Exercise\\HTMLPurifierBundle\\ExerciseHTMLPurifierBundle',
                'ApiBundle' => 'Plugin\\Api\\Bundle\\ApiBundle',
                'TrikoderOAuth2Bundle' => 'Trikoder\\Bundle\\OAuth2Bundle\\TrikoderOAuth2Bundle',
            ],
            'kernel.bundles_metadata' => [
                'FrameworkBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'SecurityBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'DoctrineCacheBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-cache-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineCacheBundle',
                ],
                'DoctrineBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'DoctrineMigrationsBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ],
                'DoctrineFixturesBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-fixtures-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\FixturesBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'MonologBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'SwiftmailerBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ],
                'TwigBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'DebugBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'debug-bundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ],
                'WebServerBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-server-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebServerBundle',
                ],
                'WebProfilerBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-profiler-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ],
                'MobileDetectBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'suncat'.\DIRECTORY_SEPARATOR.'mobile-detect-bundle'.\DIRECTORY_SEPARATOR.'SunCat'.\DIRECTORY_SEPARATOR.'MobileDetectBundle'),
                    'namespace' => 'SunCat\\MobileDetectBundle',
                ],
                'KnpPaginatorBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle'),
                    'namespace' => 'Knp\\Bundle\\PaginatorBundle',
                ],
                'ExerciseHTMLPurifierBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'exercise'.\DIRECTORY_SEPARATOR.'htmlpurifier-bundle'.\DIRECTORY_SEPARATOR.'src'),
                    'namespace' => 'Exercise\\HTMLPurifierBundle',
                ],
                'ApiBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'Api'.\DIRECTORY_SEPARATOR.'Bundle'),
                    'namespace' => 'Plugin\\Api\\Bundle',
                ],
                'TrikoderOAuth2Bundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'trikoder'.\DIRECTORY_SEPARATOR.'oauth2-bundle'),
                    'namespace' => 'Trikoder\\Bundle\\OAuth2Bundle',
                ],
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'EccubeEccube_KernelInstallContainer',
            'container.dumper.inline_class_loader' => true,
            'env(ECCUBE_LOCALE)' => 'ja',
            'env(ECCUBE_TIMEZONE)' => 'Asia/Tokyo',
            'env(ECCUBE_CURRENCY)' => 'JPY',
            'env(DATABASE_URL)' => '',
            'env(DATABASE_SERVER_VERSION)' => NULL,
            'env(ECCUBE_ADMIN_ROUTE)' => 'admin',
            'env(ECCUBE_USER_DATA_ROUTE)' => 'user_data',
            'env(ECCUBE_ADMIN_ALLOW_HOSTS)' => '[]',
            'env(ECCUBE_ADMIN_DENY_HOSTS)' => '[]',
            'env(ECCUBE_FORCE_SSL)' => false,
            'env(ECCUBE_TEMPLATE_CODE)' => 'default',
            'env(ECCUBE_AUTH_MAGIC)' => '<change.me>',
            'env(ECCUBE_COOKIE_NAME)' => 'eccube',
            'env(ECCUBE_COOKIE_PATH)' => '/',
            'env(ECCUBE_COOKIE_LIFETIME)' => '0',
            'env(ECCUBE_GC_MAXLIFETIME)' => '1440',
            'env(ECCUBE_PACKAGE_API_URL)' => 'https://package-api-c2.ec-cube.net',
            'env(ECCUBE_OWNERS_STORE_URL)' => 'https://www.ec-cube.net',
            'env(ECCUBE_MAINTENANCE_FILE_PATH)' => (\dirname(__DIR__, 4).'/.maintenance'),
            'env(ECCUBE_2FA_ENABLED)' => true,
            'env(ECCUBE_2FA_COOKIE_NAME)' => 'eccube_2fa',
            'env(ECCUBE_2FA_EXPIRE)' => '14',
            'eccube_auth_type' => 'HMAC',
            'eccube_password_hash_algos' => 'SHA256',
            'eccube_theme_app_dir' => (\dirname(__DIR__, 4).'/app/template'),
            'eccube_theme_src_dir' => (\dirname(__DIR__, 4).'/src/Eccube/Resource/template'),
            'eccube_theme_user_data_dir' => (\dirname(__DIR__, 4).'/app/template/user_data'),
            'eccube_theme_front_default_dir' => (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/default'),
            'eccube_theme_admin_dir' => (\dirname(__DIR__, 4).'/app/template/admin'),
            'eccube_theme_admin_default_dir' => (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/admin'),
            'eccube_html_dir' => (\dirname(__DIR__, 4).'/html'),
            'eccube_html_plugin_dir' => (\dirname(__DIR__, 4).'/html/plugin'),
            'eccube_html_admin_dir' => (\dirname(__DIR__, 4).'/html/template/admin'),
            'eccube_twig_block_templates' => [

            ],
            'eccube_save_image_dir' => (\dirname(__DIR__, 4).'/html/upload/save_image'),
            'eccube_temp_image_dir' => (\dirname(__DIR__, 4).'/html/upload/temp_image'),
            'eccube_csv_size' => 5,
            'eccube_csv_split_lines' => 100,
            'eccube_default_password' => '**********',
            'eccube_deliv_addr_max' => 20,
            'eccube_deliv_date_end_max' => 21,
            'eccube_id_max_len' => 50,
            'eccube_id_min_len' => 4,
            'eccube_int_len' => 9,
            'eccube_category_nest_level' => 5,
            'eccube_lltext_len' => 99999,
            'eccube_ltext_len' => 3000,
            'eccube_max_total_fee' => 9999999999,
            'eccube_mltext_len' => 1000,
            'eccube_mtext_len' => 200,
            'plugin_html_realdir' => (\dirname(__DIR__, 4).'/html/plugin/'),
            'plugin_html_urlpath' => '/plugin/',
            'plugin_realdir' => (\dirname(__DIR__, 4).'/app/Plugin'),
            'plugin_data_realdir' => (\dirname(__DIR__, 4).'/app/PluginData'),
            'plugin_temp_realdir' => '/PATH/TO/WEB_ROOT/src/Eccube/Repository/Master/upload/temp_plugin/',
            'eccube_price_len' => 8,
            'eccube_search_pmax' => 12,
            'eccube_sitemap_products_per_page' => 1000,
            'eccube_stext_len' => 255,
            'eccube_sltext_len' => 500,
            'eccube_smtext_len' => 100,
            'eccube_tax_rule_priority' => [
                0 => 'product_id',
                1 => 'product_class_id',
                2 => 'pref_id',
                3 => 'country_id',
            ],
            'eccube_url_len' => 1024,
            'eccube_default_page_count' => 50,
            'eccube_admin_product_stock_status' => 3,
            'eccube_customer_reset_expire' => 10,
            'eccube_csv_export_separator' => ',',
            'eccube_csv_export_encoding' => 'SJIS-win',
            'eccube_csv_import_encoding' => [
                0 => 'UTF-8',
                1 => 'SJIS-win',
                2 => 'SJIS',
                3 => 'EUC-JP',
                4 => 'ASCII',
                5 => 'JIS',
            ],
            'eccube_csv_export_date_format' => 'Y-m-d H:i:s',
            'eccube_csv_export_multidata_separator' => ',',
            'eccube_csv_import_delimiter' => ',',
            'eccube_csv_import_enclosure' => '"',
            'eccube_csv_import_escape' => '\\',
            'eccube_info_url' => 'https://www.ec-cube.net/info/4/',
            'eccube_official_site_url' => 'https://www.ec-cube.net',
            'eccube_community_site_url' => 'https://xoops.ec-cube.net',
            'eccube_document_url' => 'http://doc4.ec-cube.net',
            'eccube_name_len' => 16,
            'eccube_kana_len' => 25,
            'eccube_address1_len' => 32,
            'eccube_address2_len' => 32,
            'eccube_birth_max' => 110,
            'eccube_product_order_price_lower' => 1,
            'eccube_product_order_newer' => 2,
            'eccube_product_order_price_higher' => 3,
            'eccube_price_max' => 2147483647,
            'eccube_tel_len_max' => 14,
            'eccube_postal_code' => 8,
            'eccube_password_min_len' => 8,
            'eccube_password_max_len' => 32,
            'eccube_composer_memory_limit' => '1536M',
            'eccube_order_mail_template_id' => 1,
            'eccube_entry_confirm_mail_template_id' => 2,
            'eccube_entry_complete_mail_template_id' => 3,
            'eccube_customer_withdraw_mail_template_id' => 4,
            'eccube_contact_mail_template_id' => 5,
            'eccube_forgot_mail_template_id' => 6,
            'eccube_reset_complete_mail_template_id' => 7,
            'eccube_shipping_notify_mail_template_id' => 8,
            'eccube_rfc_email_check' => false,
            'eccube_order_no_format' => '',
            'eccube_order_pdf_message_len' => 30,
            'eccube_news_start_year' => 2000,
            'eccube_result_cache_lifetime' => 3600,
            'eccube_result_cache_lifetime_short' => 10,
            'eccube_nav' => [
                'product' => [
                    'name' => 'admin.product.product_management',
                    'icon' => 'fa-cube',
                    'children' => [
                        'product_master' => [
                            'name' => 'admin.product.product_list',
                            'url' => 'admin_product',
                        ],
                        'product_edit' => [
                            'name' => 'admin.product.product_registration',
                            'url' => 'admin_product_product_new',
                        ],
                        'class_name' => [
                            'name' => 'admin.product.class_management',
                            'url' => 'admin_product_class_name',
                        ],
                        'class_category' => [
                            'name' => 'admin.product.category_management',
                            'url' => 'admin_product_category',
                        ],
                        'product_tag' => [
                            'name' => 'admin.product.tag_management',
                            'url' => 'admin_product_tag',
                        ],
                        'product_csv_import' => [
                            'name' => 'admin.product.product_csv_upload',
                            'url' => 'admin_product_csv_import',
                        ],
                        'category_csv_import' => [
                            'name' => 'admin.product.category_csv_upload',
                            'url' => 'admin_product_category_csv_import',
                        ],
                    ],
                ],
                'order' => [
                    'name' => 'admin.order.order_management',
                    'icon' => 'fa-shopping-cart',
                    'children' => [
                        'order_master' => [
                            'name' => 'admin.order.order_list',
                            'url' => 'admin_order',
                        ],
                        'order_edit' => [
                            'name' => 'admin.order.order_registration',
                            'url' => 'admin_order_new',
                        ],
                        'shipping_csv_import' => [
                            'name' => 'admin.order.shipping_csv_upload',
                            'url' => 'admin_shipping_csv_import',
                        ],
                    ],
                ],
                'customer' => [
                    'name' => 'admin.customer.customer_management',
                    'icon' => 'fa-users',
                    'children' => [
                        'customer_master' => [
                            'name' => 'admin.customer.customer_list',
                            'url' => 'admin_customer',
                        ],
                        'customer_edit' => [
                            'name' => 'admin.customer.customer_registration',
                            'url' => 'admin_customer_new',
                        ],
                    ],
                ],
                'content' => [
                    'name' => 'admin.content.contents_management',
                    'icon' => 'fa-file-text-o',
                    'children' => [
                        'news' => [
                            'name' => 'admin.content.news_management',
                            'url' => 'admin_content_news',
                        ],
                        'file' => [
                            'name' => 'admin.content.file_management',
                            'url' => 'admin_content_file',
                        ],
                        'layout' => [
                            'name' => 'admin.content.layout_management',
                            'url' => 'admin_content_layout',
                        ],
                        'page' => [
                            'name' => 'admin.content.page_management',
                            'url' => 'admin_content_page',
                        ],
                        'css' => [
                            'name' => 'admin.content.css_management',
                            'url' => 'admin_content_css',
                        ],
                        'js' => [
                            'name' => 'admin.content.js_management',
                            'url' => 'admin_content_js',
                        ],
                        'block' => [
                            'name' => 'admin.content.block_management',
                            'url' => 'admin_content_block',
                        ],
                        'cache' => [
                            'name' => 'admin.content.cache_management',
                            'url' => 'admin_content_cache',
                        ],
                        'maintenance' => [
                            'name' => 'admin.content.maintenance_management',
                            'url' => 'admin_content_maintenance',
                        ],
                    ],
                ],
                'setting' => [
                    'name' => 'admin.setting',
                    'icon' => 'fa-cog',
                    'children' => [
                        'shop' => [
                            'name' => 'admin.setting.shop',
                            'children' => [
                                'shop_index' => [
                                    'name' => 'admin.setting.shop.shop_setting',
                                    'url' => 'admin_setting_shop',
                                ],
                                'shop_tradelaw' => [
                                    'name' => 'admin.setting.shop.tradelaw_setting',
                                    'url' => 'admin_content_page_edit',
                                    'param' => [
                                        'id' => 21,
                                        'return' => 'tradelaw',
                                    ],
                                ],
                                'shop_agreement' => [
                                    'name' => 'admin.setting.shop.agreement_setting',
                                    'url' => 'admin_content_page_edit',
                                    'param' => [
                                        'id' => 19,
                                        'return' => 'agreement',
                                    ],
                                ],
                                'shop_payment' => [
                                    'name' => 'admin.setting.shop.payment_setting',
                                    'url' => 'admin_setting_shop_payment',
                                ],
                                'shop_delivery' => [
                                    'name' => 'admin.setting.shop.delivery_setting',
                                    'url' => 'admin_setting_shop_delivery',
                                ],
                                'shop_tax' => [
                                    'name' => 'admin.setting.shop.tax_setting',
                                    'url' => 'admin_setting_shop_tax',
                                ],
                                'shop_mail' => [
                                    'name' => 'admin.setting.shop.mail_setting',
                                    'url' => 'admin_setting_shop_mail',
                                ],
                                'shop_csv' => [
                                    'name' => 'admin.setting.shop.csv_setting',
                                    'url' => 'admin_setting_shop_csv',
                                ],
                                'shop_order_status' => [
                                    'name' => 'admin.setting.shop.order_status_setting',
                                    'url' => 'admin_setting_shop_order_status',
                                ],
                            ],
                        ],
                        'system' => [
                            'name' => 'admin.setting.system',
                            'children' => [
                                'member' => [
                                    'name' => 'admin.setting.system.member_management',
                                    'url' => 'admin_setting_system_member',
                                ],
                                'authority' => [
                                    'name' => 'admin.setting.system.authority_management',
                                    'url' => 'admin_setting_system_authority',
                                ],
                                'security' => [
                                    'name' => 'admin.setting.system.security_management',
                                    'url' => 'admin_setting_system_security',
                                ],
                                'login_history' => [
                                    'name' => 'admin.setting.system.login_history',
                                    'url' => 'admin_setting_system_login_history',
                                ],
                                'log' => [
                                    'name' => 'admin.setting.system.log_display',
                                    'url' => 'admin_setting_system_log',
                                ],
                                'masterdata' => [
                                    'name' => 'admin.setting.system.master_data_management',
                                    'url' => 'admin_setting_system_masterdata',
                                ],
                                'system_index' => [
                                    'name' => 'admin.setting.system.system_info',
                                    'url' => 'admin_setting_system_system',
                                ],
                            ],
                        ],
                    ],
                ],
                'store' => [
                    'name' => 'admin.store',
                    'icon' => 'fa-plug',
                    'children' => [
                        'plugin' => [
                            'name' => 'admin.store.plugin',
                            'children' => [
                                'plugin_owners_search' => [
                                    'name' => 'admin.store.plugin.plugin_owners_install',
                                    'url' => 'admin_store_plugin_owners_search',
                                ],
                                'plugin_list' => [
                                    'name' => 'admin.store.plugin.plugin_list',
                                    'url' => 'admin_store_plugin',
                                ],
                            ],
                        ],
                        'template' => [
                            'name' => 'admin.store.template',
                            'children' => [
                                'template_list' => [
                                    'name' => 'admin.store.template.template_list',
                                    'url' => 'admin_store_template',
                                ],
                                'template_install' => [
                                    'name' => 'admin.store.template.template_install',
                                    'url' => 'admin_store_template_install',
                                ],
                            ],
                        ],
                        'authentication_setting' => [
                            'name' => 'admin.store.setting',
                            'url' => 'admin_store_authentication_setting',
                        ],
                    ],
                ],
            ],
            'env(MAILER_URL)' => '',
            'env(ECCUBE_OAUTH2_AUTHORIZATION_SERVER_PRIVATE_KEY)' => (\dirname(__DIR__, 4).'/app/PluginData/Api/oauth/private.key'),
            'env(ECCUBE_OAUTH2_RESOURCE_SERVER_PUBLIC_KEY)' => (\dirname(__DIR__, 4).'/app/PluginData/Api/oauth/public.key'),
            'env(ECCUBE_OAUTH2_ENCRYPTION_KEY)' => '<change.me>',
            'gmc_proxy_url' => 'https://gmc-proxy.ec-cube.net',
            'mail_magazine_dir' => (\dirname(__DIR__, 4).'/app/mail_magazine'),
            'product_review_display_count_min' => 1,
            'product_review_display_count_max' => 30,
            'plugin_recommend.text_area_len' => 4000,
            'related_product.text_area_len' => 4000,
            'related_product.max_item_count' => 6,
            'sales_report_product_maximum_display' => 20,
            'securitychecker4_receiver' => 'https://www.ec-cube.net/info/security/receiver.php',
            'eccube.plugins.enabled' => [

            ],
            'eccube.plugins.disabled' => [
                0 => 'Api',
                1 => 'Coupon4',
                2 => 'GMC',
                3 => 'MailMagazine4',
                4 => 'ProductReview4',
                5 => 'Recommend4',
                6 => 'RelatedProduct4',
                7 => 'SalesReport4',
                8 => 'Securitychecker4',
                9 => 'SiteKit',
            ],
            'event_dispatcher.event_aliases' => [
                'Symfony\\Component\\Console\\Event\\ConsoleCommandEvent' => 'console.command',
                'Symfony\\Component\\Console\\Event\\ConsoleErrorEvent' => 'console.error',
                'Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent' => 'console.terminate',
                'Symfony\\Component\\Form\\Event\\PreSubmitEvent' => 'form.pre_submit',
                'Symfony\\Component\\Form\\Event\\SubmitEvent' => 'form.submit',
                'Symfony\\Component\\Form\\Event\\PostSubmitEvent' => 'form.post_submit',
                'Symfony\\Component\\Form\\Event\\PreSetDataEvent' => 'form.pre_set_data',
                'Symfony\\Component\\Form\\Event\\PostSetDataEvent' => 'form.post_set_data',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent' => 'kernel.controller_arguments',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent' => 'kernel.controller',
                'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent' => 'kernel.response',
                'Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent' => 'kernel.finish_request',
                'Symfony\\Component\\HttpKernel\\Event\\RequestEvent' => 'kernel.request',
                'Symfony\\Component\\HttpKernel\\Event\\ViewEvent' => 'kernel.view',
                'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent' => 'kernel.exception',
                'Symfony\\Component\\HttpKernel\\Event\\TerminateEvent' => 'kernel.terminate',
                'Symfony\\Component\\Workflow\\Event\\GuardEvent' => 'workflow.guard',
                'Symfony\\Component\\Workflow\\Event\\LeaveEvent' => 'workflow.leave',
                'Symfony\\Component\\Workflow\\Event\\TransitionEvent' => 'workflow.transition',
                'Symfony\\Component\\Workflow\\Event\\EnterEvent' => 'workflow.enter',
                'Symfony\\Component\\Workflow\\Event\\EnteredEvent' => 'workflow.entered',
                'Symfony\\Component\\Workflow\\Event\\CompletedEvent' => 'workflow.completed',
                'Symfony\\Component\\Workflow\\Event\\AnnounceEvent' => 'workflow.announce',
                'Symfony\\Component\\Security\\Core\\Event\\AuthenticationSuccessEvent' => 'security.authentication.success',
                'Symfony\\Component\\Security\\Core\\Event\\AuthenticationFailureEvent' => 'security.authentication.failure',
                'Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent' => 'security.interactive_login',
                'Symfony\\Component\\Security\\Http\\Event\\SwitchUserEvent' => 'security.switch_user',
            ],
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.error_controller' => 'error_controller',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.save_path' => (\dirname(__DIR__, 4).'/var/sessions/install'),
            'session.metadata.update_threshold' => 0,
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => [
                0 => 'twig',
            ],
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'translator.default_path' => (\dirname(__DIR__, 4).'/translations'),
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => 0,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'router.cache_class_prefix' => 'EccubeEccube_KernelInstallContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'security.authentication.trust_resolver.anonymous_class' => NULL,
            'security.authentication.trust_resolver.rememberme_class' => NULL,
            'security.role_hierarchy.roles' => [

            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [
                'oauth2_grant' => [
                    'class' => 'Trikoder\\Bundle\\OAuth2Bundle\\DBAL\\Type\\Grant',
                    'commented' => NULL,
                ],
                'oauth2_redirect_uri' => [
                    'class' => 'Trikoder\\Bundle\\OAuth2Bundle\\DBAL\\Type\\RedirectUri',
                    'commented' => NULL,
                ],
                'oauth2_scope' => [
                    'class' => 'Trikoder\\Bundle\\OAuth2Bundle\\DBAL\\Type\\Scope',
                    'commented' => NULL,
                ],
                'datetime' => [
                    'class' => 'Eccube\\Doctrine\\DBAL\\Types\\UTCDateTimeType',
                    'commented' => NULL,
                ],
                'datetimetz' => [
                    'class' => 'Eccube\\Doctrine\\DBAL\\Types\\UTCDateTimeTzType',
                    'commented' => NULL,
                ],
            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine_migrations.dir_name' => (\dirname(__DIR__, 4).'/app/DoctrineMigrations'),
            'doctrine_migrations.namespace' => 'DoctrineMigrations',
            'doctrine_migrations.organize_migrations' => false,
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.custom_template' => NULL,
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.console' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                        1 => 'doctrine',
                        2 => 'console',
                    ],
                ],
                'monolog.handler.buffered' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                    ],
                ],
            ],
            'swiftmailer.mailer.default.transport.name' => 'dynamic',
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => [
                'default' => 'swiftmailer.mailer.default',
            ],
            'swiftmailer.default_mailer' => 'default',
            'twig.exception_listener.controller' => NULL,
            'twig.form.resources' => [
                0 => 'form_div_layout.html.twig',
                1 => 'bootstrap_4_layout.html.twig',
            ],
            'twig.default_path' => (\dirname(__DIR__, 4).'/templates'),
            'env(VAR_DUMPER_SERVER)' => '127.0.0.1:9912',
            'mobile_detect.mobile_detector.class' => 'SunCat\\MobileDetectBundle\\DeviceDetector\\MobileDetector',
            'mobile_detect.device_view.class' => 'SunCat\\MobileDetectBundle\\Helper\\DeviceView',
            'mobile_detect.cookie_key' => 'device_view',
            'mobile_detect.switch_param' => 'device_view',
            'mobile_detect.cookie_expire_datetime_modifier' => '1 month',
            'mobile_detect.request_response_listener.class' => 'SunCat\\MobileDetectBundle\\EventListener\\RequestResponseListener',
            'mobile_detect.redirect' => [
                'mobile' => [
                    'is_enabled' => false,
                    'host' => NULL,
                    'status_code' => 302,
                    'action' => 'redirect',
                ],
                'tablet' => [
                    'is_enabled' => false,
                    'host' => NULL,
                    'status_code' => 302,
                    'action' => 'redirect',
                ],
                'full' => [
                    'is_enabled' => false,
                    'host' => NULL,
                    'status_code' => 302,
                    'action' => 'redirect',
                ],
                'detect_tablet_as_mobile' => false,
            ],
            'mobile_detect.switch_device_view.save_referer_path' => true,
            'mobile_detect.twig.extension.class' => 'SunCat\\MobileDetectBundle\\Twig\\Extension\\MobileDetectExtension',
            'mobile_detect.cookie_path' => '/',
            'mobile_detect.cookie_domain' => '',
            'mobile_detect.cookie_secure' => false,
            'mobile_detect.cookie_httponly' => true,
            'knp_paginator.class' => 'Knp\\Component\\Pager\\Paginator',
            'knp_paginator.helper.processor.class' => 'Knp\\Bundle\\PaginatorBundle\\Helper\\Processor',
            'knp_paginator.template.pagination' => '@KnpPaginator/Pagination/sliding.html.twig',
            'knp_paginator.template.filtration' => '@KnpPaginator/Pagination/filtration.html.twig',
            'knp_paginator.template.sortable' => '@KnpPaginator/Pagination/sortable_link.html.twig',
            'knp_paginator.page_range' => 5,
            'trikoder.oauth2.persistence.doctrine.enabled' => true,
            'trikoder.oauth2.persistence.doctrine.manager' => 'default',
            'data_collector.templates' => [
                'data_collector.request' => [
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ],
                'data_collector.time' => [
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ],
                'data_collector.memory' => [
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ],
                'data_collector.validator' => [
                    0 => 'validator',
                    1 => '@WebProfiler/Collector/validator.html.twig',
                ],
                'data_collector.ajax' => [
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ],
                'data_collector.form' => [
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ],
                'data_collector.exception' => [
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ],
                'data_collector.logger' => [
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ],
                'data_collector.events' => [
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ],
                'data_collector.router' => [
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ],
                'data_collector.cache' => [
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ],
                'data_collector.translation' => [
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ],
                'data_collector.security' => [
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ],
                'data_collector.twig' => [
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ],
                'data_collector.doctrine' => [
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ],
                'swiftmailer.data_collector' => [
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ],
                'data_collector.dump' => [
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ],
                'Eccube\\DataCollector\\EccubeDataCollector' => NULL,
                'mobile_detect_bundle.device.collector' => [
                    0 => 'device.collector',
                    1 => '@MobileDetect/Collector/device.html.twig',
                ],
                'data_collector.config' => [
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ],
                'eccube.collector.core' => [
                    0 => 'eccube_core',
                    1 => '@toolbar/eccube.html.twig',
                ],
            ],
            'console.command.ids' => [
                0 => 'console.command.public_alias.Eccube\\Command\\UpdateSchemaDoctrineCommand',
                1 => 'console.command.public_alias.doctrine_cache.contains_command',
                2 => 'console.command.public_alias.doctrine_cache.delete_command',
                3 => 'console.command.public_alias.doctrine_cache.flush_command',
                4 => 'console.command.public_alias.doctrine_cache.stats_command',
                5 => 'console.command.public_alias.doctrine_migrations.diff_command',
                6 => 'console.command.public_alias.doctrine_migrations.execute_command',
                7 => 'console.command.public_alias.doctrine_migrations.generate_command',
                8 => 'console.command.public_alias.doctrine_migrations.latest_command',
                9 => 'console.command.public_alias.doctrine_migrations.migrate_command',
                10 => 'console.command.public_alias.doctrine_migrations.status_command',
                11 => 'console.command.public_alias.doctrine_migrations.version_command',
            ],
        ];
    }

    protected function throw($message)
    {
        throw new RuntimeException($message);
    }
}
