<?php

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnyProductCategory
 *
 * @ORM\Table(name="c_dtb_any_product_category")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discriminator_type", type="string", length=255)
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass="Customize\Repository\AnyProductCategoryRepository")
 */
class AnyProductCategory extends \Eccube\Entity\AbstractEntity
{
    /**
     * @var int
     *
     * @ORM\Column(name="any_product_id", type="integer", options={"unsigned":true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $any_product_id;

    /**
     * @var int
     *
     * @ORM\Column(name="any_category_id", type="integer", options={"unsigned":true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $any_category_id;

    /**
     * @var \Customize\Entity\AnyProduct
     *
     * @ORM\ManyToOne(targetEntity="Customize\Entity\AnyProduct", inversedBy="AnyProductCategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="any_product_id", referencedColumnName="id")
     * })
     */
    private $AnyProduct;

    /**
     * @var \Customize\Entity\AnyCategory
     *
     * @ORM\ManyToOne(targetEntity="Customize\Entity\AnyCategory", inversedBy="AnyProductCategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="any_category_id", referencedColumnName="id")
     * })
     */
    private $AnyCategory;


    /**
     * Set anyProductId.
     *
     * @param int $anyProductId
     *
     * @return AnyProductCategory
     */
    public function setAnyProductId($anyProductId)
    {
        $this->any_product_id = $anyProductId;

        return $this;
    }

    /**
     * Get anyProductId.
     *
     * @return int
     */
    public function getAnyProductId()
    {
        return $this->any_product_id;
    }

    /**
     * Set anyCategoryId.
     *
     * @param int $anyCategoryId
     *
     * @return AnyProductCategory
     */
    public function setAnyCategoryId($anyCategoryId)
    {
        $this->any_category_id = $anyCategoryId;

        return $this;
    }

    /**
     * Get anyCategoryId.
     *
     * @return int
     */
    public function getAnyCategoryId()
    {
        return $this->any_category_id;
    }

    /**
     * Set anyProduct.
     *
     * @param \Customize\Entity\AnyProduct|null $anyProduct
     *
     * @return AnyProductCategory
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
     * Set anyCategoryId.
     *
     * @param \Customize\Entity\AnyCategory|null $anyCategoryId
     *
     * @return AnyProductCategory
     */
    public function setAnyCategory(AnyCategory $anyCategoryId = null)
    {
        $this->AnyCategory = $anyCategoryId;

        return $this;
    }

    /**
     * Get anyCategoryId.
     *
     * @return \Customize\Entity\AnyCategory|null
     */
    public function getAnyCategory()
    {
        return $this->AnyCategory;
    }
}

