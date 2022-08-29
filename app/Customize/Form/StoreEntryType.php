<?php

namespace Customize\Form;

use Eccube\Common\EccubeConfig;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

use Eccube\Form\Type\AddressType;
use Customize\Form\PostalAddressType;

class StoreEntryType extends AbstractType
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

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\Length([
                        'max' => $this->eccubeConfig['eccube_stext_len'],
                    ]),
                ],
            ])
            ->add('address_ec', AddressType::class)
            // ->add('address', PostalAddressType::class)
            ->add('address', PostalAddressType::class, [
                'is_extended_address' => false, //true로 바꾸면 Address Line3이 보임
                'allowed_states' => ['CA', 'FL', 'TX'], //null일 경우 텍스트 타입으로 변경됨
                //'allowed_states' => [9, 5, 4], //String이 아니고 숫자일경우
                // in this example, this config would also be valid:
                //'allowed_states' => 'CA',
            ])
            ->add('note', TextType::class, [
                'required' => true,
                'label' => 'Label',
                'help' => 'Street address, P.O. box, company name'
            ])
            ;
    }

}
