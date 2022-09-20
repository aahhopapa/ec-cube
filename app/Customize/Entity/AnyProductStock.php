<?php

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnyProductStock
 *
 * @ORM\Table(name="c_dtb_any_product_anyStock")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discriminator_type", type="string", length=255)
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass="Customize\Repository\AnyProductStockRepository")
 */
class AnyProductStock extends \Eccube\Entity\AbstractEntity
{

    /**
     * @var integer
     */
    private $any_product_class_id;

    /**
     * Set any_product_class_id
     *
     * @param integer $anyAnyProductClassId
     *
     * @return AnyProductStock
     */
    public function setAnyProductClassId($anyAnyProductClassId)
    {
        $this->any_product_class_id = $anyAnyProductClassId;

        return $this;
    }

    /**
     * Get any_product_class_id
     *
     * @return integer
     */
    public function getAnyProductClassId()
    {
        return $this->any_product_class_id;
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", options={"unsigned":true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="anyStock", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $anyStock;

    /**
     * @var \Customize\Entity\AnyProductClass
     *
     * @ORM\OneToOne(targetEntity="Customize\Entity\AnyProductClass", inversedBy="AnyProductStock")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="any_product_class_id", referencedColumnName="id")
     * })
     */
    private $AnyProductClass;

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
     * Set anyStock.
     *
     * @param string|null $anyStock
     *
     * @return AnyProductStock
     */
    public function setAnyStock($anyStock = null)
    {
        $this->anyStock = $anyStock;

        return $this;
    }

    /**
     * Get anyStock.
     *
     * @return string|null
     */
    public function getAnyStock()
    {
        return $this->anyStock;
    }

    /**
     * Set anyProductClass.
     *
     * @param \Customize\Entity\AnyProductClass|null $anyProductClass
     *
     * @return AnyProductStock
     */
    public function setAnyProductClass(AnyProductClass $anyProductClass = null)
    {
        $this->AnyProductClass = $anyProductClass;

        return $this;
    }

    /**
     * Get anyProductClass.
     *
     * @return \Customize\Entity\AnyProductClass|null
     */
    public function getAnyProductClass()
    {
        return $this->AnyProductClass;
    }

}

