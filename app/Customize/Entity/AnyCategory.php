<?php

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnyCategory
 *
 * @ORM\Table(name="c_dtb_any_category")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discriminator_type", type="string", length=255)
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass="Customize\Repository\AnyCategoryRepository")
 */
class AnyCategory extends \Eccube\Entity\AbstractEntity
{
    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getName();
    }

    /**
     * @return integer
     */
    public function countBranches()
    {
        $count = 1;

        foreach ($this->getChildren() as $Child) {
            $count += $Child->countBranches();
        }

        return $count;
    }

    /**
     * @param  \Doctrine\ORM\EntityManager $em
     * @param  integer                     $sortNo
     *
     * @return \Customize\Entity\AnyCategory
     */
    public function calcChildrenSortNo(\Doctrine\ORM\EntityManager $em, $sortNo)
    {
        $this->setSortNo($this->getSortNo() + $sortNo);
        $em->persist($this);

        foreach ($this->getChildren() as $Child) {
            $Child->calcChildrenSortNo($em, $sortNo);
        }

        return $this;
    }

    public function getParents()
    {
        $path = $this->getPath();
        array_pop($path);

        return $path;
    }

    public function getPath()
    {
        $path = [];
        $AnyCategory = $this;

        $max = 10;
        while ($max--) {
            $path[] = $AnyCategory;

            $AnyCategory = $AnyCategory->getParent();
            if (!$AnyCategory || !$AnyCategory->getId()) {
                break;
            }
        }

        return array_reverse($path);
    }

    public function getNameWithLevel()
    {
        return str_repeat('　', $this->getHierarchy() - 1).$this->getName();
    }

    public function getDescendants()
    {
        $DescendantCategories = [];

        $max = 10;
        $AnyChildCategories = $this->getChildren();
        foreach ($AnyChildCategories as $ChildAnyCategory) {
            $DescendantCategories[$ChildAnyCategory->getId()] = $ChildAnyCategory;
            $DescendantCategories2 = $ChildAnyCategory->getDescendants();
            foreach ($DescendantCategories2 as $DescendantAnyCategory) {
                $DescendantCategories[$DescendantAnyCategory->getId()] = $DescendantAnyCategory;
            }
        }

        return $DescendantCategories;
    }

    public function getSelfAndDescendants()
    {
        return array_merge([$this], $this->getDescendants());
    }

    /**
     * カテゴリに紐づく商品があるかどうかを調べる.
     *
     * AnyProductCategoriesはExtra Lazyのため, lengthやcountで評価した際にはCOUNTのSQLが発行されるが,
     * COUNT自体が重いので, LIMIT 1で取得し存在チェックを行う.
     *
     * @see http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/working-with-associations.html#filtering-collections
     *
     * @return bool
     */
    public function hasAnyProductCategories()
    {
        $criteria = Criteria::create()
        ->orderBy(['any_category_id' => Criteria::ASC])
        ->setFirstResult(0)
        ->setMaxResults(1);

        return $this->AnyProductCategories->matching($criteria)->count() > 0;
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", options={"unsigned":true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="any_category_name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="hierarchy", type="integer", options={"unsigned":true})
     */
    private $hierarchy;

    /**
     * @var int
     *
     * @ORM\Column(name="sort_no", type="integer")
     */
    private $sort_no;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="datetimetz")
     */
    private $create_date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_date", type="datetimetz")
     */
    private $update_date;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Customize\Entity\AnyProductCategory", mappedBy="AnyCategory", fetch="EXTRA_LAZY")
     */
    private $AnyProductCategories;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Customize\Entity\AnyCategory", mappedBy="Parent")
     * @ORM\OrderBy({
     *     "sort_no"="DESC"
     * })
     */
    private $Children;

    /**
     * @var \Customize\Entity\AnyCategory
     *
     * @ORM\ManyToOne(targetEntity="Customize\Entity\AnyCategory", inversedBy="Children")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_any_category_id", referencedColumnName="id")
     * })
     */
    private $Parent;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->AnyProductCategories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Children = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set name.
     *
     * @param string $name
     *
     * @return AnyCategory
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set hierarchy.
     *
     * @param int $hierarchy
     *
     * @return AnyCategory
     */
    public function setHierarchy($hierarchy)
    {
        $this->hierarchy = $hierarchy;

        return $this;
    }

    /**
     * Get hierarchy.
     *
     * @return int
     */
    public function getHierarchy()
    {
        return $this->hierarchy;
    }

    /**
     * Set sortNo.
     *
     * @param int $sortNo
     *
     * @return AnyCategory
     */
    public function setSortNo($sortNo)
    {
        $this->sort_no = $sortNo;

        return $this;
    }

    /**
     * Get sortNo.
     *
     * @return int
     */
    public function getSortNo()
    {
        return $this->sort_no;
    }

    /**
     * Set createDate.
     *
     * @param \DateTime $createDate
     *
     * @return AnyCategory
     */
    public function setCreateDate($createDate)
    {
        $this->create_date = $createDate;

        return $this;
    }

    /**
     * Get createDate.
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * Set updateDate.
     *
     * @param \DateTime $updateDate
     *
     * @return AnyCategory
     */
    public function setUpdateDate($updateDate)
    {
        $this->update_date = $updateDate;

        return $this;
    }

    /**
     * Get updateDate.
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->update_date;
    }

    /**
     * Add anyProductCategory.
     *
     * @param \Customize\Entity\AnyProductCategory $anyProductCategory
     *
     * @return AnyCategory
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
     * Add child.
     *
     * @param \Customize\Entity\AnyCategory $child
     *
     * @return AnyCategory
     */
    public function addChild(AnyCategory $child)
    {
        $this->Children[] = $child;

        return $this;
    }

    /**
     * Remove child.
     *
     * @param \Customize\Entity\AnyCategory $child
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeChild(AnyCategory $child)
    {
        return $this->Children->removeElement($child);
    }

    /**
     * Get children.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildren()
    {
        return $this->Children;
    }

    /**
     * Set parent.
     *
     * @param \Customize\Entity\AnyCategory|null $parent
     *
     * @return AnyCategory
     */
    public function setParent(AnyCategory $parent = null)
    {
        $this->Parent = $parent;

        return $this;
    }

    /**
     * Get parent.
     *
     * @return \Customize\Entity\AnyCategory|null
     */
    public function getParent()
    {
        return $this->Parent;
    }

}