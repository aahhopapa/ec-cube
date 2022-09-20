<?php

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnyProductClass
 *
 * @ORM\Table(name="c_dtb_any_product_class")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discriminator_type", type="string", length=255)
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass="Customize\Repository\AnyProductClassRepository")
 */
class AnyProductClass extends \Eccube\Entity\AbstractEntity
{

        /**
         * @var int
         *
         * @ORM\Column(name="id", type="integer", options={"unsigned":true})
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="IDENTITY")
         */
        private $id;

        /**
         * @var \Customize\Entity\AnyProductStock
         *
         * @ORM\OneToOne(targetEntity="Customize\Entity\AnyProductStock", mappedBy="AnyProductClass", cascade={"persist","remove"})
         */
        private $AnyProductStock;

        /**
         * @var \Customize\Entity\AnyProduct
         *
         * @ORM\ManyToOne(targetEntity="Customize\Entity\AnyProduct", inversedBy="AnyProductClasses")
         * @ORM\JoinColumns({
         *   @ORM\JoinColumn(name="any_product_id", referencedColumnName="id")
         * })
         */
        private $AnyProduct;

        /**
         * @var \Customize\Entity\AnySaleType
         *
         * @ORM\ManyToOne(targetEntity="Customize\Entity\AnySaleType")
         * @ORM\JoinColumns({
         *   @ORM\JoinColumn(name="any_sale_type_id", referencedColumnName="id")
         * })
         */
        private $AnySaleType;


        /**
         * Get id.
         *
         * @return int
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * Set productStock.
         *
         * @param \Customize\Entity\AnyProductStock|null $productStock
         *
         * @return AnyProductClass
         */
        public function setAnyProductStock(AnyProductStock $productStock = null)
        {
            $this->AnyProductStock = $productStock;

            return $this;
        }

        /**
         * Get productStock.
         *
         * @return \Customize\Entity\AnyProductStock|null
         */
        public function getAnyProductStock()
        {
            return $this->AnyProductStock;
        }

        /**
         * Set anyProduct.
         *
         * @param \Customize\Entity\AnyProduct|null $anyProduct
         *
         * @return AnyProductClass
         */
        public function setAnyProduct(AnyProduct $anyProduct = null)
        {
            $this->AnyProduct = $anyProduct;

            return $this;
        }

        /**
         * Get anyProduct.
         *
         * @return \Customize\Entity\AnyProduct|null
         */
        public function getAnyProduct()
        {
            return $this->AnyProduct;
        }

        /**
         * Set saleType.
         *
         * @param \Customize\Entity\AnySaleType|null $saleType
         *
         * @return AnyProductClass
         */
        public function setAnySaleType(AnySaleType $saleType = null)
        {
            $this->AnySaleType = $saleType;

            return $this;
        }

        /**
         * Get saleType.
         *
         * @return \Customize\Entity\AnySaleType|null
         */
        public function getAnySaleType()
        {
            return $this->AnySaleType;
        }


}

