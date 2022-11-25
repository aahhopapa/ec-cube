<?php

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;

    /**
     * BannerDetailDetail
     *
     * @ORM\Table(name="c_dtb_banner_detail")
     * @ORM\InheritanceType("SINGLE_TABLE")
     * @ORM\DiscriminatorColumn(name="discriminator_type", type="string", length=255)
     * @ORM\HasLifecycleCallbacks()
     * @ORM\Entity(repositoryClass="Customize\Repository\BannerDetailRepository")
     */
    class BannerDetail extends \Eccube\Entity\AbstractEntity
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
         * @var \Customize\Entity\Banner
         *
         * @ORM\ManyToOne(targetEntity="Customize\Entity\Banner"))
         * @ORM\JoinColumns({
         *   @ORM\JoinColumn(name="banner_id", referencedColumnName="id")
         * })
         */
        private $Banner;

        
        /**
         * Get banner
         *
         * @return \Customize\Entity\Banner|null
         */
        public function getBanner()
        {
            return $this->Banner;
        }

        /**
         * Set banner
         *
         * @param \Customize\Entity\Banner|null $banner
         * @return this
         */
        public function setBanner(\Customize\Entity\Banner $banner = null)
        {
            $this->Banner = $banner;
            return $this;
        }


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
         * @ORM\Column(name="banner_detail_input", type="string", length=255, nullable=true)
         */
        private $banner_detail_input;

        /**
         * @var string
         *
         * @ORM\Column(name="banner_detail_select", type="string", length=255, nullable=true)
         */
        private $banner_detail_select;

        /**
         * Get banner_detail_input
         *
         * @return banner_detail_input
         */
        public function getBannerDetailInput()
        {
            return $this->banner_detail_input;
        }

        /**
         * Set banner_detail_input
         *
         * @return this
         */
        public function setBannerDetailInput($banner_detail_input)
        {
            $this->banner_detail_input = $banner_detail_input;
            return $this;
        }

        /**
         * Set banner_detail_select.
         *
         * @param string|null $banner_detail_select
         * @return this
         */
        public function setBannerDetailSelect($banner_detail_select = null)
        {
            $this->banner_detail_select = $banner_detail_select;
            return $this;
        }

        /**
         * Get banner_detail_select.
         *
         * @return string|null
         */
        public function getBannerDetailSelect()
        {
            return $this->banner_detail_select;
        }


    }