<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/explanation_metadata.proto

namespace Google\Cloud\AIPlatform\V1\ExplanationMetadata\InputMetadata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Visualization configurations for image explanation.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Visualization</code>
 */
class Visualization extends \Google\Protobuf\Internal\Message
{
    /**
     * Type of the image visualization. Only applicable to
     * [Integrated Gradients
     * attribution][google.cloud.aiplatform.v1.ExplanationParameters.integrated_gradients_attribution].
     * OUTLINES shows regions of attribution, while PIXELS shows per-pixel
     * attribution. Defaults to OUTLINES.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Visualization.Type type = 1;</code>
     */
    protected $type = 0;
    /**
     * Whether to only highlight pixels with positive contributions, negative
     * or both. Defaults to POSITIVE.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Visualization.Polarity polarity = 2;</code>
     */
    protected $polarity = 0;
    /**
     * The color scheme used for the highlighted areas.
     * Defaults to PINK_GREEN for
     * [Integrated Gradients
     * attribution][google.cloud.aiplatform.v1.ExplanationParameters.integrated_gradients_attribution],
     * which shows positive attributions in green and negative in pink.
     * Defaults to VIRIDIS for
     * [XRAI
     * attribution][google.cloud.aiplatform.v1.ExplanationParameters.xrai_attribution],
     * which highlights the most influential regions in yellow and the least
     * influential in blue.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Visualization.ColorMap color_map = 3;</code>
     */
    protected $color_map = 0;
    /**
     * Excludes attributions above the specified percentile from the
     * highlighted areas. Using the clip_percent_upperbound and
     * clip_percent_lowerbound together can be useful for filtering out noise
     * and making it easier to see areas of strong attribution. Defaults to
     * 99.9.
     *
     * Generated from protobuf field <code>float clip_percent_upperbound = 4;</code>
     */
    protected $clip_percent_upperbound = 0.0;
    /**
     * Excludes attributions below the specified percentile, from the
     * highlighted areas. Defaults to 62.
     *
     * Generated from protobuf field <code>float clip_percent_lowerbound = 5;</code>
     */
    protected $clip_percent_lowerbound = 0.0;
    /**
     * How the original image is displayed in the visualization.
     * Adjusting the overlay can help increase visual clarity if the original
     * image makes it difficult to view the visualization. Defaults to NONE.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Visualization.OverlayType overlay_type = 6;</code>
     */
    protected $overlay_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Type of the image visualization. Only applicable to
     *           [Integrated Gradients
     *           attribution][google.cloud.aiplatform.v1.ExplanationParameters.integrated_gradients_attribution].
     *           OUTLINES shows regions of attribution, while PIXELS shows per-pixel
     *           attribution. Defaults to OUTLINES.
     *     @type int $polarity
     *           Whether to only highlight pixels with positive contributions, negative
     *           or both. Defaults to POSITIVE.
     *     @type int $color_map
     *           The color scheme used for the highlighted areas.
     *           Defaults to PINK_GREEN for
     *           [Integrated Gradients
     *           attribution][google.cloud.aiplatform.v1.ExplanationParameters.integrated_gradients_attribution],
     *           which shows positive attributions in green and negative in pink.
     *           Defaults to VIRIDIS for
     *           [XRAI
     *           attribution][google.cloud.aiplatform.v1.ExplanationParameters.xrai_attribution],
     *           which highlights the most influential regions in yellow and the least
     *           influential in blue.
     *     @type float $clip_percent_upperbound
     *           Excludes attributions above the specified percentile from the
     *           highlighted areas. Using the clip_percent_upperbound and
     *           clip_percent_lowerbound together can be useful for filtering out noise
     *           and making it easier to see areas of strong attribution. Defaults to
     *           99.9.
     *     @type float $clip_percent_lowerbound
     *           Excludes attributions below the specified percentile, from the
     *           highlighted areas. Defaults to 62.
     *     @type int $overlay_type
     *           How the original image is displayed in the visualization.
     *           Adjusting the overlay can help increase visual clarity if the original
     *           image makes it difficult to view the visualization. Defaults to NONE.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ExplanationMetadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Type of the image visualization. Only applicable to
     * [Integrated Gradients
     * attribution][google.cloud.aiplatform.v1.ExplanationParameters.integrated_gradients_attribution].
     * OUTLINES shows regions of attribution, while PIXELS shows per-pixel
     * attribution. Defaults to OUTLINES.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Visualization.Type type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of the image visualization. Only applicable to
     * [Integrated Gradients
     * attribution][google.cloud.aiplatform.v1.ExplanationParameters.integrated_gradients_attribution].
     * OUTLINES shows regions of attribution, while PIXELS shows per-pixel
     * attribution. Defaults to OUTLINES.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Visualization.Type type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\ExplanationMetadata\InputMetadata\Visualization\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Whether to only highlight pixels with positive contributions, negative
     * or both. Defaults to POSITIVE.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Visualization.Polarity polarity = 2;</code>
     * @return int
     */
    public function getPolarity()
    {
        return $this->polarity;
    }

