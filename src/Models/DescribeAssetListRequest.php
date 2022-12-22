<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeAssetListRequest extends Model
{
    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var string
     */
    public $currentPage;

    /**
     * @description The IP version of the asset that is protected by Cloud Firewall. Valid values:
     *
     *   **4**: IPv4 (default)
     *   **6**: IPv6
     *
     * @example 4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description The language of the content within the response. Valid values:
     *
     *   **zh**: Chinese (default)
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The UID of the member that is added in Cloud Firewall.
     *
     * @example 258039427902****
     *
     * @var int
     */
    public $memberUid;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The ID of the region in which Cloud Firewall is supported.
     *
     * >  For more information about the regions in which Cloud Firewall is supported, see [Supported regions](~~195657~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description The type of the asset. Valid values:
     *
     *   **BastionHostEgressIP**: the egress IP address of a bastion host
     *   **BastionHostIngressIP**: the ingress IP address of a bastion host
     *   **EcsEIP**: the elastic IP address (EIP) of an Elastic Compute Service (ECS) instance
     *   **EcsPublicIP**: the public IP address of an ECS instance
     *   **EIP**: the EIP
     *   **EniEIP**: the EIP of an elastic network interface (ENI)
     *   **NatEIP**: the EIP of a Network Address Translation (NAT) gateway
     *   **SlbEIP**: the EIP of a Server Load Balancer (SLB) instance
     *   **SlbPublicIP**: the public IP address of an SLB instance
     *   **NatPublicIP**: the public IP address of a NAT gateway
     *   **HAVIP**: the high-availability virtual IP address (HAVIP)
     *
     * @example EIP
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The instance ID or the IP address of the asset.
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $searchItem;

    /**
     * @description The status of the security group policy. Valid values:
     *
     *   **pass**: delivered
     *
     *   **block**: undelivered
     *
     *   **unsupport**: unsupported
     *
     * > If you do not specify this parameter, the assets on which security group policies in all states take effect are queried.
     * @example pass
     *
     * @var string
     */
    public $sgStatus;

    /**
     * @description The status of the firewall. Valid values:
     *
     *   **open**: The firewall is enabled.
     *   **opening**: The firewall is being enabled.
     *   **closed**: The firewall is disabled.
     *   **closing**: The firewall is being disabled.
     *
     * >  If you do not specify this parameter, the assets that are configured for firewalls in all states are queried.
     * @example open
     *
     * @var string
     */
    public $status;

    /**
     * @description This parameter is deprecated.
     *
     * @example eip
     *
     * @var string
     */
    public $type;

    /**
     * @description The edition of Cloud Firewall. Valid values:
     *
     *   **buy**: a paid edition (default)
     *   **free**: a free edition
     *
     * @example buy
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'currentPage'  => 'CurrentPage',
        'ipVersion'    => 'IpVersion',
        'lang'         => 'Lang',
        'memberUid'    => 'MemberUid',
        'pageSize'     => 'PageSize',
        'regionNo'     => 'RegionNo',
        'resourceType' => 'ResourceType',
        'searchItem'   => 'SearchItem',
        'sgStatus'     => 'SgStatus',
        'status'       => 'Status',
        'type'         => 'Type',
        'userType'     => 'UserType',
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
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->searchItem) {
            $res['SearchItem'] = $this->searchItem;
        }
        if (null !== $this->sgStatus) {
            $res['SgStatus'] = $this->sgStatus;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAssetListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SearchItem'])) {
            $model->searchItem = $map['SearchItem'];
        }
        if (isset($map['SgStatus'])) {
            $model->sgStatus = $map['SgStatus'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
