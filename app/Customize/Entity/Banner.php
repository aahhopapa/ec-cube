<?php

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banner
 *
 * @ORM\Table(name="c_dtb_banner")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discriminator_type", type="string", length=255)
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass="Customize\Repository\BannerRepository")
 */
class Banner extends \Eccube\Entity\AbstractEntity
{
        /**
         * Constructor
         */
        public function __construct()
        {
            $this->BannerDetails = new \Doctrine\Common\Collections\ArrayCollection();
            $this->BannerImage = new \Doctrine\Common\Collections\ArrayCollection();
        }

        /**
         * @var \Doctrine\Common\Collections\Collection
         *
         * @ORM\OneToMany(targetEntity="Customize\Entity\BannerDetail", mappedBy="Banner", cascade={"persist","remove"})
         * @ORM\OrderBy({
         *     "id"="ASC"
         * })
         */
        private $BannerDetails;
        
        /**
         * @var \Doctrine\Common\Collections\Collection
         *
         * @ORM\OneToMany(targetEntity="Customize\Entity\BannerImage", mappedBy="Banner", cascade={"persist","remove"})
         * @ORM\OrderBy({
         *     "id"="ASC"
         * })
         */
        private $BannerImage;

        
        /**
         * @var \DateTime
         *
         * @ORM\Column(name="start_date", type="datetimetz", nullable=true)
         */
        private $start_date;
        
        /**
         * @var \DateTime
         *
         * @ORM\Column(name="end_date", type="datetimetz", nullable=true)
         */
        private $end_date;


        /**
         * @var boolean
         *
         * @ORM\Column(name="visible", type="boolean", options={"default":true})
         */
        private $visible;

        /**
         * Set startDate.
         *
         * @param \DateTime $createDate
         *
         * @return BannerImage
         */
        public function setStartDate($startDate)
        {
            $this->start_date = $startDate;

            return $this;
        }

        /**
         * Get startDate.
         *
         * @return \DateTime
         */
        public function getStartDate()
        {
            return $this->start_date;
        }

        /**
         * Set endDate.
         *
         * @param \DateTime $endDate
         *
         * @return BannerImage
         */
        public function setEndDate($endDate)
        {
            $this->end_date = $endDate;

            return $this;
        }

        /**
         * Get endDate.
         *
         * @return \DateTime
         */
        public function getEndDate()
        {
            return $this->end_date;
        }

                /**
         * @return boolean
         */
        public function isVisible()
        {
            return $this->visible;
        }

        /**
         * @param boolean $visible
         *
         * @return ProductClass
         */
        public function setVisible($visible)
        {
            $this->visible = $visible;

            return $this;
        }

        /**
         * Get BannerDetails.
         *
         * @return \Doctrine\Common\Collections\Collection
         */
        public function getBannerDetails()
        {
            return $this->BannerDetails;
        }

        /**
         * Add productClass.
         *
         * @param \Eccube\Entity\BannerDetail $bannerDetail
         *
         * @return BannerDetail
         */
        public function addBannerDetail(BannerDetail $bannerDetail)
        {
            $this->BannerDetails[] = $bannerDetail;

            return $this;
        }
        
        /**
         * Get BannerImage.
         *
         * @return \Doctrine\Common\Collections\Collection
         */
        public function getBannerImage()
        {
            return $this->BannerImage;
        }

        /**
         * Add BannerImage.
         *
         * @param \Eccube\Entity\BannerImage $bannerImage
         *
         * @return BannerImage
         */
        public function addBannerImage(BannerImage $bannerImage)
        {
            $this->BannerImage[] = $bannerImage;

            return $this;
        }

        /**
         * Remove BannerImage.
         *
         * @param \Eccube\Entity\BannerImage $bannerImage
         *
         * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
         */
        public function removeBannerImage(BannerImage $bannerImage)
        {
            return $this->BannerImage->removeElement($bannerImage);
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
         * @ORM\Column(name="banner_name", type="string", length=255, nullable=true)
         */
        private $banner_name;

        /**
         * @var string
         *
         * @ORM\Column(name="banner_select", type="string", length=255, nullable=true)
         */
        private $banner_select;

        
        /**
         * Get banner_name
         *
         * @return banner_name
         */
        public function getBannerName()
        {
            return $this->banner_name;
        }

        /**
         * Set banner_name
         *
         * @return this
         */
        public function setBannerName($banner_name)
        {
            $this->banner_name = $banner_name;
            return $this;
        }

        /**
         * Set banner_select.
         *
         * @param string|null $banner_select
         * @return this
         */
        public function setBannerSelect($banner_select = null)
        {
            $this->banner_select = $banner_select;
            return $this;
        }

        /**
         * Get banner_select.
         *
         * @return string|null
         */
        public function getBannerSelect()
        {
            return $this->banner_select;
        }

        
        /**
         * Add productImage.
         *
         * @param \Eccube\Entity\ProductImage $productImage
         *
         * @return Product
         */
        public function addProductImage(ProductImage $productImage)
        {
            $this->ProductImage[] = $productImage;

            return $this;
        }

        /**
         * Remove productImage.
         *
         * @param \Eccube\Entity\ProductImage $productImage
         *
         * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
         */
        public function removeProductImage(ProductImage $productImage)
        {
            return $this->ProductImage->removeElement($productImage);
        }

        /**
         * Get productImage.
         *
         * @return \Doctrine\Common\Collections\Collection
         */
        public function getProductImage()
        {
            return $this->ProductImage;
        }


    }