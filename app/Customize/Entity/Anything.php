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
         * Constructor
         */
        public function __construct()
        {
            $this->AnythingDetails = new \Doctrine\Common\Collections\ArrayCollection();
        }

        /**
         * @var \Doctrine\Common\Collections\Collection
         *
         * @ORM\OneToMany(targetEntity="Customize\Entity\AnythingDetail", mappedBy="Anything", cascade={"persist","remove"})
         * @ORM\OrderBy({
         *     "id"="ASC"
         * })
         */
        private $AnythingDetails;



        // private $anythingSelectArray = [];

        // /**
        //  * Get anythingSelectArray
        //  *
        //  * @return array
        //  */
        // public function getAnythingSelectArray()
        // {
        //     // $this->_calc();
        //     foreach ($this->getAnythingDetails() as $AnythingDetail) {
        //         $this->anythingSelectArray[$AnythingDetail->getId()] = $AnythingDetail->getAnyDetailSelect();

        //     }

        //     return $this->anythingSelectArray;
        // }
        
        /**
         * Get AnythingDetails.
         *
         * @return \Doctrine\Common\Collections\Collection
         */
        public function getAnythingDetails()
        {
            return $this->AnythingDetails;
        }

        /**
         * Add productClass.
         *
         * @param \Eccube\Entity\AnythingDetail $anythingDetail
         *
         * @return AnythingDetail
         */
        public function addAnythingDetail(AnythingDetail $anythingDetail)
        {
            $this->AnythingDetails[] = $anythingDetail;

            return $this;
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