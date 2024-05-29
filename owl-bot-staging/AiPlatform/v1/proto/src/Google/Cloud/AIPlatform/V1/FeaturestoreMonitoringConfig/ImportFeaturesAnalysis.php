<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_monitoring.proto

namespace Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration of the Featurestore's ImportFeature Analysis Based
 * Monitoring. This type of analysis generates statistics for values of each
 * Feature imported by every
 * [ImportFeatureValues][google.cloud.aiplatform.v1.FeaturestoreService.ImportFeatureValues]
 * operation.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.ImportFeaturesAnalysis</code>
 */
class ImportFeaturesAnalysis extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether to enable / disable / inherite default hebavior for import
     * features analysis.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.ImportFeaturesAnalysis.State state = 1;</code>
     */
    protected $state = 0;
    /**
     * The baseline used to do anomaly detection for the statistics generated by
     * import features analysis.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.ImportFeaturesAnalysis.Baseline anomaly_detection_baseline = 2;</code>
     */
    protected $anomaly_detection_baseline = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     *           Whether to enable / disable / inherite default hebavior for import
     *           features analysis.
     *     @type int $anomaly_detection_baseline
     *           The baseline used to do anomaly detection for the statistics generated by
     *           import features analysis.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreMonitoring::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether to enable / disable / inherite default hebavior for import
     * features analysis.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.ImportFeaturesAnalysis.State state = 1;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Whether to enable / disable / inherite default hebavior for import
     * features analysis.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.ImportFeaturesAnalysis.State state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig\ImportFeaturesAnalysis\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * The baseline used to do anomaly detection for the statistics generated by
     * import features analysis.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.ImportFeaturesAnalysis.Baseline anomaly_detection_baseline = 2;</code>
     * @return int
     */
    public function getAnomalyDetectionBaseline()
    {
        return $this->anomaly_detection_baseline;
    }

    /**
     * The baseline used to do anomaly detection for the statistics generated by
     * import features analysis.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.ImportFeaturesAnalysis.Baseline anomaly_detection_baseline = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAnomalyDetectionBaseline($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig\ImportFeaturesAnalysis\Baseline::class);
        $this->anomaly_detection_baseline = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ImportFeaturesAnalysis::class, \Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig_ImportFeaturesAnalysis::class);

