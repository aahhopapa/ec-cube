<?php

namespace Customize\Form;

use Eccube\Common\EccubeConfig;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Customize\Form\AnythingType;
use Customize\Entity\Anything;
use Customize\Entity\AnythingDetail;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class AnythingDetailType extends AbstractType
{
    /**
     * @var EccubeConfig
     */
    protected $eccubeConfig;

    /**
     * @param EccubeConfig $eccubeConfig
     */
    public function __construct(EccubeConfig $eccubeConfig)
    {
        $this->eccubeConfig = $eccubeConfig;
    }


    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $Anythings = $options['anythings'];

        $anythingSelectArray = [];
        foreach ($Anythings as $Anything) {
            array_push($anythingSelectArray, $Anything->getAnySelect());
        }

        $builder
            ->add('any_detail_input', TextType::class, [
                'required' => false,
            ]);
        // if ($AnythingDetails && $AnythingDetails->getAnything()) {
            // if (!is_null($AnythingDetails->getAnything())) {
                
                $builder->add('anything_select', ChoiceType::class, [
                    'label' => 'AnySelectラベル',
                    'choices' => ['common.select' => '__unselected'] + array_flip($anythingSelectArray),
                    'mapped' => false,
                ]);
            // }
        //     if (!is_null($Product->getClassName2())) {
        //         dump('in build ClassName2');
        //         $builder->add('classcategory_id2', ChoiceType::class, [
        //             'label' => $Product->getClassName2(),
        //             'choices' => ['common.select' => '__unselected'],
        //             'mapped' => false,
        //         ]);
        //     }

        // }

            // ->add('anything', AnythingType::class, [
            //     'required' => true,
            // ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        // $resolver->setRequired('anythingDetail');
        $resolver->setDefaults([
            'anythings' => Anything::class,
        ]);
    }
}