    /**
     * Whether to only highlight pixels with positive contributions, negative
     * or both. Defaults to POSITIVE.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Visualization.Polarity polarity = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPolarity($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\ExplanationMetadata\InputMetadata\Visualization\Polarity::class);
        $this->polarity = $var;

        return $this;
    }

    /**
     * The color scheme used for the highlighted areas.
     * Defaults to PINK_GREEN for
     * [Integrated Gradients
     * attribution][google.cloud.aiplatform.v1.ExplanationParameters.integrated_gradients_attribution],
     * which shows positive attributions in green and negative in pink.
     * Defaults to VIRIDIS for
     * [XRAI
     * attribution][google.cloud.aiplatform.v1.ExplanationParameters.xrai_attribution],
     * which highlights the most influential regions in yellow and the least
     * influential in blue.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Visualization.ColorMap color_map = 3;</code>
     * @return int
     */
    public function getColorMap()
    {
        return $this->color_map;
    }

    /**
     * The color scheme used for the highlighted areas.
     * Defaults to PINK_GREEN for
     * [Integrated Gradients
     * attribution][google.cloud.aiplatform.v1.ExplanationParameters.integrated_gradients_attribution],
     * which shows positive attributions in green and negative in pink.
     * Defaults to VIRIDIS for
     * [XRAI
     * attribution][google.cloud.aiplatform.v1.ExplanationParameters.xrai_attribution],
     * which highlights the most influential regions in yellow and the least
     * influential in blue.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Visualization.ColorMap color_map = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setColorMap($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\ExplanationMetadata\InputMetadata\Visualization\ColorMap::class);
        $this->color_map = $var;

        return $this;
    }

    /**
     * Excludes attributions above the specified percentile from the
     * highlighted areas. Using the clip_percent_upperbound and
     * clip_percent_lowerbound together can be useful for filtering out noise
     * and making it easier to see areas of strong attribution. Defaults to
     * 99.9.
     *
     * Generated from protobuf field <code>float clip_percent_upperbound = 4;</code>
     * @return float
     */
    public function getClipPercentUpperbound()
    {
        return $this->clip_percent_upperbound;
    }

    /**
     * Excludes attributions above the specified percentile from the
     * highlighted areas. Using the clip_percent_upperbound and
     * clip_percent_lowerbound together can be useful for filtering out noise
     * and making it easier to see areas of strong attribution. Defaults to
     * 99.9.
     *
     * Generated from protobuf field <code>float clip_percent_upperbound = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setClipPercentUpperbound($var)
    {
        GPBUtil::checkFloat($var);
        $this->clip_percent_upperbound = $var;

        return $this;
    }

    /**
     * Excludes attributions below the specified percentile, from the
     * highlighted areas. Defaults to 62.
     *
     * Generated from protobuf field <code>float clip_percent_lowerbound = 5;</code>
     * @return float
     */
    public function getClipPercentLowerbound()
    {
        return $this->clip_percent_lowerbound;
    }

    /**
     * Excludes attributions below the specified percentile, from the
     * highlighted areas. Defaults to 62.
     *
     * Generated from protobuf field <code>float clip_percent_lowerbound = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setClipPercentLowerbound($var)
    {
        GPBUtil::checkFloat($var);
        $this->clip_percent_lowerbound = $var;

        return $this;
    }

    /**
     * How the original image is displayed in the visualization.
     * Adjusting the overlay can help increase visual clarity if the original
     * image makes it difficult to view the visualization. Defaults to NONE.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Visualization.OverlayType overlay_type = 6;</code>
     * @return int
     */
    public function getOverlayType()
    {
        return $this->overlay_type;
    }

    /**
     * How the original image is displayed in the visualization.
     * Adjusting the overlay can help increase visual clarity if the original
     * image makes it difficult to view the visualization. Defaults to NONE.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Visualization.OverlayType overlay_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setOverlayType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\ExplanationMetadata\InputMetadata\Visualization\OverlayType::class);
        $this->overlay_type = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Visualization::class, \Google\Cloud\AIPlatform\V1\ExplanationMetadata_InputMetadata_Visualization::class);

