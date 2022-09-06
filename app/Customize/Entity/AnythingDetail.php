<?php

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;

    /**
     * AnythingDetailDetail
     *
     * @ORM\Table(name="c_dtb_anything_detail")
     * @ORM\InheritanceType("SINGLE_TABLE")
     * @ORM\DiscriminatorColumn(name="discriminator_type", type="string", length=255)
     * @ORM\HasLifecycleCallbacks()
     * @ORM\Entity(repositoryClass="Customize\Repository\AnythingDetailRepository")
     */
    class AnythingDetail extends \Eccube\Entity\AbstractEntity
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
         * @var \Customize\Entity\Anything
         *
         * @ORM\ManyToOne(targetEntity="Customize\Entity\Anything"))
         * @ORM\JoinColumns({
         *   @ORM\JoinColumn(name="anything_id", referencedColumnName="id")
         * })
         */
        private $anything;


        /**
         * Get anything
         *
         * @return \Customize\Entity\Anything|null
         */
        public function getAnything()
        {
            return $this->anything;
        }

        /**
         * Set anything
         *
         * @param \Customize\Entity\Anything|null $anything
         * @return this
         */
        public function setAnything(\Customize\Entity\Anything $anything = null)
        {
            $this->anything = $anything;
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
         * @ORM\Column(name="any_detail_input", type="string", length=255, nullable=true)
         */
        private $any_detail_input;

        /**
         * @var string
         *
         * @ORM\Column(name="any_detail_select", type="string", length=255, nullable=true)
         */
        private $any_detail_select;

        /**
         * Get any_detail_input
         *
         * @return any_detail_input
         */
        public function getAnyDetailInput()
        {
            return $this->any_detail_input;
        }

        /**
         * Set any_detail_input
         *
         * @return this
         */
        public function setAnyDetailInput($any_detail_input)
        {
            $this->any_detail_input = $any_detail_input;
            return $this;
        }

        /**
         * Set any_detail_select.
         *
         * @param string|null $any_detail_select
         * @return this
         */
        public function setAnyDetailSelect($any_detail_select = null)
        {
            $this->any_detail_select = $any_detail_select;
            return $this;
        }

        /**
         * Get any_detail_select.
         *
         * @return string|null
         */
        public function getAnyDetailSelect()
        {
            return $this->any_detail_select;
        }


    }