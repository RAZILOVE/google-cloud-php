<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/site_search_engine.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A target site for the SiteSearchEngine.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.TargetSite</code>
 */
class TargetSite extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The fully qualified resource name of the target site.
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/siteSearchEngine/targetSites/{target_site}`
     * The `target_site_id` is system-generated.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Required. Input only. The user provided URI pattern from which the
     * `generated_uri_pattern` is generated.
     *
     * Generated from protobuf field <code>string provided_uri_pattern = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    protected $provided_uri_pattern = '';
    /**
     * The type of the target site, e.g., whether the site is to be included or
     * excluded.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.TargetSite.Type type = 3;</code>
     */
    protected $type = 0;
    /**
     * Input only. If set to false, a uri_pattern is generated to include all
     * pages whose address contains the provided_uri_pattern. If set to true, an
     * uri_pattern is generated to try to be an exact match of the
     * provided_uri_pattern or just the specific page if the provided_uri_pattern
     * is a specific one. provided_uri_pattern is always normalized to
     * generate the URI pattern to be used by the search engine.
     *
     * Generated from protobuf field <code>bool exact_match = 6 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    protected $exact_match = false;
    /**
     * Output only. This is system-generated based on the provided_uri_pattern.
     *
     * Generated from protobuf field <code>string generated_uri_pattern = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $generated_uri_pattern = '';
    /**
     * Output only. Root domain of the provided_uri_pattern.
     *
     * Generated from protobuf field <code>string root_domain_uri = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $root_domain_uri = '';
    /**
     * Output only. Site ownership and validity verification status.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SiteVerificationInfo site_verification_info = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $site_verification_info = null;
    /**
     * Output only. Indexing status.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.TargetSite.IndexingStatus indexing_status = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $indexing_status = 0;
    /**
     * Output only. The target site's last updated time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Output only. Failure reason.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.TargetSite.FailureReason failure_reason = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $failure_reason = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The fully qualified resource name of the target site.
     *           `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/siteSearchEngine/targetSites/{target_site}`
     *           The `target_site_id` is system-generated.
     *     @type string $provided_uri_pattern
     *           Required. Input only. The user provided URI pattern from which the
     *           `generated_uri_pattern` is generated.
     *     @type int $type
     *           The type of the target site, e.g., whether the site is to be included or
     *           excluded.
     *     @type bool $exact_match
     *           Input only. If set to false, a uri_pattern is generated to include all
     *           pages whose address contains the provided_uri_pattern. If set to true, an
     *           uri_pattern is generated to try to be an exact match of the
     *           provided_uri_pattern or just the specific page if the provided_uri_pattern
     *           is a specific one. provided_uri_pattern is always normalized to
     *           generate the URI pattern to be used by the search engine.
     *     @type string $generated_uri_pattern
     *           Output only. This is system-generated based on the provided_uri_pattern.
     *     @type string $root_domain_uri
     *           Output only. Root domain of the provided_uri_pattern.
     *     @type \Google\Cloud\DiscoveryEngine\V1\SiteVerificationInfo $site_verification_info
     *           Output only. Site ownership and validity verification status.
     *     @type int $indexing_status
     *           Output only. Indexing status.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The target site's last updated time.
     *     @type \Google\Cloud\DiscoveryEngine\V1\TargetSite\FailureReason $failure_reason
     *           Output only. Failure reason.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\SiteSearchEngine::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The fully qualified resource name of the target site.
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/siteSearchEngine/targetSites/{target_site}`
     * The `target_site_id` is system-generated.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The fully qualified resource name of the target site.
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/siteSearchEngine/targetSites/{target_site}`
     * The `target_site_id` is system-generated.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. Input only. The user provided URI pattern from which the
     * `generated_uri_pattern` is generated.
     *
     * Generated from protobuf field <code>string provided_uri_pattern = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return string
     */
    public function getProvidedUriPattern()
    {
        return $this->provided_uri_pattern;
    }

    /**
     * Required. Input only. The user provided URI pattern from which the
     * `generated_uri_pattern` is generated.
     *
     * Generated from protobuf field <code>string provided_uri_pattern = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setProvidedUriPattern($var)
    {
        GPBUtil::checkString($var, True);
        $this->provided_uri_pattern = $var;

        return $this;
    }

    /**
     * The type of the target site, e.g., whether the site is to be included or
     * excluded.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.TargetSite.Type type = 3;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the target site, e.g., whether the site is to be included or
     * excluded.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.TargetSite.Type type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DiscoveryEngine\V1\TargetSite\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Input only. If set to false, a uri_pattern is generated to include all
     * pages whose address contains the provided_uri_pattern. If set to true, an
     * uri_pattern is generated to try to be an exact match of the
     * provided_uri_pattern or just the specific page if the provided_uri_pattern
     * is a specific one. provided_uri_pattern is always normalized to
     * generate the URI pattern to be used by the search engine.
     *
     * Generated from protobuf field <code>bool exact_match = 6 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return bool
     */
    public function getExactMatch()
    {
        return $this->exact_match;
    }

    /**
     * Input only. If set to false, a uri_pattern is generated to include all
     * pages whose address contains the provided_uri_pattern. If set to true, an
     * uri_pattern is generated to try to be an exact match of the
     * provided_uri_pattern or just the specific page if the provided_uri_pattern
     * is a specific one. provided_uri_pattern is always normalized to
     * generate the URI pattern to be used by the search engine.
     *
     * Generated from protobuf field <code>bool exact_match = 6 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setExactMatch($var)
    {
        GPBUtil::checkBool($var);
        $this->exact_match = $var;

        return $this;
    }

    /**
     * Output only. This is system-generated based on the provided_uri_pattern.
     *
     * Generated from protobuf field <code>string generated_uri_pattern = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getGeneratedUriPattern()
    {
        return $this->generated_uri_pattern;
    }

    /**
     * Output only. This is system-generated based on the provided_uri_pattern.
     *
     * Generated from protobuf field <code>string generated_uri_pattern = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setGeneratedUriPattern($var)
    {
        GPBUtil::checkString($var, True);
        $this->generated_uri_pattern = $var;

        return $this;
    }

    /**
     * Output only. Root domain of the provided_uri_pattern.
     *
     * Generated from protobuf field <code>string root_domain_uri = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getRootDomainUri()
    {
        return $this->root_domain_uri;
    }

    /**
     * Output only. Root domain of the provided_uri_pattern.
     *
     * Generated from protobuf field <code>string root_domain_uri = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setRootDomainUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->root_domain_uri = $var;

        return $this;
    }

    /**
     * Output only. Site ownership and validity verification status.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SiteVerificationInfo site_verification_info = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\SiteVerificationInfo|null
     */
    public function getSiteVerificationInfo()
    {
        return $this->site_verification_info;
    }

    public function hasSiteVerificationInfo()
    {
        return isset($this->site_verification_info);
    }

    public function clearSiteVerificationInfo()
    {
        unset($this->site_verification_info);
    }

    /**
     * Output only. Site ownership and validity verification status.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SiteVerificationInfo site_verification_info = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\SiteVerificationInfo $var
     * @return $this
     */
    public function setSiteVerificationInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\SiteVerificationInfo::class);
        $this->site_verification_info = $var;

        return $this;
    }

    /**
     * Output only. Indexing status.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.TargetSite.IndexingStatus indexing_status = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getIndexingStatus()
    {
        return $this->indexing_status;
    }

    /**
     * Output only. Indexing status.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.TargetSite.IndexingStatus indexing_status = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setIndexingStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DiscoveryEngine\V1\TargetSite\IndexingStatus::class);
        $this->indexing_status = $var;

        return $this;
    }

    /**
     * Output only. The target site's last updated time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The target site's last updated time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. Failure reason.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.TargetSite.FailureReason failure_reason = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\TargetSite\FailureReason|null
     */
    public function getFailureReason()
    {
        return $this->failure_reason;
    }

    public function hasFailureReason()
    {
        return isset($this->failure_reason);
    }

    public function clearFailureReason()
    {
        unset($this->failure_reason);
    }

    /**
     * Output only. Failure reason.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.TargetSite.FailureReason failure_reason = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\TargetSite\FailureReason $var
     * @return $this
     */
    public function setFailureReason($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\TargetSite\FailureReason::class);
        $this->failure_reason = $var;

        return $this;
    }

}

