<?php

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnySaleType
 *
 * @ORM\Table(name="c_mtb_any_sale_type")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discriminator_type", type="string", length=255)
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass="Customize\Repository\AnySaleTypeRepository")
 * @ORM\Cache(usage="NONSTRICT_READ_WRITE")
 */
class AnySaleType extends \Eccube\Entity\Master\AbstractMasterEntity
{
    /**
     * @var integer
     * 販売種別A
     */
    const SALE_TYPE_NORMAL = 1;
    /**
     * @var integer
     * 販売種別B
     */
    const SALE_TYPE_HARD = 2;

}