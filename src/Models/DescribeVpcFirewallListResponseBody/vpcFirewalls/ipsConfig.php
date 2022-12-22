<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallListResponseBody\vpcFirewalls;

use AlibabaCloud\Tea\Model;

class ipsConfig extends Model
{
    /**
     * @description The status of basic policies. Valid values:
     *
     * - **1**: enabled
     * - **0**: disabled
     * @example 1
     *
     * @var int
     */
    public $basicRules;

    /**
     * @description The status of virtual patches. Valid values:
     *
     * - **1**: enabled
     * - **0**: disabled
     * @example 1
     *
     * @var int
     */
    public $enableAllPatch;

    /**
     * @description The working mode of the IPS. Valid values:
     *
     * - **1**: blocking mode
     * - **0**: monitoring mode
     * @example 0
     *
     * @var int
     */
    public $runMode;
    protected $_name = [
        'basicRules'     => 'BasicRules',
        'enableAllPatch' => 'EnableAllPatch',
        'runMode'        => 'RunMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basicRules) {
            $res['BasicRules'] = $this->basicRules;
        }
        if (null !== $this->enableAllPatch) {
            $res['EnableAllPatch'] = $this->enableAllPatch;
        }
        if (null !== $this->runMode) {
            $res['RunMode'] = $this->runMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipsConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BasicRules'])) {
            $model->basicRules = $map['BasicRules'];
        }
        if (isset($map['EnableAllPatch'])) {
            $model->enableAllPatch = $map['EnableAllPatch'];
        }
        if (isset($map['RunMode'])) {
            $model->runMode = $map['RunMode'];
        }

        return $model;
    }
}
