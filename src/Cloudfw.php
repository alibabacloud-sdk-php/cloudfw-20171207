<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddAddressBookRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddAddressBookResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddInstanceMembersRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddInstanceMembersResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\BatchCopyVpcFirewallControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\BatchCopyVpcFirewallControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateNatFirewallControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateNatFirewallControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateTrFirewallV2Request;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateTrFirewallV2Response;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateTrFirewallV2RoutePolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateTrFirewallV2RoutePolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateTrFirewallV2RoutePolicyShrinkRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateVpcFirewallCenConfigureRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateVpcFirewallCenConfigureResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateVpcFirewallConfigureRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateVpcFirewallConfigureResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateVpcFirewallControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateVpcFirewallControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteAddressBookRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteAddressBookResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteFirewallV2RoutePoliciesRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteFirewallV2RoutePoliciesResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteInstanceMembersRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteInstanceMembersResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteNatFirewallControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteNatFirewallControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteTrFirewallV2Request;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteTrFirewallV2Response;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteVpcFirewallCenConfigureRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteVpcFirewallCenConfigureResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteVpcFirewallConfigureRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteVpcFirewallConfigureResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteVpcFirewallControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteVpcFirewallControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeACLProtectTrendRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeACLProtectTrendResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAddressBookRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAddressBookResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAssetListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAssetListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDefaultIPSConfigRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDefaultIPSConfigResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDomainResolveRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDomainResolveResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInstanceMembersRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInstanceMembersResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInternetOpenIpRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInternetOpenIpResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInternetTrafficTrendRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInternetTrafficTrendResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInvadeEventListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInvadeEventListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallPolicyPriorUsedRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallPolicyPriorUsedResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDestinationIPRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDestinationIPResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDomainRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDomainResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePolicyAdvancedConfigRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePolicyAdvancedConfigResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePolicyPriorUsedRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePolicyPriorUsedResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventPayloadRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventPayloadResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallPolicyBackUpAssociationListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallPolicyBackUpAssociationListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2DetailRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2DetailResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2ListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2ListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2RouteListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2RouteListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallV2RoutePolicyListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallV2RoutePolicyListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeUserAssetIPTrafficInfoRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeUserAssetIPTrafficInfoResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeUserIPSWhitelistRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeUserIPSWhitelistResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallAclGroupListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallAclGroupListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenDetailRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenDetailResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallDefaultIPSConfigRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallDefaultIPSConfigResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallDetailRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallDetailResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallPolicyPriorUsedRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallPolicyPriorUsedResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVulnerabilityProtectedListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVulnerabilityProtectedListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyAddressBookRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyAddressBookResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyControlPolicyPositionRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyControlPolicyPositionResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyDefaultIPSConfigRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyDefaultIPSConfigResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyFirewallV2RoutePolicySwitchRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyFirewallV2RoutePolicySwitchResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyInstanceMemberAttributesRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyInstanceMemberAttributesResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyNatFirewallControlPolicyPositionRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyNatFirewallControlPolicyPositionResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyNatFirewallControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyNatFirewallControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyPolicyAdvancedConfigRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyPolicyAdvancedConfigResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyTrFirewallV2ConfigurationRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyTrFirewallV2ConfigurationResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyTrFirewallV2RoutePolicyScopeRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyTrFirewallV2RoutePolicyScopeResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyTrFirewallV2RoutePolicyScopeShrinkRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyUserIPSWhitelistRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyUserIPSWhitelistResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallCenConfigureRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallCenConfigureResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallCenSwitchStatusRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallCenSwitchStatusResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallConfigureRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallConfigureResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallControlPolicyPositionRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallControlPolicyPositionResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallDefaultIPSConfigRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallDefaultIPSConfigResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallSwitchStatusRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallSwitchStatusResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutDisableAllFwSwitchRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutDisableAllFwSwitchResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutDisableFwSwitchRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutDisableFwSwitchResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutEnableAllFwSwitchRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutEnableAllFwSwitchResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutEnableFwSwitchRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutEnableFwSwitchResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ReleasePostInstanceRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ReleasePostInstanceResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ResetVpcFirewallRuleHitCountRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ResetVpcFirewallRuleHitCountResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Cloudfw extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
            'ap-southeast-1' => 'cloudfw.ap-southeast-1.aliyuncs.com',
            'cn-hangzhou'    => 'cloudfw.cn-hangzhou.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cloudfw', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * You can call the AddAddressBook operation to create an address book for access control. The address book can be an IP address book, an ECS tag-based address book, a port address book, or a domain address book.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param AddAddressBookRequest $request AddAddressBookRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return AddAddressBookResponse AddAddressBookResponse
     */
    public function addAddressBookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addressList)) {
            $query['AddressList'] = $request->addressList;
        }
        if (!Utils::isUnset($request->autoAddTagEcs)) {
            $query['AutoAddTagEcs'] = $request->autoAddTagEcs;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->groupType)) {
            $query['GroupType'] = $request->groupType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->tagList)) {
            $query['TagList'] = $request->tagList;
        }
        if (!Utils::isUnset($request->tagRelation)) {
            $query['TagRelation'] = $request->tagRelation;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddAddressBook',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddAddressBookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the AddAddressBook operation to create an address book for access control. The address book can be an IP address book, an ECS tag-based address book, a port address book, or a domain address book.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param AddAddressBookRequest $request AddAddressBookRequest
     *
     * @return AddAddressBookResponse AddAddressBookResponse
     */
    public function addAddressBook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAddressBookWithOptions($request, $runtime);
    }

    /**
     * You can call the AddControlPolicy operation to create an access control policy to allow, block, or monitor traffic that reaches Cloud Firewall.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param AddControlPolicyRequest $request AddControlPolicyRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AddControlPolicyResponse AddControlPolicyResponse
     */
    public function addControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclAction)) {
            $query['AclAction'] = $request->aclAction;
        }
        if (!Utils::isUnset($request->applicationName)) {
            $query['ApplicationName'] = $request->applicationName;
        }
        if (!Utils::isUnset($request->applicationNameList)) {
            $query['ApplicationNameList'] = $request->applicationNameList;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destPort)) {
            $query['DestPort'] = $request->destPort;
        }
        if (!Utils::isUnset($request->destPortGroup)) {
            $query['DestPortGroup'] = $request->destPortGroup;
        }
        if (!Utils::isUnset($request->destPortType)) {
            $query['DestPortType'] = $request->destPortType;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->destinationType)) {
            $query['DestinationType'] = $request->destinationType;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->newOrder)) {
            $query['NewOrder'] = $request->newOrder;
        }
        if (!Utils::isUnset($request->proto)) {
            $query['Proto'] = $request->proto;
        }
        if (!Utils::isUnset($request->release)) {
            $query['Release'] = $request->release;
        }
        if (!Utils::isUnset($request->repeatDays)) {
            $query['RepeatDays'] = $request->repeatDays;
        }
        if (!Utils::isUnset($request->repeatEndTime)) {
            $query['RepeatEndTime'] = $request->repeatEndTime;
        }
        if (!Utils::isUnset($request->repeatStartTime)) {
            $query['RepeatStartTime'] = $request->repeatStartTime;
        }
        if (!Utils::isUnset($request->repeatType)) {
            $query['RepeatType'] = $request->repeatType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the AddControlPolicy operation to create an access control policy to allow, block, or monitor traffic that reaches Cloud Firewall.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param AddControlPolicyRequest $request AddControlPolicyRequest
     *
     * @return AddControlPolicyResponse AddControlPolicyResponse
     */
    public function addControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addControlPolicyWithOptions($request, $runtime);
    }

    /**
     * You can call the AddInstanceMembers operation to add members to Cloud Firewall.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param AddInstanceMembersRequest $request AddInstanceMembersRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return AddInstanceMembersResponse AddInstanceMembersResponse
     */
    public function addInstanceMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->members)) {
            $query['Members'] = $request->members;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddInstanceMembers',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddInstanceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the AddInstanceMembers operation to add members to Cloud Firewall.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param AddInstanceMembersRequest $request AddInstanceMembersRequest
     *
     * @return AddInstanceMembersResponse AddInstanceMembersResponse
     */
    public function addInstanceMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addInstanceMembersWithOptions($request, $runtime);
    }

    /**
     * You can call the BatchCopyVpcFirewallControlPolicy operation to copy all access control policies from a policy group of a source VPC firewall to a policy group of a destination VPC firewall.
     *   * Before you call this operation, we recommend that you back up access control policies. For more information about how to back up an access control policy, see [Back up an access control policy](https://www.alibabacloud.com/help/en/cloud-firewall/latest/back-up-and-roll-back-an-access-control-policy).
     *   * After you call this operation, all the access control policies in the policy group of the destination VPC firewall are replaced.
     *   * The policy groups of the source VPC firewall and the destination VPC firewall must belong to the same Alibaba Cloud account.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. When the number of calls to this operation per second exceeds the limit, throttling is triggered. Throttling may affect your business. We recommend that you take note of the limit on this operation.
     *   *
     * @param BatchCopyVpcFirewallControlPolicyRequest $request BatchCopyVpcFirewallControlPolicyRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchCopyVpcFirewallControlPolicyResponse BatchCopyVpcFirewallControlPolicyResponse
     */
    public function batchCopyVpcFirewallControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->sourceVpcFirewallId)) {
            $query['SourceVpcFirewallId'] = $request->sourceVpcFirewallId;
        }
        if (!Utils::isUnset($request->targetVpcFirewallId)) {
            $query['TargetVpcFirewallId'] = $request->targetVpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchCopyVpcFirewallControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchCopyVpcFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the BatchCopyVpcFirewallControlPolicy operation to copy all access control policies from a policy group of a source VPC firewall to a policy group of a destination VPC firewall.
     *   * Before you call this operation, we recommend that you back up access control policies. For more information about how to back up an access control policy, see [Back up an access control policy](https://www.alibabacloud.com/help/en/cloud-firewall/latest/back-up-and-roll-back-an-access-control-policy).
     *   * After you call this operation, all the access control policies in the policy group of the destination VPC firewall are replaced.
     *   * The policy groups of the source VPC firewall and the destination VPC firewall must belong to the same Alibaba Cloud account.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. When the number of calls to this operation per second exceeds the limit, throttling is triggered. Throttling may affect your business. We recommend that you take note of the limit on this operation.
     *   *
     * @param BatchCopyVpcFirewallControlPolicyRequest $request BatchCopyVpcFirewallControlPolicyRequest
     *
     * @return BatchCopyVpcFirewallControlPolicyResponse BatchCopyVpcFirewallControlPolicyResponse
     */
    public function batchCopyVpcFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCopyVpcFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to create a policy that allows, denies, or monitors the traffic that passes through the NAT firewall.
     *   *
     * @param CreateNatFirewallControlPolicyRequest $request CreateNatFirewallControlPolicyRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNatFirewallControlPolicyResponse CreateNatFirewallControlPolicyResponse
     */
    public function createNatFirewallControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclAction)) {
            $query['AclAction'] = $request->aclAction;
        }
        if (!Utils::isUnset($request->applicationNameList)) {
            $query['ApplicationNameList'] = $request->applicationNameList;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destPort)) {
            $query['DestPort'] = $request->destPort;
        }
        if (!Utils::isUnset($request->destPortGroup)) {
            $query['DestPortGroup'] = $request->destPortGroup;
        }
        if (!Utils::isUnset($request->destPortType)) {
            $query['DestPortType'] = $request->destPortType;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->destinationType)) {
            $query['DestinationType'] = $request->destinationType;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->domainResolveType)) {
            $query['DomainResolveType'] = $request->domainResolveType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        if (!Utils::isUnset($request->newOrder)) {
            $query['NewOrder'] = $request->newOrder;
        }
        if (!Utils::isUnset($request->proto)) {
            $query['Proto'] = $request->proto;
        }
        if (!Utils::isUnset($request->release)) {
            $query['Release'] = $request->release;
        }
        if (!Utils::isUnset($request->repeatDays)) {
            $query['RepeatDays'] = $request->repeatDays;
        }
        if (!Utils::isUnset($request->repeatEndTime)) {
            $query['RepeatEndTime'] = $request->repeatEndTime;
        }
        if (!Utils::isUnset($request->repeatStartTime)) {
            $query['RepeatStartTime'] = $request->repeatStartTime;
        }
        if (!Utils::isUnset($request->repeatType)) {
            $query['RepeatType'] = $request->repeatType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNatFirewallControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNatFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to create a policy that allows, denies, or monitors the traffic that passes through the NAT firewall.
     *   *
     * @param CreateNatFirewallControlPolicyRequest $request CreateNatFirewallControlPolicyRequest
     *
     * @return CreateNatFirewallControlPolicyResponse CreateNatFirewallControlPolicyResponse
     */
    public function createNatFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNatFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @param CreateTrFirewallV2Request $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateTrFirewallV2Response
     */
    public function createTrFirewallV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->firewallDescription)) {
            $query['FirewallDescription'] = $request->firewallDescription;
        }
        if (!Utils::isUnset($request->firewallName)) {
            $query['FirewallName'] = $request->firewallName;
        }
        if (!Utils::isUnset($request->firewallSubnetCidr)) {
            $query['FirewallSubnetCidr'] = $request->firewallSubnetCidr;
        }
        if (!Utils::isUnset($request->firewallVpcCidr)) {
            $query['FirewallVpcCidr'] = $request->firewallVpcCidr;
        }
        if (!Utils::isUnset($request->firewallVpcId)) {
            $query['FirewallVpcId'] = $request->firewallVpcId;
        }
        if (!Utils::isUnset($request->firewallVswitchId)) {
            $query['FirewallVswitchId'] = $request->firewallVswitchId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->routeMode)) {
            $query['RouteMode'] = $request->routeMode;
        }
        if (!Utils::isUnset($request->trAttachmentMasterCidr)) {
            $query['TrAttachmentMasterCidr'] = $request->trAttachmentMasterCidr;
        }
        if (!Utils::isUnset($request->trAttachmentMasterZone)) {
            $query['TrAttachmentMasterZone'] = $request->trAttachmentMasterZone;
        }
        if (!Utils::isUnset($request->trAttachmentSlaveCidr)) {
            $query['TrAttachmentSlaveCidr'] = $request->trAttachmentSlaveCidr;
        }
        if (!Utils::isUnset($request->trAttachmentSlaveZone)) {
            $query['TrAttachmentSlaveZone'] = $request->trAttachmentSlaveZone;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTrFirewallV2',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTrFirewallV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTrFirewallV2Request $request
     *
     * @return CreateTrFirewallV2Response
     */
    public function createTrFirewallV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTrFirewallV2WithOptions($request, $runtime);
    }

    /**
     * @param CreateTrFirewallV2RoutePolicyRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateTrFirewallV2RoutePolicyResponse
     */
    public function createTrFirewallV2RoutePolicyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateTrFirewallV2RoutePolicyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->destCandidateList)) {
            $request->destCandidateListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->destCandidateList, 'DestCandidateList', 'json');
        }
        if (!Utils::isUnset($tmpReq->srcCandidateList)) {
            $request->srcCandidateListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->srcCandidateList, 'SrcCandidateList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->destCandidateListShrink)) {
            $query['DestCandidateList'] = $request->destCandidateListShrink;
        }
        if (!Utils::isUnset($request->firewallId)) {
            $query['FirewallId'] = $request->firewallId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->policyDescription)) {
            $query['PolicyDescription'] = $request->policyDescription;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->policyType)) {
            $query['PolicyType'] = $request->policyType;
        }
        if (!Utils::isUnset($request->srcCandidateListShrink)) {
            $query['SrcCandidateList'] = $request->srcCandidateListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTrFirewallV2RoutePolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTrFirewallV2RoutePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTrFirewallV2RoutePolicyRequest $request
     *
     * @return CreateTrFirewallV2RoutePolicyResponse
     */
    public function createTrFirewallV2RoutePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTrFirewallV2RoutePolicyWithOptions($request, $runtime);
    }

    /**
     * You can call the CreateVpcFirewallCenConfigure operation to create a VPC firewall. The VPC firewall protects mutual access traffic between a specified VPC and a network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance. The VPC firewall cannot protect mutual access traffic between VBRs, between CCN instances, or between VBRs and CCN instances. For more information, see [VPC firewall limits](~~172295~~).
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param CreateVpcFirewallCenConfigureRequest $request CreateVpcFirewallCenConfigureRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVpcFirewallCenConfigureResponse CreateVpcFirewallCenConfigureResponse
     */
    public function createVpcFirewallCenConfigureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->firewallSwitch)) {
            $query['FirewallSwitch'] = $request->firewallSwitch;
        }
        if (!Utils::isUnset($request->firewallVSwitchCidrBlock)) {
            $query['FirewallVSwitchCidrBlock'] = $request->firewallVSwitchCidrBlock;
        }
        if (!Utils::isUnset($request->firewallVpcCidrBlock)) {
            $query['FirewallVpcCidrBlock'] = $request->firewallVpcCidrBlock;
        }
        if (!Utils::isUnset($request->firewallVpcZoneId)) {
            $query['FirewallVpcZoneId'] = $request->firewallVpcZoneId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->networkInstanceId)) {
            $query['NetworkInstanceId'] = $request->networkInstanceId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcFirewallName)) {
            $query['VpcFirewallName'] = $request->vpcFirewallName;
        }
        if (!Utils::isUnset($request->vpcRegion)) {
            $query['VpcRegion'] = $request->vpcRegion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVpcFirewallCenConfigure',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVpcFirewallCenConfigureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the CreateVpcFirewallCenConfigure operation to create a VPC firewall. The VPC firewall protects mutual access traffic between a specified VPC and a network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance. The VPC firewall cannot protect mutual access traffic between VBRs, between CCN instances, or between VBRs and CCN instances. For more information, see [VPC firewall limits](~~172295~~).
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param CreateVpcFirewallCenConfigureRequest $request CreateVpcFirewallCenConfigureRequest
     *
     * @return CreateVpcFirewallCenConfigureResponse CreateVpcFirewallCenConfigureResponse
     */
    public function createVpcFirewallCenConfigure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpcFirewallCenConfigureWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to create a VPC firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit. The VPC firewall does not control the mutual access traffic between VPCs that reside in different regions or belong to different Alibaba Cloud accounts. The firewall also does not control the mutual access traffic between VPCs and virtual border routers (VBRs). For more information, see [VPC firewall limits](~~172295~~).
     *   * ### [](#qps)QPS limit
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param CreateVpcFirewallConfigureRequest $request CreateVpcFirewallConfigureRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVpcFirewallConfigureResponse CreateVpcFirewallConfigureResponse
     */
    public function createVpcFirewallConfigureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->firewallSwitch)) {
            $query['FirewallSwitch'] = $request->firewallSwitch;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->localVpcCidrTableList)) {
            $query['LocalVpcCidrTableList'] = $request->localVpcCidrTableList;
        }
        if (!Utils::isUnset($request->localVpcId)) {
            $query['LocalVpcId'] = $request->localVpcId;
        }
        if (!Utils::isUnset($request->localVpcRegion)) {
            $query['LocalVpcRegion'] = $request->localVpcRegion;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->peerVpcCidrTableList)) {
            $query['PeerVpcCidrTableList'] = $request->peerVpcCidrTableList;
        }
        if (!Utils::isUnset($request->peerVpcId)) {
            $query['PeerVpcId'] = $request->peerVpcId;
        }
        if (!Utils::isUnset($request->peerVpcRegion)) {
            $query['PeerVpcRegion'] = $request->peerVpcRegion;
        }
        if (!Utils::isUnset($request->vpcFirewallName)) {
            $query['VpcFirewallName'] = $request->vpcFirewallName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVpcFirewallConfigure',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVpcFirewallConfigureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to create a VPC firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit. The VPC firewall does not control the mutual access traffic between VPCs that reside in different regions or belong to different Alibaba Cloud accounts. The firewall also does not control the mutual access traffic between VPCs and virtual border routers (VBRs). For more information, see [VPC firewall limits](~~172295~~).
     *   * ### [](#qps)QPS limit
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param CreateVpcFirewallConfigureRequest $request CreateVpcFirewallConfigureRequest
     *
     * @return CreateVpcFirewallConfigureResponse CreateVpcFirewallConfigureResponse
     */
    public function createVpcFirewallConfigure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpcFirewallConfigureWithOptions($request, $runtime);
    }

    /**
     * You can call the CreateVpcFirewallControlPolicy operation to create an access control policy in a specified policy group for a VPC firewall. Different access control policies are used when a VPC firewall is used to protect traffic between two VPCs that are connected by using a Cloud Enterprise Network (CEN) instance or an Express Connect circuit.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param CreateVpcFirewallControlPolicyRequest $request CreateVpcFirewallControlPolicyRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVpcFirewallControlPolicyResponse CreateVpcFirewallControlPolicyResponse
     */
    public function createVpcFirewallControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclAction)) {
            $query['AclAction'] = $request->aclAction;
        }
        if (!Utils::isUnset($request->applicationName)) {
            $query['ApplicationName'] = $request->applicationName;
        }
        if (!Utils::isUnset($request->applicationNameList)) {
            $query['ApplicationNameList'] = $request->applicationNameList;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destPort)) {
            $query['DestPort'] = $request->destPort;
        }
        if (!Utils::isUnset($request->destPortGroup)) {
            $query['DestPortGroup'] = $request->destPortGroup;
        }
        if (!Utils::isUnset($request->destPortType)) {
            $query['DestPortType'] = $request->destPortType;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->destinationType)) {
            $query['DestinationType'] = $request->destinationType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->newOrder)) {
            $query['NewOrder'] = $request->newOrder;
        }
        if (!Utils::isUnset($request->proto)) {
            $query['Proto'] = $request->proto;
        }
        if (!Utils::isUnset($request->release)) {
            $query['Release'] = $request->release;
        }
        if (!Utils::isUnset($request->repeatDays)) {
            $query['RepeatDays'] = $request->repeatDays;
        }
        if (!Utils::isUnset($request->repeatEndTime)) {
            $query['RepeatEndTime'] = $request->repeatEndTime;
        }
        if (!Utils::isUnset($request->repeatStartTime)) {
            $query['RepeatStartTime'] = $request->repeatStartTime;
        }
        if (!Utils::isUnset($request->repeatType)) {
            $query['RepeatType'] = $request->repeatType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVpcFirewallControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVpcFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the CreateVpcFirewallControlPolicy operation to create an access control policy in a specified policy group for a VPC firewall. Different access control policies are used when a VPC firewall is used to protect traffic between two VPCs that are connected by using a Cloud Enterprise Network (CEN) instance or an Express Connect circuit.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param CreateVpcFirewallControlPolicyRequest $request CreateVpcFirewallControlPolicyRequest
     *
     * @return CreateVpcFirewallControlPolicyResponse CreateVpcFirewallControlPolicyResponse
     */
    public function createVpcFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpcFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * You can call the DeleteAddressBook operation to delete an address book for access control.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DeleteAddressBookRequest $request DeleteAddressBookRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAddressBookResponse DeleteAddressBookResponse
     */
    public function deleteAddressBookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupUuid)) {
            $query['GroupUuid'] = $request->groupUuid;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAddressBook',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAddressBookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DeleteAddressBook operation to delete an address book for access control.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DeleteAddressBookRequest $request DeleteAddressBookRequest
     *
     * @return DeleteAddressBookResponse DeleteAddressBookResponse
     */
    public function deleteAddressBook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAddressBookWithOptions($request, $runtime);
    }

    /**
     * You can call the DeleteControlPolicy operation to delete an access control policy that applies to inbound or outbound traffic.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DeleteControlPolicyRequest $request DeleteControlPolicyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteControlPolicyResponse DeleteControlPolicyResponse
     */
    public function deleteControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclUuid)) {
            $query['AclUuid'] = $request->aclUuid;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DeleteControlPolicy operation to delete an access control policy that applies to inbound or outbound traffic.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DeleteControlPolicyRequest $request DeleteControlPolicyRequest
     *
     * @return DeleteControlPolicyResponse DeleteControlPolicyResponse
     */
    public function deleteControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFirewallV2RoutePoliciesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteFirewallV2RoutePoliciesResponse
     */
    public function deleteFirewallV2RoutePoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->firewallId)) {
            $query['FirewallId'] = $request->firewallId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->trFirewallRoutePolicyId)) {
            $query['TrFirewallRoutePolicyId'] = $request->trFirewallRoutePolicyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFirewallV2RoutePolicies',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFirewallV2RoutePoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFirewallV2RoutePoliciesRequest $request
     *
     * @return DeleteFirewallV2RoutePoliciesResponse
     */
    public function deleteFirewallV2RoutePolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFirewallV2RoutePoliciesWithOptions($request, $runtime);
    }

    /**
     * You can call the DeleteInstanceMembers operation to remove members from Cloud Firewall.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DeleteInstanceMembersRequest $request DeleteInstanceMembersRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteInstanceMembersResponse DeleteInstanceMembersResponse
     */
    public function deleteInstanceMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->memberUids)) {
            $query['MemberUids'] = $request->memberUids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteInstanceMembers',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DeleteInstanceMembers operation to remove members from Cloud Firewall.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DeleteInstanceMembersRequest $request DeleteInstanceMembersRequest
     *
     * @return DeleteInstanceMembersResponse DeleteInstanceMembersResponse
     */
    public function deleteInstanceMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceMembersWithOptions($request, $runtime);
    }

    /**
     * You can use this operation to delete an outbound access control policy that is created for a NAT firewall.
     *   *
     * @param DeleteNatFirewallControlPolicyRequest $request DeleteNatFirewallControlPolicyRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNatFirewallControlPolicyResponse DeleteNatFirewallControlPolicyResponse
     */
    public function deleteNatFirewallControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclUuid)) {
            $query['AclUuid'] = $request->aclUuid;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNatFirewallControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNatFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can use this operation to delete an outbound access control policy that is created for a NAT firewall.
     *   *
     * @param DeleteNatFirewallControlPolicyRequest $request DeleteNatFirewallControlPolicyRequest
     *
     * @return DeleteNatFirewallControlPolicyResponse DeleteNatFirewallControlPolicyResponse
     */
    public function deleteNatFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNatFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTrFirewallV2Request $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteTrFirewallV2Response
     */
    public function deleteTrFirewallV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->firewallId)) {
            $query['FirewallId'] = $request->firewallId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTrFirewallV2',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTrFirewallV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTrFirewallV2Request $request
     *
     * @return DeleteTrFirewallV2Response
     */
    public function deleteTrFirewallV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTrFirewallV2WithOptions($request, $runtime);
    }

    /**
     * You can call the DeleteVpcFirewallCenConfigure operation to delete a VPC firewall. The VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance. Before you call this operation, make sure that you have created a VPC firewall by calling the [CreateVpcFirewallCenConfigure](~~345772~~) operation.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DeleteVpcFirewallCenConfigureRequest $request DeleteVpcFirewallCenConfigureRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVpcFirewallCenConfigureResponse DeleteVpcFirewallCenConfigureResponse
     */
    public function deleteVpcFirewallCenConfigureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->vpcFirewallIdList)) {
            $query['VpcFirewallIdList'] = $request->vpcFirewallIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVpcFirewallCenConfigure',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVpcFirewallCenConfigureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DeleteVpcFirewallCenConfigure operation to delete a VPC firewall. The VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance. Before you call this operation, make sure that you have created a VPC firewall by calling the [CreateVpcFirewallCenConfigure](~~345772~~) operation.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DeleteVpcFirewallCenConfigureRequest $request DeleteVpcFirewallCenConfigureRequest
     *
     * @return DeleteVpcFirewallCenConfigureResponse DeleteVpcFirewallCenConfigureResponse
     */
    public function deleteVpcFirewallCenConfigure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpcFirewallCenConfigureWithOptions($request, $runtime);
    }

    /**
     * You can call the DeleteVpcFirewallCenConfigure operation to delete a VPC firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit. Before you call the operation, make sure that you created a VPC firewall by calling the [CreateVpcFirewallConfigure](~~342893~~) operation.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DeleteVpcFirewallConfigureRequest $request DeleteVpcFirewallConfigureRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVpcFirewallConfigureResponse DeleteVpcFirewallConfigureResponse
     */
    public function deleteVpcFirewallConfigureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->vpcFirewallIdList)) {
            $query['VpcFirewallIdList'] = $request->vpcFirewallIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVpcFirewallConfigure',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVpcFirewallConfigureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DeleteVpcFirewallCenConfigure operation to delete a VPC firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit. Before you call the operation, make sure that you created a VPC firewall by calling the [CreateVpcFirewallConfigure](~~342893~~) operation.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DeleteVpcFirewallConfigureRequest $request DeleteVpcFirewallConfigureRequest
     *
     * @return DeleteVpcFirewallConfigureResponse DeleteVpcFirewallConfigureResponse
     */
    public function deleteVpcFirewallConfigure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpcFirewallConfigureWithOptions($request, $runtime);
    }

    /**
     * You can call the DeleteVpcFirewallControlPolicy operation to delete an access control policy from a specific policy group for a VPC firewall. Different access control policies are used for the VPC firewall that is used to protect each Cloud Enterprise Network (CEN) instance and the VPC firewall that is used to protect each Express Connect circuit.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DeleteVpcFirewallControlPolicyRequest $request DeleteVpcFirewallControlPolicyRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVpcFirewallControlPolicyResponse DeleteVpcFirewallControlPolicyResponse
     */
    public function deleteVpcFirewallControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclUuid)) {
            $query['AclUuid'] = $request->aclUuid;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVpcFirewallControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVpcFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DeleteVpcFirewallControlPolicy operation to delete an access control policy from a specific policy group for a VPC firewall. Different access control policies are used for the VPC firewall that is used to protect each Cloud Enterprise Network (CEN) instance and the VPC firewall that is used to protect each Express Connect circuit.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DeleteVpcFirewallControlPolicyRequest $request DeleteVpcFirewallControlPolicyRequest
     *
     * @return DeleteVpcFirewallControlPolicyResponse DeleteVpcFirewallControlPolicyResponse
     */
    public function deleteVpcFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpcFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeACLProtectTrendRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeACLProtectTrendResponse
     */
    public function describeACLProtectTrendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeACLProtectTrend',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeACLProtectTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeACLProtectTrendRequest $request
     *
     * @return DescribeACLProtectTrendResponse
     */
    public function describeACLProtectTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeACLProtectTrendWithOptions($request, $runtime);
    }

    /**
     * You can call the DescribeAddressBook operation to query the details about an address book for an access control policy.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeAddressBookRequest $request DescribeAddressBookRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAddressBookResponse DescribeAddressBookResponse
     */
    public function describeAddressBookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->containPort)) {
            $query['ContainPort'] = $request->containPort;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->groupType)) {
            $query['GroupType'] = $request->groupType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAddressBook',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAddressBookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DescribeAddressBook operation to query the details about an address book for an access control policy.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeAddressBookRequest $request DescribeAddressBookRequest
     *
     * @return DescribeAddressBookResponse DescribeAddressBookResponse
     */
    public function describeAddressBook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAddressBookWithOptions($request, $runtime);
    }

    /**
     * You can call the DescribeAssetList operation to query the assets that are protected by Cloud Firewall.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeAssetListRequest $request DescribeAssetListRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAssetListResponse DescribeAssetListResponse
     */
    public function describeAssetListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->newResourceTag)) {
            $query['NewResourceTag'] = $request->newResourceTag;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->searchItem)) {
            $query['SearchItem'] = $request->searchItem;
        }
        if (!Utils::isUnset($request->sgStatus)) {
            $query['SgStatus'] = $request->sgStatus;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->userType)) {
            $query['UserType'] = $request->userType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAssetList',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAssetListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DescribeAssetList operation to query the assets that are protected by Cloud Firewall.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeAssetListRequest $request DescribeAssetListRequest
     *
     * @return DescribeAssetListResponse DescribeAssetListResponse
     */
    public function describeAssetList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAssetListWithOptions($request, $runtime);
    }

    /**
     * You can call the DescribeControlPolicy operation to query the details about access control policies by page.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeControlPolicyRequest $request DescribeControlPolicyRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeControlPolicyResponse DescribeControlPolicyResponse
     */
    public function describeControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclAction)) {
            $query['AclAction'] = $request->aclAction;
        }
        if (!Utils::isUnset($request->aclUuid)) {
            $query['AclUuid'] = $request->aclUuid;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->proto)) {
            $query['Proto'] = $request->proto;
        }
        if (!Utils::isUnset($request->release)) {
            $query['Release'] = $request->release;
        }
        if (!Utils::isUnset($request->repeatType)) {
            $query['RepeatType'] = $request->repeatType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DescribeControlPolicy operation to query the details about access control policies by page.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeControlPolicyRequest $request DescribeControlPolicyRequest
     *
     * @return DescribeControlPolicyResponse DescribeControlPolicyResponse
     */
    public function describeControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDefaultIPSConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDefaultIPSConfigResponse
     */
    public function describeDefaultIPSConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDefaultIPSConfig',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDefaultIPSConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDefaultIPSConfigRequest $request
     *
     * @return DescribeDefaultIPSConfigResponse
     */
    public function describeDefaultIPSConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefaultIPSConfigWithOptions($request, $runtime);
    }

    /**
     * You can use this operation to query the DNS record of a domain name. This operation can retrieve DNS records only from Alibaba Cloud DNS. Before you can call this operation, make sure that your domain name is hosted on Alibaba Cloud DNS.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeDomainResolveRequest $request DescribeDomainResolveRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainResolveResponse DescribeDomainResolveResponse
     */
    public function describeDomainResolveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainResolve',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainResolveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can use this operation to query the DNS record of a domain name. This operation can retrieve DNS records only from Alibaba Cloud DNS. Before you can call this operation, make sure that your domain name is hosted on Alibaba Cloud DNS.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeDomainResolveRequest $request DescribeDomainResolveRequest
     *
     * @return DescribeDomainResolveResponse DescribeDomainResolveResponse
     */
    public function describeDomainResolve($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainResolveWithOptions($request, $runtime);
    }

    /**
     * You can use this operation to query the information about members in Cloud Firewall.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeInstanceMembersRequest $request DescribeInstanceMembersRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceMembersResponse DescribeInstanceMembersResponse
     */
    public function describeInstanceMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->memberDesc)) {
            $query['MemberDesc'] = $request->memberDesc;
        }
        if (!Utils::isUnset($request->memberDisplayName)) {
            $query['MemberDisplayName'] = $request->memberDisplayName;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceMembers',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can use this operation to query the information about members in Cloud Firewall.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeInstanceMembersRequest $request DescribeInstanceMembersRequest
     *
     * @return DescribeInstanceMembersResponse DescribeInstanceMembersResponse
     */
    public function describeInstanceMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceMembersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInternetOpenIpRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeInternetOpenIpResponse
     */
    public function describeInternetOpenIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assetsInstanceId)) {
            $query['AssetsInstanceId'] = $request->assetsInstanceId;
        }
        if (!Utils::isUnset($request->assetsInstanceName)) {
            $query['AssetsInstanceName'] = $request->assetsInstanceName;
        }
        if (!Utils::isUnset($request->assetsType)) {
            $query['AssetsType'] = $request->assetsType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->publicIp)) {
            $query['PublicIp'] = $request->publicIp;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $query['RiskLevel'] = $request->riskLevel;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInternetOpenIp',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInternetOpenIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInternetOpenIpRequest $request
     *
     * @return DescribeInternetOpenIpResponse
     */
    public function describeInternetOpenIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInternetOpenIpWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInternetTrafficTrendRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeInternetTrafficTrendResponse
     */
    public function describeInternetTrafficTrendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceCode)) {
            $query['SourceCode'] = $request->sourceCode;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->srcPrivateIP)) {
            $query['SrcPrivateIP'] = $request->srcPrivateIP;
        }
        if (!Utils::isUnset($request->srcPublicIP)) {
            $query['SrcPublicIP'] = $request->srcPublicIP;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->trafficType)) {
            $query['TrafficType'] = $request->trafficType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInternetTrafficTrend',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInternetTrafficTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInternetTrafficTrendRequest $request
     *
     * @return DescribeInternetTrafficTrendResponse
     */
    public function describeInternetTrafficTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInternetTrafficTrendWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInvadeEventListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInvadeEventListResponse
     */
    public function describeInvadeEventListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assetsIP)) {
            $query['AssetsIP'] = $request->assetsIP;
        }
        if (!Utils::isUnset($request->assetsInstanceId)) {
            $query['AssetsInstanceId'] = $request->assetsInstanceId;
        }
        if (!Utils::isUnset($request->assetsInstanceName)) {
            $query['AssetsInstanceName'] = $request->assetsInstanceName;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventKey)) {
            $query['EventKey'] = $request->eventKey;
        }
        if (!Utils::isUnset($request->eventName)) {
            $query['EventName'] = $request->eventName;
        }
        if (!Utils::isUnset($request->eventUuid)) {
            $query['EventUuid'] = $request->eventUuid;
        }
        if (!Utils::isUnset($request->isIgnore)) {
            $query['IsIgnore'] = $request->isIgnore;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->processStatusList)) {
            $query['ProcessStatusList'] = $request->processStatusList;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $query['RiskLevel'] = $request->riskLevel;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInvadeEventList',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInvadeEventListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInvadeEventListRequest $request
     *
     * @return DescribeInvadeEventListResponse
     */
    public function describeInvadeEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInvadeEventListWithOptions($request, $runtime);
    }

    /**
     * You can use this operation to query the information about all access control policies that are created for NAT firewalls by page.
     *   *
     * @param DescribeNatFirewallControlPolicyRequest $request DescribeNatFirewallControlPolicyRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNatFirewallControlPolicyResponse DescribeNatFirewallControlPolicyResponse
     */
    public function describeNatFirewallControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclAction)) {
            $query['AclAction'] = $request->aclAction;
        }
        if (!Utils::isUnset($request->aclUuid)) {
            $query['AclUuid'] = $request->aclUuid;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->proto)) {
            $query['Proto'] = $request->proto;
        }
        if (!Utils::isUnset($request->release)) {
            $query['Release'] = $request->release;
        }
        if (!Utils::isUnset($request->repeatType)) {
            $query['RepeatType'] = $request->repeatType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNatFirewallControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNatFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can use this operation to query the information about all access control policies that are created for NAT firewalls by page.
     *   *
     * @param DescribeNatFirewallControlPolicyRequest $request DescribeNatFirewallControlPolicyRequest
     *
     * @return DescribeNatFirewallControlPolicyResponse DescribeNatFirewallControlPolicyResponse
     */
    public function describeNatFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNatFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * You can use this operation to query the priority range of access control policies that are created for a NAT firewall.
     *   *
     * @param DescribeNatFirewallPolicyPriorUsedRequest $request DescribeNatFirewallPolicyPriorUsedRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNatFirewallPolicyPriorUsedResponse DescribeNatFirewallPolicyPriorUsedResponse
     */
    public function describeNatFirewallPolicyPriorUsedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNatFirewallPolicyPriorUsed',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNatFirewallPolicyPriorUsedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can use this operation to query the priority range of access control policies that are created for a NAT firewall.
     *   *
     * @param DescribeNatFirewallPolicyPriorUsedRequest $request DescribeNatFirewallPolicyPriorUsedRequest
     *
     * @return DescribeNatFirewallPolicyPriorUsedResponse DescribeNatFirewallPolicyPriorUsedResponse
     */
    public function describeNatFirewallPolicyPriorUsed($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNatFirewallPolicyPriorUsedWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOutgoingDestinationIPRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeOutgoingDestinationIPResponse
     */
    public function describeOutgoingDestinationIPWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationName)) {
            $query['ApplicationName'] = $request->applicationName;
        }
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dstIP)) {
            $query['DstIP'] = $request->dstIP;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->privateIP)) {
            $query['PrivateIP'] = $request->privateIP;
        }
        if (!Utils::isUnset($request->publicIP)) {
            $query['PublicIP'] = $request->publicIP;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tagIdNew)) {
            $query['TagIdNew'] = $request->tagIdNew;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOutgoingDestinationIP',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOutgoingDestinationIPResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOutgoingDestinationIPRequest $request
     *
     * @return DescribeOutgoingDestinationIPResponse
     */
    public function describeOutgoingDestinationIP($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOutgoingDestinationIPWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOutgoingDomainRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeOutgoingDomainResponse
     */
    public function describeOutgoingDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->publicIP)) {
            $query['PublicIP'] = $request->publicIP;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tagIdNew)) {
            $query['TagIdNew'] = $request->tagIdNew;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOutgoingDomain',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOutgoingDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOutgoingDomainRequest $request
     *
     * @return DescribeOutgoingDomainResponse
     */
    public function describeOutgoingDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOutgoingDomainWithOptions($request, $runtime);
    }

    /**
     * You can call the DescribePolicyAdvancedConfig operation to query whether the strict mode is enabled for an access control policy.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribePolicyAdvancedConfigRequest $request DescribePolicyAdvancedConfigRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePolicyAdvancedConfigResponse DescribePolicyAdvancedConfigResponse
     */
    public function describePolicyAdvancedConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePolicyAdvancedConfig',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePolicyAdvancedConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DescribePolicyAdvancedConfig operation to query whether the strict mode is enabled for an access control policy.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribePolicyAdvancedConfigRequest $request DescribePolicyAdvancedConfigRequest
     *
     * @return DescribePolicyAdvancedConfigResponse DescribePolicyAdvancedConfigResponse
     */
    public function describePolicyAdvancedConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePolicyAdvancedConfigWithOptions($request, $runtime);
    }

    /**
     * You can call the DescribePolicyPriorUsed operation to query the priority range of the access control policies that match specific query conditions.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribePolicyPriorUsedRequest $request DescribePolicyPriorUsedRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePolicyPriorUsedResponse DescribePolicyPriorUsedResponse
     */
    public function describePolicyPriorUsedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePolicyPriorUsed',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePolicyPriorUsedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DescribePolicyPriorUsed operation to query the priority range of the access control policies that match specific query conditions.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribePolicyPriorUsedRequest $request DescribePolicyPriorUsedRequest
     *
     * @return DescribePolicyPriorUsedResponse DescribePolicyPriorUsedResponse
     */
    public function describePolicyPriorUsed($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePolicyPriorUsedWithOptions($request, $runtime);
    }

    /**
     * You can call the DescribeRiskEventGroup operation to query and download the details of intrusion events. We recommend that you query the details of 5 to 10 intrusion events at a time. If you do not need to query the geographical information about IP addresses, you can set the NoLocation parameter to true to prevent query timeout.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeRiskEventGroupRequest $request DescribeRiskEventGroupRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRiskEventGroupResponse DescribeRiskEventGroupResponse
     */
    public function describeRiskEventGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->attackApp)) {
            $query['AttackApp'] = $request->attackApp;
        }
        if (!Utils::isUnset($request->attackType)) {
            $query['AttackType'] = $request->attackType;
        }
        if (!Utils::isUnset($request->buyVersion)) {
            $query['BuyVersion'] = $request->buyVersion;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dataType)) {
            $query['DataType'] = $request->dataType;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->dstIP)) {
            $query['DstIP'] = $request->dstIP;
        }
        if (!Utils::isUnset($request->dstNetworkInstanceId)) {
            $query['DstNetworkInstanceId'] = $request->dstNetworkInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventName)) {
            $query['EventName'] = $request->eventName;
        }
        if (!Utils::isUnset($request->firewallType)) {
            $query['FirewallType'] = $request->firewallType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->noLocation)) {
            $query['NoLocation'] = $request->noLocation;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->ruleResult)) {
            $query['RuleResult'] = $request->ruleResult;
        }
        if (!Utils::isUnset($request->ruleSource)) {
            $query['RuleSource'] = $request->ruleSource;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->srcIP)) {
            $query['SrcIP'] = $request->srcIP;
        }
        if (!Utils::isUnset($request->srcNetworkInstanceId)) {
            $query['SrcNetworkInstanceId'] = $request->srcNetworkInstanceId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->vulLevel)) {
            $query['VulLevel'] = $request->vulLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRiskEventGroup',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRiskEventGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DescribeRiskEventGroup operation to query and download the details of intrusion events. We recommend that you query the details of 5 to 10 intrusion events at a time. If you do not need to query the geographical information about IP addresses, you can set the NoLocation parameter to true to prevent query timeout.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeRiskEventGroupRequest $request DescribeRiskEventGroupRequest
     *
     * @return DescribeRiskEventGroupResponse DescribeRiskEventGroupResponse
     */
    public function describeRiskEventGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskEventGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRiskEventPayloadRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRiskEventPayloadResponse
     */
    public function describeRiskEventPayloadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dstIP)) {
            $query['DstIP'] = $request->dstIP;
        }
        if (!Utils::isUnset($request->dstVpcId)) {
            $query['DstVpcId'] = $request->dstVpcId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->firewallType)) {
            $query['FirewallType'] = $request->firewallType;
        }
        if (!Utils::isUnset($request->publicIP)) {
            $query['PublicIP'] = $request->publicIP;
        }
        if (!Utils::isUnset($request->srcIP)) {
            $query['SrcIP'] = $request->srcIP;
        }
        if (!Utils::isUnset($request->srcVpcId)) {
            $query['SrcVpcId'] = $request->srcVpcId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->UUID)) {
            $query['UUID'] = $request->UUID;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRiskEventPayload',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRiskEventPayloadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRiskEventPayloadRequest $request
     *
     * @return DescribeRiskEventPayloadResponse
     */
    public function describeRiskEventPayload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskEventPayloadWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTrFirewallPolicyBackUpAssociationListRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return DescribeTrFirewallPolicyBackUpAssociationListResponse
     */
    public function describeTrFirewallPolicyBackUpAssociationListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->firewallId)) {
            $query['FirewallId'] = $request->firewallId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->trFirewallRoutePolicyId)) {
            $query['TrFirewallRoutePolicyId'] = $request->trFirewallRoutePolicyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTrFirewallPolicyBackUpAssociationList',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTrFirewallPolicyBackUpAssociationListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTrFirewallPolicyBackUpAssociationListRequest $request
     *
     * @return DescribeTrFirewallPolicyBackUpAssociationListResponse
     */
    public function describeTrFirewallPolicyBackUpAssociationList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrFirewallPolicyBackUpAssociationListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTrFirewallV2RoutePolicyListRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeTrFirewallV2RoutePolicyListResponse
     */
    public function describeTrFirewallV2RoutePolicyListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->firewallId)) {
            $query['FirewallId'] = $request->firewallId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTrFirewallV2RoutePolicyList',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTrFirewallV2RoutePolicyListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTrFirewallV2RoutePolicyListRequest $request
     *
     * @return DescribeTrFirewallV2RoutePolicyListResponse
     */
    public function describeTrFirewallV2RoutePolicyList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrFirewallV2RoutePolicyListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTrFirewallsV2DetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeTrFirewallsV2DetailResponse
     */
    public function describeTrFirewallsV2DetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->firewallId)) {
            $query['FirewallId'] = $request->firewallId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTrFirewallsV2Detail',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTrFirewallsV2DetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTrFirewallsV2DetailRequest $request
     *
     * @return DescribeTrFirewallsV2DetailResponse
     */
    public function describeTrFirewallsV2Detail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrFirewallsV2DetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTrFirewallsV2ListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeTrFirewallsV2ListResponse
     */
    public function describeTrFirewallsV2ListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->firewallId)) {
            $query['FirewallId'] = $request->firewallId;
        }
        if (!Utils::isUnset($request->firewallName)) {
            $query['FirewallName'] = $request->firewallName;
        }
        if (!Utils::isUnset($request->firewallSwitchStatus)) {
            $query['FirewallSwitchStatus'] = $request->firewallSwitchStatus;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->routeMode)) {
            $query['RouteMode'] = $request->routeMode;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTrFirewallsV2List',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTrFirewallsV2ListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTrFirewallsV2ListRequest $request
     *
     * @return DescribeTrFirewallsV2ListResponse
     */
    public function describeTrFirewallsV2List($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrFirewallsV2ListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTrFirewallsV2RouteListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeTrFirewallsV2RouteListResponse
     */
    public function describeTrFirewallsV2RouteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->firewallId)) {
            $query['FirewallId'] = $request->firewallId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->trFirewallRoutePolicyId)) {
            $query['TrFirewallRoutePolicyId'] = $request->trFirewallRoutePolicyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTrFirewallsV2RouteList',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTrFirewallsV2RouteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTrFirewallsV2RouteListRequest $request
     *
     * @return DescribeTrFirewallsV2RouteListResponse
     */
    public function describeTrFirewallsV2RouteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrFirewallsV2RouteListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserAssetIPTrafficInfoRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeUserAssetIPTrafficInfoResponse
     */
    public function describeUserAssetIPTrafficInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserAssetIPTrafficInfo',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserAssetIPTrafficInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserAssetIPTrafficInfoRequest $request
     *
     * @return DescribeUserAssetIPTrafficInfoResponse
     */
    public function describeUserAssetIPTrafficInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserAssetIPTrafficInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserIPSWhitelistRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeUserIPSWhitelistResponse
     */
    public function describeUserIPSWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserIPSWhitelist',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserIPSWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserIPSWhitelistRequest $request
     *
     * @return DescribeUserIPSWhitelistResponse
     */
    public function describeUserIPSWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserIPSWhitelistWithOptions($request, $runtime);
    }

    /**
     * You can call the DescribeVpcFirewallAclGroupList operation to query the information about all policy groups of access control policies that are created for VPC firewalls.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeVpcFirewallAclGroupListRequest $request DescribeVpcFirewallAclGroupListRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVpcFirewallAclGroupListResponse DescribeVpcFirewallAclGroupListResponse
     */
    public function describeVpcFirewallAclGroupListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->firewallConfigureStatus)) {
            $query['FirewallConfigureStatus'] = $request->firewallConfigureStatus;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcFirewallAclGroupList',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcFirewallAclGroupListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DescribeVpcFirewallAclGroupList operation to query the information about all policy groups of access control policies that are created for VPC firewalls.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeVpcFirewallAclGroupListRequest $request DescribeVpcFirewallAclGroupListRequest
     *
     * @return DescribeVpcFirewallAclGroupListResponse DescribeVpcFirewallAclGroupListResponse
     */
    public function describeVpcFirewallAclGroupList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcFirewallAclGroupListWithOptions($request, $runtime);
    }

    /**
     * You can call the DescribeVpcFirewallCenDetail operation to query the details about a VPC firewall. The VPC firewall protects access traffic between a specified VPC and a network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeVpcFirewallCenDetailRequest $request DescribeVpcFirewallCenDetailRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVpcFirewallCenDetailResponse DescribeVpcFirewallCenDetailResponse
     */
    public function describeVpcFirewallCenDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->networkInstanceId)) {
            $query['NetworkInstanceId'] = $request->networkInstanceId;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcFirewallCenDetail',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcFirewallCenDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DescribeVpcFirewallCenDetail operation to query the details about a VPC firewall. The VPC firewall protects access traffic between a specified VPC and a network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeVpcFirewallCenDetailRequest $request DescribeVpcFirewallCenDetailRequest
     *
     * @return DescribeVpcFirewallCenDetailResponse DescribeVpcFirewallCenDetailResponse
     */
    public function describeVpcFirewallCenDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcFirewallCenDetailWithOptions($request, $runtime);
    }

    /**
     * You can call the DescribeVpcFirewallCenList operation to query VPC firewalls. A VPC firewall protects mutual access traffic between a specified VPC and a network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeVpcFirewallCenListRequest $request DescribeVpcFirewallCenListRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVpcFirewallCenListResponse DescribeVpcFirewallCenListResponse
     */
    public function describeVpcFirewallCenListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->firewallSwitchStatus)) {
            $query['FirewallSwitchStatus'] = $request->firewallSwitchStatus;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->networkInstanceId)) {
            $query['NetworkInstanceId'] = $request->networkInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->routeMode)) {
            $query['RouteMode'] = $request->routeMode;
        }
        if (!Utils::isUnset($request->transitRouterType)) {
            $query['TransitRouterType'] = $request->transitRouterType;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        if (!Utils::isUnset($request->vpcFirewallName)) {
            $query['VpcFirewallName'] = $request->vpcFirewallName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcFirewallCenList',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcFirewallCenListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DescribeVpcFirewallCenList operation to query VPC firewalls. A VPC firewall protects mutual access traffic between a specified VPC and a network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeVpcFirewallCenListRequest $request DescribeVpcFirewallCenListRequest
     *
     * @return DescribeVpcFirewallCenListResponse DescribeVpcFirewallCenListResponse
     */
    public function describeVpcFirewallCenList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcFirewallCenListWithOptions($request, $runtime);
    }

    /**
     * You can call the DescribeVpcFirewallControlPolicy operation to query the information about all access control policies that are created for a specified VPC firewall. Different access control policies are used when a VPC firewall is used to protect traffic between two VPCs that are connected by using a Cloud Enterprise Network (CEN) instance or an Express Connect circuit.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeVpcFirewallControlPolicyRequest $request DescribeVpcFirewallControlPolicyRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVpcFirewallControlPolicyResponse DescribeVpcFirewallControlPolicyResponse
     */
    public function describeVpcFirewallControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclAction)) {
            $query['AclAction'] = $request->aclAction;
        }
        if (!Utils::isUnset($request->aclUuid)) {
            $query['AclUuid'] = $request->aclUuid;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->proto)) {
            $query['Proto'] = $request->proto;
        }
        if (!Utils::isUnset($request->release)) {
            $query['Release'] = $request->release;
        }
        if (!Utils::isUnset($request->repeatType)) {
            $query['RepeatType'] = $request->repeatType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcFirewallControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DescribeVpcFirewallControlPolicy operation to query the information about all access control policies that are created for a specified VPC firewall. Different access control policies are used when a VPC firewall is used to protect traffic between two VPCs that are connected by using a Cloud Enterprise Network (CEN) instance or an Express Connect circuit.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeVpcFirewallControlPolicyRequest $request DescribeVpcFirewallControlPolicyRequest
     *
     * @return DescribeVpcFirewallControlPolicyResponse DescribeVpcFirewallControlPolicyResponse
     */
    public function describeVpcFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * You can call the DescribeVpcFirewallDefaultIPSConfig operation to query the intrusion prevention configurations of a VPC firewall.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeVpcFirewallDefaultIPSConfigRequest $request DescribeVpcFirewallDefaultIPSConfigRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVpcFirewallDefaultIPSConfigResponse DescribeVpcFirewallDefaultIPSConfigResponse
     */
    public function describeVpcFirewallDefaultIPSConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcFirewallDefaultIPSConfig',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcFirewallDefaultIPSConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DescribeVpcFirewallDefaultIPSConfig operation to query the intrusion prevention configurations of a VPC firewall.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeVpcFirewallDefaultIPSConfigRequest $request DescribeVpcFirewallDefaultIPSConfigRequest
     *
     * @return DescribeVpcFirewallDefaultIPSConfigResponse DescribeVpcFirewallDefaultIPSConfigResponse
     */
    public function describeVpcFirewallDefaultIPSConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcFirewallDefaultIPSConfigWithOptions($request, $runtime);
    }

    /**
     * You can call the DescribeVpcFirewallDetail operation to query the details about a VPC firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit.
     *   * Before you call the operation, make sure that you created a VPC firewall by calling the [CreateVpcFirewallConfigure](https://www.alibabacloud.com/help/en/cloud-firewall/latest/createvpcfirewallconfigure) operation.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeVpcFirewallDetailRequest $request DescribeVpcFirewallDetailRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVpcFirewallDetailResponse DescribeVpcFirewallDetailResponse
     */
    public function describeVpcFirewallDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->localVpcId)) {
            $query['LocalVpcId'] = $request->localVpcId;
        }
        if (!Utils::isUnset($request->peerVpcId)) {
            $query['PeerVpcId'] = $request->peerVpcId;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcFirewallDetail',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcFirewallDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DescribeVpcFirewallDetail operation to query the details about a VPC firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit.
     *   * Before you call the operation, make sure that you created a VPC firewall by calling the [CreateVpcFirewallConfigure](https://www.alibabacloud.com/help/en/cloud-firewall/latest/createvpcfirewallconfigure) operation.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeVpcFirewallDetailRequest $request DescribeVpcFirewallDetailRequest
     *
     * @return DescribeVpcFirewallDetailResponse DescribeVpcFirewallDetailResponse
     */
    public function describeVpcFirewallDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcFirewallDetailWithOptions($request, $runtime);
    }

    /**
     * You can call the DescribeVpcFirewallList operation to query the details about VPC firewalls by page. Each VPC firewall protects traffic between two VPCs that are connected by using an Express Connect circuit.
     *   * ### Limits
     *   * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeVpcFirewallListRequest $request DescribeVpcFirewallListRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVpcFirewallListResponse DescribeVpcFirewallListResponse
     */
    public function describeVpcFirewallListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectSubType)) {
            $query['ConnectSubType'] = $request->connectSubType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->firewallSwitchStatus)) {
            $query['FirewallSwitchStatus'] = $request->firewallSwitchStatus;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->peerUid)) {
            $query['PeerUid'] = $request->peerUid;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        if (!Utils::isUnset($request->vpcFirewallName)) {
            $query['VpcFirewallName'] = $request->vpcFirewallName;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcFirewallList',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcFirewallListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DescribeVpcFirewallList operation to query the details about VPC firewalls by page. Each VPC firewall protects traffic between two VPCs that are connected by using an Express Connect circuit.
     *   * ### Limits
     *   * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeVpcFirewallListRequest $request DescribeVpcFirewallListRequest
     *
     * @return DescribeVpcFirewallListResponse DescribeVpcFirewallListResponse
     */
    public function describeVpcFirewallList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcFirewallListWithOptions($request, $runtime);
    }

    /**
     * You can call the DescribeVpcFirewallPolicyPriorUsed operation to query the priority range of access control policies that are created for a VPC firewall in a specific policy group.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeVpcFirewallPolicyPriorUsedRequest $request DescribeVpcFirewallPolicyPriorUsedRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVpcFirewallPolicyPriorUsedResponse DescribeVpcFirewallPolicyPriorUsedResponse
     */
    public function describeVpcFirewallPolicyPriorUsedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcFirewallPolicyPriorUsed',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcFirewallPolicyPriorUsedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DescribeVpcFirewallPolicyPriorUsed operation to query the priority range of access control policies that are created for a VPC firewall in a specific policy group.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeVpcFirewallPolicyPriorUsedRequest $request DescribeVpcFirewallPolicyPriorUsedRequest
     *
     * @return DescribeVpcFirewallPolicyPriorUsedResponse DescribeVpcFirewallPolicyPriorUsedResponse
     */
    public function describeVpcFirewallPolicyPriorUsed($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcFirewallPolicyPriorUsedWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVulnerabilityProtectedListRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeVulnerabilityProtectedListResponse
     */
    public function describeVulnerabilityProtectedListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->attackType)) {
            $query['AttackType'] = $request->attackType;
        }
        if (!Utils::isUnset($request->buyVersion)) {
            $query['BuyVersion'] = $request->buyVersion;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortKey)) {
            $query['SortKey'] = $request->sortKey;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->userType)) {
            $query['UserType'] = $request->userType;
        }
        if (!Utils::isUnset($request->vulnCveName)) {
            $query['VulnCveName'] = $request->vulnCveName;
        }
        if (!Utils::isUnset($request->vulnLevel)) {
            $query['VulnLevel'] = $request->vulnLevel;
        }
        if (!Utils::isUnset($request->vulnResource)) {
            $query['VulnResource'] = $request->vulnResource;
        }
        if (!Utils::isUnset($request->vulnStatus)) {
            $query['VulnStatus'] = $request->vulnStatus;
        }
        if (!Utils::isUnset($request->vulnType)) {
            $query['VulnType'] = $request->vulnType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVulnerabilityProtectedList',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVulnerabilityProtectedListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVulnerabilityProtectedListRequest $request
     *
     * @return DescribeVulnerabilityProtectedListResponse
     */
    public function describeVulnerabilityProtectedList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVulnerabilityProtectedListWithOptions($request, $runtime);
    }

    /**
     * You can call the ModifyAddressBook operation to modify the address book that is configured for access control.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyAddressBookRequest $request ModifyAddressBookRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAddressBookResponse ModifyAddressBookResponse
     */
    public function modifyAddressBookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addressList)) {
            $query['AddressList'] = $request->addressList;
        }
        if (!Utils::isUnset($request->autoAddTagEcs)) {
            $query['AutoAddTagEcs'] = $request->autoAddTagEcs;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->groupUuid)) {
            $query['GroupUuid'] = $request->groupUuid;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->tagList)) {
            $query['TagList'] = $request->tagList;
        }
        if (!Utils::isUnset($request->tagRelation)) {
            $query['TagRelation'] = $request->tagRelation;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAddressBook',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAddressBookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the ModifyAddressBook operation to modify the address book that is configured for access control.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyAddressBookRequest $request ModifyAddressBookRequest
     *
     * @return ModifyAddressBookResponse ModifyAddressBookResponse
     */
    public function modifyAddressBook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAddressBookWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to modify the configurations of an access control policy. The policy allows Cloud Firewall to allow, deny, or monitor the traffic that passes through Cloud Firewall.
     *   * ## [](#qps)Limit
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyControlPolicyRequest $request ModifyControlPolicyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyControlPolicyResponse ModifyControlPolicyResponse
     */
    public function modifyControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclAction)) {
            $query['AclAction'] = $request->aclAction;
        }
        if (!Utils::isUnset($request->aclUuid)) {
            $query['AclUuid'] = $request->aclUuid;
        }
        if (!Utils::isUnset($request->applicationName)) {
            $query['ApplicationName'] = $request->applicationName;
        }
        if (!Utils::isUnset($request->applicationNameList)) {
            $query['ApplicationNameList'] = $request->applicationNameList;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destPort)) {
            $query['DestPort'] = $request->destPort;
        }
        if (!Utils::isUnset($request->destPortGroup)) {
            $query['DestPortGroup'] = $request->destPortGroup;
        }
        if (!Utils::isUnset($request->destPortType)) {
            $query['DestPortType'] = $request->destPortType;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->destinationType)) {
            $query['DestinationType'] = $request->destinationType;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->proto)) {
            $query['Proto'] = $request->proto;
        }
        if (!Utils::isUnset($request->release)) {
            $query['Release'] = $request->release;
        }
        if (!Utils::isUnset($request->repeatDays)) {
            $query['RepeatDays'] = $request->repeatDays;
        }
        if (!Utils::isUnset($request->repeatEndTime)) {
            $query['RepeatEndTime'] = $request->repeatEndTime;
        }
        if (!Utils::isUnset($request->repeatStartTime)) {
            $query['RepeatStartTime'] = $request->repeatStartTime;
        }
        if (!Utils::isUnset($request->repeatType)) {
            $query['RepeatType'] = $request->repeatType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to modify the configurations of an access control policy. The policy allows Cloud Firewall to allow, deny, or monitor the traffic that passes through Cloud Firewall.
     *   * ## [](#qps)Limit
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyControlPolicyRequest $request ModifyControlPolicyRequest
     *
     * @return ModifyControlPolicyResponse ModifyControlPolicyResponse
     */
    public function modifyControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyControlPolicyWithOptions($request, $runtime);
    }

    /**
     * You can call the ModifyControlPolicyPosition operation to modify the priority of an IPv4 access control policy for the Internet firewall. No API operations are provided for you to modify the priority of an IPv6 access control policy for the Internet firewall.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyControlPolicyPositionRequest $request ModifyControlPolicyPositionRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyControlPolicyPositionResponse ModifyControlPolicyPositionResponse
     */
    public function modifyControlPolicyPositionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->newOrder)) {
            $query['NewOrder'] = $request->newOrder;
        }
        if (!Utils::isUnset($request->oldOrder)) {
            $query['OldOrder'] = $request->oldOrder;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyControlPolicyPosition',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyControlPolicyPositionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the ModifyControlPolicyPosition operation to modify the priority of an IPv4 access control policy for the Internet firewall. No API operations are provided for you to modify the priority of an IPv6 access control policy for the Internet firewall.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyControlPolicyPositionRequest $request ModifyControlPolicyPositionRequest
     *
     * @return ModifyControlPolicyPositionResponse ModifyControlPolicyPositionResponse
     */
    public function modifyControlPolicyPosition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyControlPolicyPositionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDefaultIPSConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyDefaultIPSConfigResponse
     */
    public function modifyDefaultIPSConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aiRules)) {
            $query['AiRules'] = $request->aiRules;
        }
        if (!Utils::isUnset($request->basicRules)) {
            $query['BasicRules'] = $request->basicRules;
        }
        if (!Utils::isUnset($request->ctiRules)) {
            $query['CtiRules'] = $request->ctiRules;
        }
        if (!Utils::isUnset($request->enableAllPatch)) {
            $query['EnableAllPatch'] = $request->enableAllPatch;
        }
        if (!Utils::isUnset($request->enableDefault)) {
            $query['EnableDefault'] = $request->enableDefault;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->patchRules)) {
            $query['PatchRules'] = $request->patchRules;
        }
        if (!Utils::isUnset($request->ruleClass)) {
            $query['RuleClass'] = $request->ruleClass;
        }
        if (!Utils::isUnset($request->runMode)) {
            $query['RunMode'] = $request->runMode;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDefaultIPSConfig',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDefaultIPSConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDefaultIPSConfigRequest $request
     *
     * @return ModifyDefaultIPSConfigResponse
     */
    public function modifyDefaultIPSConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefaultIPSConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyFirewallV2RoutePolicySwitchRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifyFirewallV2RoutePolicySwitchResponse
     */
    public function modifyFirewallV2RoutePolicySwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->firewallId)) {
            $query['FirewallId'] = $request->firewallId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->shouldRecover)) {
            $query['ShouldRecover'] = $request->shouldRecover;
        }
        if (!Utils::isUnset($request->trFirewallRoutePolicyId)) {
            $query['TrFirewallRoutePolicyId'] = $request->trFirewallRoutePolicyId;
        }
        if (!Utils::isUnset($request->trFirewallRoutePolicySwitchStatus)) {
            $query['TrFirewallRoutePolicySwitchStatus'] = $request->trFirewallRoutePolicySwitchStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyFirewallV2RoutePolicySwitch',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyFirewallV2RoutePolicySwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyFirewallV2RoutePolicySwitchRequest $request
     *
     * @return ModifyFirewallV2RoutePolicySwitchResponse
     */
    public function modifyFirewallV2RoutePolicySwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFirewallV2RoutePolicySwitchWithOptions($request, $runtime);
    }

    /**
     * You can call the ModifyInstanceMemberAttributes operation to update the information about members in Cloud Firewall.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second for each account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyInstanceMemberAttributesRequest $request ModifyInstanceMemberAttributesRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceMemberAttributesResponse ModifyInstanceMemberAttributesResponse
     */
    public function modifyInstanceMemberAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->members)) {
            $query['Members'] = $request->members;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceMemberAttributes',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceMemberAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the ModifyInstanceMemberAttributes operation to update the information about members in Cloud Firewall.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second for each account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyInstanceMemberAttributesRequest $request ModifyInstanceMemberAttributesRequest
     *
     * @return ModifyInstanceMemberAttributesResponse ModifyInstanceMemberAttributesResponse
     */
    public function modifyInstanceMemberAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceMemberAttributesWithOptions($request, $runtime);
    }

    /**
     * You can use this operation to modify the configurations of an access control policy. The policy is used to allow, deny, or monitor traffic that reaches a NAT firewall.
     *   *
     * @param ModifyNatFirewallControlPolicyRequest $request ModifyNatFirewallControlPolicyRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyNatFirewallControlPolicyResponse ModifyNatFirewallControlPolicyResponse
     */
    public function modifyNatFirewallControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclAction)) {
            $query['AclAction'] = $request->aclAction;
        }
        if (!Utils::isUnset($request->aclUuid)) {
            $query['AclUuid'] = $request->aclUuid;
        }
        if (!Utils::isUnset($request->applicationNameList)) {
            $query['ApplicationNameList'] = $request->applicationNameList;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destPort)) {
            $query['DestPort'] = $request->destPort;
        }
        if (!Utils::isUnset($request->destPortGroup)) {
            $query['DestPortGroup'] = $request->destPortGroup;
        }
        if (!Utils::isUnset($request->destPortType)) {
            $query['DestPortType'] = $request->destPortType;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->destinationType)) {
            $query['DestinationType'] = $request->destinationType;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->domainResolveType)) {
            $query['DomainResolveType'] = $request->domainResolveType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        if (!Utils::isUnset($request->proto)) {
            $query['Proto'] = $request->proto;
        }
        if (!Utils::isUnset($request->release)) {
            $query['Release'] = $request->release;
        }
        if (!Utils::isUnset($request->repeatDays)) {
            $query['RepeatDays'] = $request->repeatDays;
        }
        if (!Utils::isUnset($request->repeatEndTime)) {
            $query['RepeatEndTime'] = $request->repeatEndTime;
        }
        if (!Utils::isUnset($request->repeatStartTime)) {
            $query['RepeatStartTime'] = $request->repeatStartTime;
        }
        if (!Utils::isUnset($request->repeatType)) {
            $query['RepeatType'] = $request->repeatType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyNatFirewallControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyNatFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can use this operation to modify the configurations of an access control policy. The policy is used to allow, deny, or monitor traffic that reaches a NAT firewall.
     *   *
     * @param ModifyNatFirewallControlPolicyRequest $request ModifyNatFirewallControlPolicyRequest
     *
     * @return ModifyNatFirewallControlPolicyResponse ModifyNatFirewallControlPolicyResponse
     */
    public function modifyNatFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNatFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyNatFirewallControlPolicyPositionRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ModifyNatFirewallControlPolicyPositionResponse
     */
    public function modifyNatFirewallControlPolicyPositionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclUuid)) {
            $query['AclUuid'] = $request->aclUuid;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        if (!Utils::isUnset($request->newOrder)) {
            $query['NewOrder'] = $request->newOrder;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyNatFirewallControlPolicyPosition',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyNatFirewallControlPolicyPositionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyNatFirewallControlPolicyPositionRequest $request
     *
     * @return ModifyNatFirewallControlPolicyPositionResponse
     */
    public function modifyNatFirewallControlPolicyPosition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNatFirewallControlPolicyPositionWithOptions($request, $runtime);
    }

    /**
     * You can call the ModifyPolicyAdvancedConfig operation to enable or disable the strict mode for an access control policy.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyPolicyAdvancedConfigRequest $request ModifyPolicyAdvancedConfigRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPolicyAdvancedConfigResponse ModifyPolicyAdvancedConfigResponse
     */
    public function modifyPolicyAdvancedConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->internetSwitch)) {
            $query['InternetSwitch'] = $request->internetSwitch;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyPolicyAdvancedConfig',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPolicyAdvancedConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the ModifyPolicyAdvancedConfig operation to enable or disable the strict mode for an access control policy.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyPolicyAdvancedConfigRequest $request ModifyPolicyAdvancedConfigRequest
     *
     * @return ModifyPolicyAdvancedConfigResponse ModifyPolicyAdvancedConfigResponse
     */
    public function modifyPolicyAdvancedConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPolicyAdvancedConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyTrFirewallV2ConfigurationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyTrFirewallV2ConfigurationResponse
     */
    public function modifyTrFirewallV2ConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->firewallId)) {
            $query['FirewallId'] = $request->firewallId;
        }
        if (!Utils::isUnset($request->firewallName)) {
            $query['FirewallName'] = $request->firewallName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyTrFirewallV2Configuration',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTrFirewallV2ConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyTrFirewallV2ConfigurationRequest $request
     *
     * @return ModifyTrFirewallV2ConfigurationResponse
     */
    public function modifyTrFirewallV2Configuration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTrFirewallV2ConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param ModifyTrFirewallV2RoutePolicyScopeRequest $tmpReq
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyTrFirewallV2RoutePolicyScopeResponse
     */
    public function modifyTrFirewallV2RoutePolicyScopeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyTrFirewallV2RoutePolicyScopeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->destCandidateList)) {
            $request->destCandidateListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->destCandidateList, 'DestCandidateList', 'json');
        }
        if (!Utils::isUnset($tmpReq->srcCandidateList)) {
            $request->srcCandidateListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->srcCandidateList, 'SrcCandidateList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->destCandidateListShrink)) {
            $query['DestCandidateList'] = $request->destCandidateListShrink;
        }
        if (!Utils::isUnset($request->firewallId)) {
            $query['FirewallId'] = $request->firewallId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->srcCandidateListShrink)) {
            $query['SrcCandidateList'] = $request->srcCandidateListShrink;
        }
        if (!Utils::isUnset($request->trFirewallRoutePolicyId)) {
            $query['TrFirewallRoutePolicyId'] = $request->trFirewallRoutePolicyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyTrFirewallV2RoutePolicyScope',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTrFirewallV2RoutePolicyScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyTrFirewallV2RoutePolicyScopeRequest $request
     *
     * @return ModifyTrFirewallV2RoutePolicyScopeResponse
     */
    public function modifyTrFirewallV2RoutePolicyScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTrFirewallV2RoutePolicyScopeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyUserIPSWhitelistRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyUserIPSWhitelistResponse
     */
    public function modifyUserIPSWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->listType)) {
            $query['ListType'] = $request->listType;
        }
        if (!Utils::isUnset($request->listValue)) {
            $query['ListValue'] = $request->listValue;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->whiteType)) {
            $query['WhiteType'] = $request->whiteType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyUserIPSWhitelist',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyUserIPSWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyUserIPSWhitelistRequest $request
     *
     * @return ModifyUserIPSWhitelistResponse
     */
    public function modifyUserIPSWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserIPSWhitelistWithOptions($request, $runtime);
    }

    /**
     * You can call the ModifyVpcFirewallCenConfigure operation to modify the configurations of a VPC firewall. The VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance. Before you call this operation, make sure that you have created a VPC firewall by calling the [CreateVpcFirewallCenConfigure](~~345772~~) operation.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyVpcFirewallCenConfigureRequest $request ModifyVpcFirewallCenConfigureRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyVpcFirewallCenConfigureResponse ModifyVpcFirewallCenConfigureResponse
     */
    public function modifyVpcFirewallCenConfigureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        if (!Utils::isUnset($request->vpcFirewallName)) {
            $query['VpcFirewallName'] = $request->vpcFirewallName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVpcFirewallCenConfigure',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVpcFirewallCenConfigureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the ModifyVpcFirewallCenConfigure operation to modify the configurations of a VPC firewall. The VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance. Before you call this operation, make sure that you have created a VPC firewall by calling the [CreateVpcFirewallCenConfigure](~~345772~~) operation.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyVpcFirewallCenConfigureRequest $request ModifyVpcFirewallCenConfigureRequest
     *
     * @return ModifyVpcFirewallCenConfigureResponse ModifyVpcFirewallCenConfigureResponse
     */
    public function modifyVpcFirewallCenConfigure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcFirewallCenConfigureWithOptions($request, $runtime);
    }

    /**
     * You can call the ModifyVpcFirewallCenSwitchStatus operation to enable or disable a VPC firewall. A VPC firewall protects mutual access traffic between a specified VPC and a network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance. After you enable the VPC firewall, the VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a CEN instance. After you disable the VPC firewall, the VPC firewall no longer protect mutual access traffic between a VPC and a specified network instance that is attached to a CEN instance.
     *   * Before you call this operation, make sure that you have created a VPC firewall by calling the [CreateVpcFirewallCenConfigure](~~345772~~) operation.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyVpcFirewallCenSwitchStatusRequest $request ModifyVpcFirewallCenSwitchStatusRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyVpcFirewallCenSwitchStatusResponse ModifyVpcFirewallCenSwitchStatusResponse
     */
    public function modifyVpcFirewallCenSwitchStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->firewallSwitch)) {
            $query['FirewallSwitch'] = $request->firewallSwitch;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVpcFirewallCenSwitchStatus',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVpcFirewallCenSwitchStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the ModifyVpcFirewallCenSwitchStatus operation to enable or disable a VPC firewall. A VPC firewall protects mutual access traffic between a specified VPC and a network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance. After you enable the VPC firewall, the VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a CEN instance. After you disable the VPC firewall, the VPC firewall no longer protect mutual access traffic between a VPC and a specified network instance that is attached to a CEN instance.
     *   * Before you call this operation, make sure that you have created a VPC firewall by calling the [CreateVpcFirewallCenConfigure](~~345772~~) operation.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyVpcFirewallCenSwitchStatusRequest $request ModifyVpcFirewallCenSwitchStatusRequest
     *
     * @return ModifyVpcFirewallCenSwitchStatusResponse ModifyVpcFirewallCenSwitchStatusResponse
     */
    public function modifyVpcFirewallCenSwitchStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcFirewallCenSwitchStatusWithOptions($request, $runtime);
    }

    /**
     * You can call the ModifyVpcFirewallCenConfigure operation to modify the configurations of a VPC firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit. Before you call the operation, make sure that you created a VPC firewall by calling the [CreateVpcFirewallConfigure](~~342893~~) operation.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyVpcFirewallConfigureRequest $request ModifyVpcFirewallConfigureRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyVpcFirewallConfigureResponse ModifyVpcFirewallConfigureResponse
     */
    public function modifyVpcFirewallConfigureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->localVpcCidrTableList)) {
            $query['LocalVpcCidrTableList'] = $request->localVpcCidrTableList;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->peerVpcCidrTableList)) {
            $query['PeerVpcCidrTableList'] = $request->peerVpcCidrTableList;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        if (!Utils::isUnset($request->vpcFirewallName)) {
            $query['VpcFirewallName'] = $request->vpcFirewallName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVpcFirewallConfigure',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVpcFirewallConfigureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the ModifyVpcFirewallCenConfigure operation to modify the configurations of a VPC firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit. Before you call the operation, make sure that you created a VPC firewall by calling the [CreateVpcFirewallConfigure](~~342893~~) operation.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyVpcFirewallConfigureRequest $request ModifyVpcFirewallConfigureRequest
     *
     * @return ModifyVpcFirewallConfigureResponse ModifyVpcFirewallConfigureResponse
     */
    public function modifyVpcFirewallConfigure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcFirewallConfigureWithOptions($request, $runtime);
    }

    /**
     * You can call the ModifyVpcFirewallControlPolicy operation to modify the configurations of an access control policy that is created for a VPC firewall in a specified policy group. Different access control policies are used for the VPC firewalls that are used to protect each Cloud Enterprise Network (CEN) instance and the VPC firewalls that are used to protect each Express Connect circuit.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyVpcFirewallControlPolicyRequest $request ModifyVpcFirewallControlPolicyRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyVpcFirewallControlPolicyResponse ModifyVpcFirewallControlPolicyResponse
     */
    public function modifyVpcFirewallControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclAction)) {
            $query['AclAction'] = $request->aclAction;
        }
        if (!Utils::isUnset($request->aclUuid)) {
            $query['AclUuid'] = $request->aclUuid;
        }
        if (!Utils::isUnset($request->applicationName)) {
            $query['ApplicationName'] = $request->applicationName;
        }
        if (!Utils::isUnset($request->applicationNameList)) {
            $query['ApplicationNameList'] = $request->applicationNameList;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destPort)) {
            $query['DestPort'] = $request->destPort;
        }
        if (!Utils::isUnset($request->destPortGroup)) {
            $query['DestPortGroup'] = $request->destPortGroup;
        }
        if (!Utils::isUnset($request->destPortType)) {
            $query['DestPortType'] = $request->destPortType;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->destinationType)) {
            $query['DestinationType'] = $request->destinationType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->proto)) {
            $query['Proto'] = $request->proto;
        }
        if (!Utils::isUnset($request->release)) {
            $query['Release'] = $request->release;
        }
        if (!Utils::isUnset($request->repeatDays)) {
            $query['RepeatDays'] = $request->repeatDays;
        }
        if (!Utils::isUnset($request->repeatEndTime)) {
            $query['RepeatEndTime'] = $request->repeatEndTime;
        }
        if (!Utils::isUnset($request->repeatStartTime)) {
            $query['RepeatStartTime'] = $request->repeatStartTime;
        }
        if (!Utils::isUnset($request->repeatType)) {
            $query['RepeatType'] = $request->repeatType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVpcFirewallControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVpcFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the ModifyVpcFirewallControlPolicy operation to modify the configurations of an access control policy that is created for a VPC firewall in a specified policy group. Different access control policies are used for the VPC firewalls that are used to protect each Cloud Enterprise Network (CEN) instance and the VPC firewalls that are used to protect each Express Connect circuit.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyVpcFirewallControlPolicyRequest $request ModifyVpcFirewallControlPolicyRequest
     *
     * @return ModifyVpcFirewallControlPolicyResponse ModifyVpcFirewallControlPolicyResponse
     */
    public function modifyVpcFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * You can use this operation to modify the priority of an access control policy that is created for a VPC firewall in a specific policy group.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyVpcFirewallControlPolicyPositionRequest $request ModifyVpcFirewallControlPolicyPositionRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyVpcFirewallControlPolicyPositionResponse ModifyVpcFirewallControlPolicyPositionResponse
     */
    public function modifyVpcFirewallControlPolicyPositionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclUuid)) {
            $query['AclUuid'] = $request->aclUuid;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->newOrder)) {
            $query['NewOrder'] = $request->newOrder;
        }
        if (!Utils::isUnset($request->oldOrder)) {
            $query['OldOrder'] = $request->oldOrder;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVpcFirewallControlPolicyPosition',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVpcFirewallControlPolicyPositionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can use this operation to modify the priority of an access control policy that is created for a VPC firewall in a specific policy group.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyVpcFirewallControlPolicyPositionRequest $request ModifyVpcFirewallControlPolicyPositionRequest
     *
     * @return ModifyVpcFirewallControlPolicyPositionResponse ModifyVpcFirewallControlPolicyPositionResponse
     */
    public function modifyVpcFirewallControlPolicyPosition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcFirewallControlPolicyPositionWithOptions($request, $runtime);
    }

    /**
     * You can call the ModifyVpcFirewallDefaultIPSConfig operation to modify the intrusion prevention configurations of a VPC firewall.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyVpcFirewallDefaultIPSConfigRequest $request ModifyVpcFirewallDefaultIPSConfigRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyVpcFirewallDefaultIPSConfigResponse ModifyVpcFirewallDefaultIPSConfigResponse
     */
    public function modifyVpcFirewallDefaultIPSConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->basicRules)) {
            $query['BasicRules'] = $request->basicRules;
        }
        if (!Utils::isUnset($request->enableAllPatch)) {
            $query['EnableAllPatch'] = $request->enableAllPatch;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->runMode)) {
            $query['RunMode'] = $request->runMode;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVpcFirewallDefaultIPSConfig',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVpcFirewallDefaultIPSConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the ModifyVpcFirewallDefaultIPSConfig operation to modify the intrusion prevention configurations of a VPC firewall.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyVpcFirewallDefaultIPSConfigRequest $request ModifyVpcFirewallDefaultIPSConfigRequest
     *
     * @return ModifyVpcFirewallDefaultIPSConfigResponse ModifyVpcFirewallDefaultIPSConfigResponse
     */
    public function modifyVpcFirewallDefaultIPSConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcFirewallDefaultIPSConfigWithOptions($request, $runtime);
    }

    /**
     * You can call the ModifyVpcFirewallSwitchStatus operation to enable or disable a VPC firewall. The VPC firewall protects traffic between two VPCs that are connected by using an Express Connect circuit. After you enable the VPC firewall, the VPC firewall protects access traffic between two VPCs that are connected by using an Express Connect circuit. After you disable the VPC firewall, the VPC firewall no longer protects access traffic between two VPCs that are connected by using an Express Connect circuit.
     *   * Before you call the operation, make sure that you created a VPC firewall by calling the [CreateVpcFirewallConfigure](~~342893~~) operation.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyVpcFirewallSwitchStatusRequest $request ModifyVpcFirewallSwitchStatusRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyVpcFirewallSwitchStatusResponse ModifyVpcFirewallSwitchStatusResponse
     */
    public function modifyVpcFirewallSwitchStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->firewallSwitch)) {
            $query['FirewallSwitch'] = $request->firewallSwitch;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVpcFirewallSwitchStatus',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVpcFirewallSwitchStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the ModifyVpcFirewallSwitchStatus operation to enable or disable a VPC firewall. The VPC firewall protects traffic between two VPCs that are connected by using an Express Connect circuit. After you enable the VPC firewall, the VPC firewall protects access traffic between two VPCs that are connected by using an Express Connect circuit. After you disable the VPC firewall, the VPC firewall no longer protects access traffic between two VPCs that are connected by using an Express Connect circuit.
     *   * Before you call the operation, make sure that you created a VPC firewall by calling the [CreateVpcFirewallConfigure](~~342893~~) operation.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyVpcFirewallSwitchStatusRequest $request ModifyVpcFirewallSwitchStatusRequest
     *
     * @return ModifyVpcFirewallSwitchStatusResponse ModifyVpcFirewallSwitchStatusResponse
     */
    public function modifyVpcFirewallSwitchStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcFirewallSwitchStatusWithOptions($request, $runtime);
    }

    /**
     * You can call the PutDisableAllFwSwitch operation to turn off all firewall switches.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param PutDisableAllFwSwitchRequest $request PutDisableAllFwSwitchRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return PutDisableAllFwSwitchResponse PutDisableAllFwSwitchResponse
     */
    public function putDisableAllFwSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutDisableAllFwSwitch',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutDisableAllFwSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the PutDisableAllFwSwitch operation to turn off all firewall switches.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param PutDisableAllFwSwitchRequest $request PutDisableAllFwSwitchRequest
     *
     * @return PutDisableAllFwSwitchResponse PutDisableAllFwSwitchResponse
     */
    public function putDisableAllFwSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putDisableAllFwSwitchWithOptions($request, $runtime);
    }

    /**
     * You can call the PutDisableFwSwitch operation to disable a firewall for specific assets. After you disable the firewall, traffic does not pass through Cloud Firewall.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param PutDisableFwSwitchRequest $request PutDisableFwSwitchRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return PutDisableFwSwitchResponse PutDisableFwSwitchResponse
     */
    public function putDisableFwSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipaddrList)) {
            $query['IpaddrList'] = $request->ipaddrList;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regionList)) {
            $query['RegionList'] = $request->regionList;
        }
        if (!Utils::isUnset($request->resourceTypeList)) {
            $query['ResourceTypeList'] = $request->resourceTypeList;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutDisableFwSwitch',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutDisableFwSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the PutDisableFwSwitch operation to disable a firewall for specific assets. After you disable the firewall, traffic does not pass through Cloud Firewall.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param PutDisableFwSwitchRequest $request PutDisableFwSwitchRequest
     *
     * @return PutDisableFwSwitchResponse PutDisableFwSwitchResponse
     */
    public function putDisableFwSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putDisableFwSwitchWithOptions($request, $runtime);
    }

    /**
     * You can call the PutEnableAllFwSwitch operation to enable a firewall for all public IP addresses within your Alibaba Cloud account.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param PutEnableAllFwSwitchRequest $request PutEnableAllFwSwitchRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return PutEnableAllFwSwitchResponse PutEnableAllFwSwitchResponse
     */
    public function putEnableAllFwSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutEnableAllFwSwitch',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutEnableAllFwSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the PutEnableAllFwSwitch operation to enable a firewall for all public IP addresses within your Alibaba Cloud account.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param PutEnableAllFwSwitchRequest $request PutEnableAllFwSwitchRequest
     *
     * @return PutEnableAllFwSwitchResponse PutEnableAllFwSwitchResponse
     */
    public function putEnableAllFwSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putEnableAllFwSwitchWithOptions($request, $runtime);
    }

    /**
     * You can call the PutEnableFwSwitch operation to enable a firewall. After you enable a firewall, traffic passes through Cloud Firewall.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds a limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limits when you call this operation.
     *   *
     * @param PutEnableFwSwitchRequest $request PutEnableFwSwitchRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return PutEnableFwSwitchResponse PutEnableFwSwitchResponse
     */
    public function putEnableFwSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipaddrList)) {
            $query['IpaddrList'] = $request->ipaddrList;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regionList)) {
            $query['RegionList'] = $request->regionList;
        }
        if (!Utils::isUnset($request->resourceTypeList)) {
            $query['ResourceTypeList'] = $request->resourceTypeList;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutEnableFwSwitch',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutEnableFwSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the PutEnableFwSwitch operation to enable a firewall. After you enable a firewall, traffic passes through Cloud Firewall.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds a limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limits when you call this operation.
     *   *
     * @param PutEnableFwSwitchRequest $request PutEnableFwSwitchRequest
     *
     * @return PutEnableFwSwitchResponse PutEnableFwSwitchResponse
     */
    public function putEnableFwSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putEnableFwSwitchWithOptions($request, $runtime);
    }

    /**
     * @param ReleasePostInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ReleasePostInstanceResponse
     */
    public function releasePostInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleasePostInstance',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleasePostInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleasePostInstanceRequest $request
     *
     * @return ReleasePostInstanceResponse
     */
    public function releasePostInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releasePostInstanceWithOptions($request, $runtime);
    }

    /**
     * You can call the ResetVpcFirewallRuleHitCount operation to clear the count on hits of an access control policy that is created for a VPC firewall in a specific policy group.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ResetVpcFirewallRuleHitCountRequest $request ResetVpcFirewallRuleHitCountRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetVpcFirewallRuleHitCountResponse ResetVpcFirewallRuleHitCountResponse
     */
    public function resetVpcFirewallRuleHitCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclUuid)) {
            $query['AclUuid'] = $request->aclUuid;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetVpcFirewallRuleHitCount',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetVpcFirewallRuleHitCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the ResetVpcFirewallRuleHitCount operation to clear the count on hits of an access control policy that is created for a VPC firewall in a specific policy group.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ResetVpcFirewallRuleHitCountRequest $request ResetVpcFirewallRuleHitCountRequest
     *
     * @return ResetVpcFirewallRuleHitCountResponse ResetVpcFirewallRuleHitCountResponse
     */
    public function resetVpcFirewallRuleHitCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetVpcFirewallRuleHitCountWithOptions($request, $runtime);
    }
}
