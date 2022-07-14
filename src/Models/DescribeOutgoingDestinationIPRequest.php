<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeOutgoingDestinationIPRequest extends Model
{
    /**
     * @description 当前页
     *
     * @var string
     */
    public $currentPage;

    /**
     * @description 目的IP
     *
     * @var string
     */
    public $dstIP;

    /**
     * @description 结束时间
     *
     * @var string
     */
    public $endTime;

    /**
     * @description 语言
     *
     * @var string
     */
    public $lang;

    /**
     * @description 排序字段, 枚举值.
     * 可选值: InBytes, OutBytes,TotalBytes,SessionCount
     * @var string
     */
    public $order;

    /**
     * @description 每页大小
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description 端口号
     *
     * @var string
     */
    public $port;

    /**
     * @description 私网IP
     *
     * @var string
     */
    public $privateIP;

    /**
     * @description 公网IP
     *
     * @var string
     */
    public $publicIP;

    /**
     * @description 顺序, 枚举值, 可选:asc, desc
     *
     * @var string
     */
    public $sort;

    /**
     * @description 开始时间,Unix timestamp, 精确到秒
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'dstIP'       => 'DstIP',
        'endTime'     => 'EndTime',
        'lang'        => 'Lang',
        'order'       => 'Order',
        'pageSize'    => 'PageSize',
        'port'        => 'Port',
        'privateIP'   => 'PrivateIP',
        'publicIP'    => 'PublicIP',
        'sort'        => 'Sort',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->dstIP) {
            $res['DstIP'] = $this->dstIP;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->privateIP) {
            $res['PrivateIP'] = $this->privateIP;
        }
        if (null !== $this->publicIP) {
            $res['PublicIP'] = $this->publicIP;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOutgoingDestinationIPRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DstIP'])) {
            $model->dstIP = $map['DstIP'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['PrivateIP'])) {
            $model->privateIP = $map['PrivateIP'];
        }
        if (isset($map['PublicIP'])) {
            $model->publicIP = $map['PublicIP'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
