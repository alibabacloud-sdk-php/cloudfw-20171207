<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeAddressBookRequest extends Model
{
    /**
     * @var int[]
     */
    public $assetMemberUids;

    /**
     * @var string
     */
    public $containPort;

    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var string
     */
    public $groupUuid;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $query;
    protected $_name = [
        'assetMemberUids' => 'AssetMemberUids',
        'containPort' => 'ContainPort',
        'currentPage' => 'CurrentPage',
        'groupType' => 'GroupType',
        'groupUuid' => 'GroupUuid',
        'lang' => 'Lang',
        'pageSize' => 'PageSize',
        'query' => 'Query',
    ];

    public function validate()
    {
        if (\is_array($this->assetMemberUids)) {
            Model::validateArray($this->assetMemberUids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetMemberUids) {
            if (\is_array($this->assetMemberUids)) {
                $res['AssetMemberUids'] = [];
                $n1 = 0;
                foreach ($this->assetMemberUids as $item1) {
                    $res['AssetMemberUids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->containPort) {
            $res['ContainPort'] = $this->containPort;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }

        if (null !== $this->groupUuid) {
            $res['GroupUuid'] = $this->groupUuid;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetMemberUids'])) {
            if (!empty($map['AssetMemberUids'])) {
                $model->assetMemberUids = [];
                $n1 = 0;
                foreach ($map['AssetMemberUids'] as $item1) {
                    $model->assetMemberUids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ContainPort'])) {
            $model->containPort = $map['ContainPort'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }

        if (isset($map['GroupUuid'])) {
            $model->groupUuid = $map['GroupUuid'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        return $model;
    }
}
