<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/nas_job.proto

namespace Google\Cloud\AIPlatform\V1\NasJobOutput;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The output of a multi-trial Neural Architecture Search (NAS) jobs.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.NasJobOutput.MultiTrialJobOutput</code>
 */
class MultiTrialJobOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. List of NasTrials that were started as part of search stage.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.NasTrial search_trials = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $search_trials;
    /**
     * Output only. List of NasTrials that were started as part of train stage.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.NasTrial train_trials = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $train_trials;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AIPlatform\V1\NasTrial>|\Google\Protobuf\Internal\RepeatedField $search_trials
     *           Output only. List of NasTrials that were started as part of search stage.
     *     @type array<\Google\Cloud\AIPlatform\V1\NasTrial>|\Google\Protobuf\Internal\RepeatedField $train_trials
     *           Output only. List of NasTrials that were started as part of train stage.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\NasJob::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. List of NasTrials that were started as part of search stage.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.NasTrial search_trials = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSearchTrials()
    {
        return $this->search_trials;
    }

    /**
     * Output only. List of NasTrials that were started as part of search stage.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.NasTrial search_trials = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\NasTrial>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSearchTrials($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\NasTrial::class);
        $this->search_trials = $arr;

        return $this;
    }

    /**
     * Output only. List of NasTrials that were started as part of train stage.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.NasTrial train_trials = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTrainTrials()
    {
        return $this->train_trials;
    }

    /**
     * Output only. List of NasTrials that were started as part of train stage.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.NasTrial train_trials = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\NasTrial>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTrainTrials($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\NasTrial::class);
        $this->train_trials = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MultiTrialJobOutput::class, \Google\Cloud\AIPlatform\V1\NasJobOutput_MultiTrialJobOutput::class);

