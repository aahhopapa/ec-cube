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

class PostalAddressType extends AbstractType
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
            ->add('addressLine1', TextType::class, [
                'help' => 'Street address, P.O. box, company name',
            ])
            ->add('addressLine2', TextType::class, [
                'help' => 'Apartment, suite, unit, building, floor',
            ])
            ->add('city', TextType::class)
            ->add('state', TextType::class, [
                'label' => 'State',
            ])
            ->add('zipCode', TextType::class, [
                'label' => 'ZIP Code',
            ])
        ;
        
        if (true === $options['is_extended_address']) {
            $builder->add('addressLine3', TextType::class, [
                'help' => 'Extended address info',
            ]);
        }

        if (null !== $options['allowed_states']) {
            $builder->add('state', ChoiceType::class, [
                'choices' => $options['allowed_states'],
            ]);
        } else {
            $builder->add('state', TextType::class, [
                'label' => 'State/Province/Region',
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        // this defines the available options and their default values when
        // they are not configured explicitly when using the form type
        $resolver->setDefaults([
            'allowed_states' => null,
            'is_extended_address' => false,
        ]);

        // optionally you can also restrict the options type or types (to get
        // automatic type validation and useful error messages for end users)

        // $resolver->setAllowedTypes('allowed_states', ['null', 'string', 'array']);
        $resolver->setAllowedTypes('allowed_states', ['null', 'array']);
        $resolver->setAllowedTypes('is_extended_address', 'bool');

        // optionally you can transform the given values for the options to
        // simplify the further processing of those options

        $resolver->setNormalizer('allowed_states', static function (Options $options, $states) {
            if (null === $states) {
                return $states;
            }

            // if (is_string($states)) {
            //     $states = (array) $states;
            // }
            // $statesArray = array_combine(array_values($states), array_values($states));
            $statesArray = array_combine(array_keys($states), array_values($states));
            dump($options);
            dump($statesArray);
            return $statesArray;
        });
    }

}
