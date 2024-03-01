<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DeleteNatFirewallControlPolicyBatchRequest extends Model
{
    /**
     * @var string[]
     */
    public $aclUuidList;

    /**
     * @example out
     *
     * @var string
     */
    public $direction;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example ngw-uf6j0426ap74vd6vrb676
     *
     * @var string
     */
    public $natGatewayId;
    protected $_name = [
        'aclUuidList'  => 'AclUuidList',
        'direction'    => 'Direction',
        'lang'         => 'Lang',
        'natGatewayId' => 'NatGatewayId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclUuidList) {
            $res['AclUuidList'] = $this->aclUuidList;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNatFirewallControlPolicyBatchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclUuidList'])) {
            if (!empty($map['AclUuidList'])) {
                $model->aclUuidList = $map['AclUuidList'];
            }
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        return $model;
    }
}
