<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupResponseBody;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupResponseBody\dataList\IPLocationInfo;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupResponseBody\dataList\resourcePrivateIPList;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupResponseBody\dataList\vpcDstInfo;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupResponseBody\dataList\vpcSrcInfo;
use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @var string
     */
    public $attackApp;

    /**
     * @var int
     */
    public $attackType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $dstIP;

    /**
     * @var int
     */
    public $eventCount;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var int
     */
    public $firstEventTime;

    /**
     * @var IPLocationInfo
     */
    public $IPLocationInfo;

    /**
     * @var int
     */
    public $lastEventTime;

    /**
     * @var resourcePrivateIPList[]
     */
    public $resourcePrivateIPList;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var int
     */
    public $ruleResult;

    /**
     * @var int
     */
    public $ruleSource;

    /**
     * @var string
     */
    public $srcIP;

    /**
     * @var string
     */
    public $srcIPTag;

    /**
     * @var string[]
     */
    public $srcPrivateIPList;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var vpcDstInfo
     */
    public $vpcDstInfo;

    /**
     * @var vpcSrcInfo
     */
    public $vpcSrcInfo;

    /**
     * @var int
     */
    public $vulLevel;
    protected $_name = [
        'attackApp'             => 'AttackApp',
        'attackType'            => 'AttackType',
        'description'           => 'Description',
        'direction'             => 'Direction',
        'dstIP'                 => 'DstIP',
        'eventCount'            => 'EventCount',
        'eventId'               => 'EventId',
        'eventName'             => 'EventName',
        'firstEventTime'        => 'FirstEventTime',
        'IPLocationInfo'        => 'IPLocationInfo',
        'lastEventTime'         => 'LastEventTime',
        'resourcePrivateIPList' => 'ResourcePrivateIPList',
        'resourceType'          => 'ResourceType',
        'ruleId'                => 'RuleId',
        'ruleResult'            => 'RuleResult',
        'ruleSource'            => 'RuleSource',
        'srcIP'                 => 'SrcIP',
        'srcIPTag'              => 'SrcIPTag',
        'srcPrivateIPList'      => 'SrcPrivateIPList',
        'tag'                   => 'Tag',
        'vpcDstInfo'            => 'VpcDstInfo',
        'vpcSrcInfo'            => 'VpcSrcInfo',
        'vulLevel'              => 'VulLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attackApp) {
            $res['AttackApp'] = $this->attackApp;
        }
        if (null !== $this->attackType) {
            $res['AttackType'] = $this->attackType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->dstIP) {
            $res['DstIP'] = $this->dstIP;
        }
        if (null !== $this->eventCount) {
            $res['EventCount'] = $this->eventCount;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->firstEventTime) {
            $res['FirstEventTime'] = $this->firstEventTime;
        }
        if (null !== $this->IPLocationInfo) {
            $res['IPLocationInfo'] = null !== $this->IPLocationInfo ? $this->IPLocationInfo->toMap() : null;
        }
        if (null !== $this->lastEventTime) {
            $res['LastEventTime'] = $this->lastEventTime;
        }
        if (null !== $this->resourcePrivateIPList) {
            $res['ResourcePrivateIPList'] = [];
            if (null !== $this->resourcePrivateIPList && \is_array($this->resourcePrivateIPList)) {
                $n = 0;
                foreach ($this->resourcePrivateIPList as $item) {
                    $res['ResourcePrivateIPList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleResult) {
            $res['RuleResult'] = $this->ruleResult;
        }
        if (null !== $this->ruleSource) {
            $res['RuleSource'] = $this->ruleSource;
        }
        if (null !== $this->srcIP) {
            $res['SrcIP'] = $this->srcIP;
        }
        if (null !== $this->srcIPTag) {
            $res['SrcIPTag'] = $this->srcIPTag;
        }
        if (null !== $this->srcPrivateIPList) {
            $res['SrcPrivateIPList'] = $this->srcPrivateIPList;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->vpcDstInfo) {
            $res['VpcDstInfo'] = null !== $this->vpcDstInfo ? $this->vpcDstInfo->toMap() : null;
        }
        if (null !== $this->vpcSrcInfo) {
            $res['VpcSrcInfo'] = null !== $this->vpcSrcInfo ? $this->vpcSrcInfo->toMap() : null;
        }
        if (null !== $this->vulLevel) {
            $res['VulLevel'] = $this->vulLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttackApp'])) {
            $model->attackApp = $map['AttackApp'];
        }
        if (isset($map['AttackType'])) {
            $model->attackType = $map['AttackType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['DstIP'])) {
            $model->dstIP = $map['DstIP'];
        }
        if (isset($map['EventCount'])) {
            $model->eventCount = $map['EventCount'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['FirstEventTime'])) {
            $model->firstEventTime = $map['FirstEventTime'];
        }
        if (isset($map['IPLocationInfo'])) {
            $model->IPLocationInfo = IPLocationInfo::fromMap($map['IPLocationInfo']);
        }
        if (isset($map['LastEventTime'])) {
            $model->lastEventTime = $map['LastEventTime'];
        }
        if (isset($map['ResourcePrivateIPList'])) {
            if (!empty($map['ResourcePrivateIPList'])) {
                $model->resourcePrivateIPList = [];
                $n                            = 0;
                foreach ($map['ResourcePrivateIPList'] as $item) {
                    $model->resourcePrivateIPList[$n++] = null !== $item ? resourcePrivateIPList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleResult'])) {
            $model->ruleResult = $map['RuleResult'];
        }
        if (isset($map['RuleSource'])) {
            $model->ruleSource = $map['RuleSource'];
        }
        if (isset($map['SrcIP'])) {
            $model->srcIP = $map['SrcIP'];
        }
        if (isset($map['SrcIPTag'])) {
            $model->srcIPTag = $map['SrcIPTag'];
        }
        if (isset($map['SrcPrivateIPList'])) {
            if (!empty($map['SrcPrivateIPList'])) {
                $model->srcPrivateIPList = $map['SrcPrivateIPList'];
            }
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['VpcDstInfo'])) {
            $model->vpcDstInfo = vpcDstInfo::fromMap($map['VpcDstInfo']);
        }
        if (isset($map['VpcSrcInfo'])) {
            $model->vpcSrcInfo = vpcSrcInfo::fromMap($map['VpcSrcInfo']);
        }
        if (isset($map['VulLevel'])) {
            $model->vulLevel = $map['VulLevel'];
        }

        return $model;
    }
}
