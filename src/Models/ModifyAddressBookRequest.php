<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyAddressBookRequest\tagList;
use AlibabaCloud\Tea\Model;

class ModifyAddressBookRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $addressList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $groupUuid;

    /**
     * @var string
     */
    public $autoAddTagEcs;

    /**
     * @var string
     */
    public $tagRelation;

    /**
     * @var tagList[]
     */
    public $tagList;
    protected $_name = [
        'sourceIp'      => 'SourceIp',
        'lang'          => 'Lang',
        'addressList'   => 'AddressList',
        'description'   => 'Description',
        'groupName'     => 'GroupName',
        'groupUuid'     => 'GroupUuid',
        'autoAddTagEcs' => 'AutoAddTagEcs',
        'tagRelation'   => 'TagRelation',
        'tagList'       => 'TagList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->addressList) {
            $res['AddressList'] = $this->addressList;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupUuid) {
            $res['GroupUuid'] = $this->groupUuid;
        }
        if (null !== $this->autoAddTagEcs) {
            $res['AutoAddTagEcs'] = $this->autoAddTagEcs;
        }
        if (null !== $this->tagRelation) {
            $res['TagRelation'] = $this->tagRelation;
        }
        if (null !== $this->tagList) {
            $res['TagList'] = [];
            if (null !== $this->tagList && \is_array($this->tagList)) {
                $n = 0;
                foreach ($this->tagList as $item) {
                    $res['TagList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAddressBookRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['AddressList'])) {
            $model->addressList = $map['AddressList'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupUuid'])) {
            $model->groupUuid = $map['GroupUuid'];
        }
        if (isset($map['AutoAddTagEcs'])) {
            $model->autoAddTagEcs = $map['AutoAddTagEcs'];
        }
        if (isset($map['TagRelation'])) {
            $model->tagRelation = $map['TagRelation'];
        }
        if (isset($map['TagList'])) {
            if (!empty($map['TagList'])) {
                $model->tagList = [];
                $n              = 0;
                foreach ($map['TagList'] as $item) {
                    $model->tagList[$n++] = null !== $item ? tagList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
