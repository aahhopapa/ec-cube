<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;

if (!class_exists('\Customize\Entity\BannerImage')) {
    /**
     * BannerImage
     *
     * @ORM\Table(name="c_dtb_banner_image")
     * @ORM\InheritanceType("SINGLE_TABLE")
     * @ORM\DiscriminatorColumn(name="discriminator_type", type="string", length=255)
     * @ORM\HasLifecycleCallbacks()
     * @ORM\Entity(repositoryClass="Customize\Repository\BannerImageRepository")
     */
    class BannerImage extends \Eccube\Entity\AbstractEntity
    {
        /**
         * @return string
         */
        public function __toString()
        {
            return (string) $this->getFileName();
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
         * @ORM\Column(name="file_name", type="string", length=255)
         */
        private $file_name;

        /**
         * @var int
         *
         * @ORM\Column(name="sort_no", type="smallint", options={"unsigned":true})
         */
        private $sort_no;

        /**
         * @var \DateTime
         *
         * @ORM\Column(name="create_date", type="datetimetz")
         */
        private $create_date;

        /**
         * @var \Customize\Entity\Banner
         *
         * @ORM\ManyToOne(targetEntity="Customize\Entity\Banner", inversedBy="BannerImage")
         * @ORM\JoinColumns({
         *   @ORM\JoinColumn(name="banner_id", referencedColumnName="id")
         * })
         */
        private $Banner;

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
         * Get id.
         *
         * @return int
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * Set fileName.
         *
         * @param string $fileName
         *
         * @return BannerImage
         */
        public function setFileName($fileName)
        {
            $this->file_name = $fileName;

            return $this;
        }

        /**
         * Get fileName.
         *
         * @return string
         */
        public function getFileName()
        {
            return $this->file_name;
        }

        /**
         * Set sortNo.
         *
         * @param int $sortNo
         *
         * @return BannerImage
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
         * @return BannerImage
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
         * Set banner.
         *
         * @param \Customize\Entity\Banner|null $banner
         *
         * @return BannerImage
         */
        public function setBanner(Banner $banner = null)
        {
            $this->Banner = $banner;

            return $this;
        }

        /**
         * Get banner.
         *
         * @return \Customize\Entity\Banner|null
         */
        public function getBanner()
        {
            return $this->Banner;
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


    }
}
