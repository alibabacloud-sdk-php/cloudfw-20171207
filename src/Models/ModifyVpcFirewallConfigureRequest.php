<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class ModifyVpcFirewallConfigureRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $localVpcCidrTableList;

    /**
     * @var string
     */
    public $memberUid;

    /**
     * @var string
     */
    public $peerVpcCidrTableList;

    /**
     * @var string
     */
    public $vpcFirewallId;

    /**
     * @var string
     */
    public $vpcFirewallName;
    protected $_name = [
        'lang' => 'Lang',
        'localVpcCidrTableList' => 'LocalVpcCidrTableList',
        'memberUid' => 'MemberUid',
        'peerVpcCidrTableList' => 'PeerVpcCidrTableList',
        'vpcFirewallId' => 'VpcFirewallId',
        'vpcFirewallName' => 'VpcFirewallName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->localVpcCidrTableList) {
            $res['LocalVpcCidrTableList'] = $this->localVpcCidrTableList;
        }

        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        if (null !== $this->peerVpcCidrTableList) {
            $res['PeerVpcCidrTableList'] = $this->peerVpcCidrTableList;
        }

        if (null !== $this->vpcFirewallId) {
            $res['VpcFirewallId'] = $this->vpcFirewallId;
        }

        if (null !== $this->vpcFirewallName) {
            $res['VpcFirewallName'] = $this->vpcFirewallName;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['LocalVpcCidrTableList'])) {
            $model->localVpcCidrTableList = $map['LocalVpcCidrTableList'];
        }

        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        if (isset($map['PeerVpcCidrTableList'])) {
            $model->peerVpcCidrTableList = $map['PeerVpcCidrTableList'];
        }

        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }

        if (isset($map['VpcFirewallName'])) {
            $model->vpcFirewallName = $map['VpcFirewallName'];
        }

        return $model;
    }
}
