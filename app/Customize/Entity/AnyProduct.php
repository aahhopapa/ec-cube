<?php

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnyProduct
 *
 * @ORM\Table(name="c_dtb_any_product")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discriminator_type", type="string", length=255)
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass="Customize\Repository\AnyProductRepository")
 */
class AnyProduct extends \Eccube\Entity\AbstractEntity
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->AnyProductCategories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->AnyProductClasses = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Customize\Entity\AnyProductCategory", mappedBy="AnyProduct", cascade={"persist","remove"})
     */
    private $AnyProductCategories;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Customize\Entity\AnyProductClass", mappedBy="AnyProduct", cascade={"persist","remove"})
     */
    private $AnyProductClasses;


    /**
     * @var \Customize\Entity\AnyProductStatus
     *
     * @ORM\ManyToOne(targetEntity="Customize\Entity\AnyProductStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="any_product_status_id", referencedColumnName="id")
     * })
     */
    private $AnyStatus;


    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", options={"unsigned":true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * Get id.
     *
     * @return Id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="any_input", type="string", length=255)
     */
    private $any_input;

    /**
     * @var string
     *
     * @ORM\Column(name="any_select", type="string", length=255)
     */
    private $any_select;

    /**
     * Get any_input
     *
     * @return any_input
     */
    public function getAnyInput()
    {
        return $this->any_input;
    }

    /**
     * Set any_input
     *
     * @return this
     */
    public function setAnyInput($any_input)
    {
        $this->any_input = $any_input;
        return $this;
    }

    /**
     * Set any_select.
     *
     * @param string|null $any_select
     * @return this
     */
    public function setAnySelect($any_select = null)
    {
        $this->any_select = $any_select;
        return $this;
    }

    /**
     * Get any_select.
     *
     * @return string|null
     */
    public function getAnySelect()
    {
        return $this->any_select;
    }


    /**
     * Add anyProductCategory.
     *
     * @param \Customize\Entity\AnyProductCategory $anyProductCategory
     *
     * @return Product
     */
    public function addAnyProductCategory(AnyProductCategory $anyProductCategory)
    {
        $this->AnyProductCategories[] = $anyProductCategory;

        return $this;
    }

    /**
     * Remove anyProductCategory.
     *
     * @param \Customize\Entity\AnyProductCategory $anyProductCategory
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeAnyProductCategory(AnyProductCategory $anyProductCategory)
    {
        return $this->AnyProductCategories->removeElement($anyProductCategory);
    }

    /**
     * Get productCategories.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnyProductCategories()
    {
        return $this->AnyProductCategories;
    }

    /**
     * Add anyProductClass.
     *
     * @param \Customize\Entity\AnyProductClass $anyProductClass
     *
     * @return Product
     */
    public function addAnyProductClass(AnyProductClass $anyProductClass)
    {
        $this->AnyProductClasses[] = $anyProductClass;

        return $this;
    }

    /**
     * Remove anyProductClass.
     *
     * @param \Customize\Entity\AnyProductClass $anyProductClass
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeAnyProductClass(AnyProductClass $anyProductClass)
    {
        return $this->AnyProductClasses->removeElement($anyProductClass);
    }

    /**
     * Get anyProductClasses.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnyProductClasses()
    {
        return $this->AnyProductClasses;
    }

}