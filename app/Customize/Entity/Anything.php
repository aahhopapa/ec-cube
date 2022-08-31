<?php

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;

    /**
     * Anything
     *
     * @ORM\Table(name="c_dtb_anything")
     * @ORM\InheritanceType("SINGLE_TABLE")
     * @ORM\DiscriminatorColumn(name="discriminator_type", type="string", length=255)
     * @ORM\HasLifecycleCallbacks()
     * @ORM\Entity(repositoryClass="Customize\Repository\AnythingRepository")
     */
    class Anything extends \Eccube\Entity\AbstractEntity
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


    }