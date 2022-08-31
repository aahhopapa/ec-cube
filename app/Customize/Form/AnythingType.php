<?php

namespace Customize\Form;

use Eccube\Common\EccubeConfig;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class AnythingType extends AbstractType
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
        $builder
            ->add('any_input', TextType::class, [
                'required' => false,
            ])
            ->add('any_select', ChoiceType::class, [
                'choices' => [
                    'ca' => 'standard',
                    'bb' => 'expedited',
                    'ag' => 'priority',
                ],
                'required' => true,
                'placeholder' => "Defualt",
                'mapped' => true,
                'constraints' => [
                    new Assert\NotBlank() ,
                    // new Assert\Length(['max' => 32]),
                    // new Assert\Regex(['pattern' => '/^[0-9a-zA-Z]+$/']),
                ],
            ]);
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {

    }
}