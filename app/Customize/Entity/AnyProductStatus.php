<?php

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnyProductStatus
 *
 * @ORM\Table(name="c_mtb_any_product_status")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discriminator_type", type="string", length=255)
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass="Customize\Repository\AnyProductStatusRepository")
 * @ORM\Cache(usage="NONSTRICT_READ_WRITE")
 */
class AnyProductStatus extends \Eccube\Entity\Master\AbstractMasterEntity
{
    /**
     * 公開
     *
     * フロント画面: 表示されます。
     * 管理画面商品一覧: デフォルトで検索対象となります。
     *
     * @var integer
     */
    const DISPLAY_SHOW = 1;

    /**
     * 非公開
     *
     * フロント画面: 表示されません。
     * 管理画面商品一覧: デフォルトで検索対象となります。
     *
     * @var integer
     */
    const DISPLAY_HIDE = 2;

    /**
     * 廃止
     *
     * 通常、商品情報は受注情報などに紐づいているため、商品情報を物理削除することはできません。
     * 廃止のステータスは2系や3系での論理削除に近い役割となります。
     * フロント画面: 表示されません。
     * 管理画面商品一覧: デフォルトで検索対象外となり、廃止の公開ステータスを指定して検索可能です。
     *
     * @var integer
     */
    const DISPLAY_ABOLISHED = 3;

}