<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDestinationIPResponseBody\dstIPList;
use AlibabaCloud\Tea\Model;

class DescribeOutgoingDestinationIPResponseBody extends Model
{
    /**
     * @var dstIPList[]
     */
    public $dstIPList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dstIPList'  => 'DstIPList',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstIPList) {
            $res['DstIPList'] = [];
            if (null !== $this->dstIPList && \is_array($this->dstIPList)) {
                $n = 0;
                foreach ($this->dstIPList as $item) {
                    $res['DstIPList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOutgoingDestinationIPResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstIPList'])) {
            if (!empty($map['DstIPList'])) {
                $model->dstIPList = [];
                $n                = 0;
                foreach ($map['DstIPList'] as $item) {
                    $model->dstIPList[$n++] = null !== $item ? dstIPList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
