<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/v1/header.proto

namespace Google\Maps\FleetEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A RequestHeader contains fields common to all Fleet Engine RPC requests.
 *
 * Generated from protobuf message <code>maps.fleetengine.v1.RequestHeader</code>
 */
class RequestHeader extends \Google\Protobuf\Internal\Message
{
    /**
     * The BCP-47 language code, such as en-US or sr-Latn. For more information,
     * see http://www.unicode.org/reports/tr35/#Unicode_locale_identifier. If none
     * is specified, the response may be in any language, with a preference for
     * English if such a name exists. Field value example: `en-US`.
     *
     * Generated from protobuf field <code>string language_code = 1;</code>
     */
    protected $language_code = '';
    /**
     * Required. CLDR region code of the region where the request originates.
     * Field value example: `US`.
     *
     * Generated from protobuf field <code>string region_code = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $region_code = '';
    /**
     * Version of the calling SDK, if applicable.
     * The version format is "major.minor.patch", example: `1.1.2`.
     *
     * Generated from protobuf field <code>string sdk_version = 3;</code>
     */
    protected $sdk_version = '';
    /**
     * Version of the operating system on which the calling SDK is running.
     * Field value examples: `4.4.1`, `12.1`.
     *
     * Generated from protobuf field <code>string os_version = 4;</code>
     */
    protected $os_version = '';
    /**
     * Model of the device on which the calling SDK is running.
     * Field value examples: `iPhone12,1`, `SM-G920F`.
     *
     * Generated from protobuf field <code>string device_model = 5;</code>
     */
    protected $device_model = '';
    /**
     * The type of SDK sending the request.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.RequestHeader.SdkType sdk_type = 6;</code>
     */
    protected $sdk_type = 0;
    /**
     * Version of the MapSDK which the calling SDK depends on, if applicable.
     * The version format is "major.minor.patch", example: `5.2.1`.
     *
     * Generated from protobuf field <code>string maps_sdk_version = 7;</code>
     */
    protected $maps_sdk_version = '';
    /**
     * Version of the NavSDK which the calling SDK depends on, if applicable.
     * The version format is "major.minor.patch", example: `2.1.0`.
     *
     * Generated from protobuf field <code>string nav_sdk_version = 8;</code>
     */
    protected $nav_sdk_version = '';
    /**
     * Platform of the calling SDK.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.RequestHeader.Platform platform = 9;</code>
     */
    protected $platform = 0;
    /**
     * Manufacturer of the Android device from the calling SDK, only applicable
     * for the Android SDKs.
     * Field value example: `Samsung`.
     *
     * Generated from protobuf field <code>string manufacturer = 10;</code>
     */
    protected $manufacturer = '';
    /**
     * Android API level of the calling SDK, only applicable for the Android SDKs.
     * Field value example: `23`.
     *
     * Generated from protobuf field <code>int32 android_api_level = 11;</code>
     */
    protected $android_api_level = 0;
    /**
     * Optional ID that can be provided for logging purposes in order to identify
     * the request.
     *
     * Generated from protobuf field <code>string trace_id = 12;</code>
     */
    protected $trace_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $language_code
     *           The BCP-47 language code, such as en-US or sr-Latn. For more information,
     *           see http://www.unicode.org/reports/tr35/#Unicode_locale_identifier. If none
     *           is specified, the response may be in any language, with a preference for
     *           English if such a name exists. Field value example: `en-US`.
     *     @type string $region_code
     *           Required. CLDR region code of the region where the request originates.
     *           Field value example: `US`.
     *     @type string $sdk_version
     *           Version of the calling SDK, if applicable.
     *           The version format is "major.minor.patch", example: `1.1.2`.
     *     @type string $os_version
     *           Version of the operating system on which the calling SDK is running.
     *           Field value examples: `4.4.1`, `12.1`.
     *     @type string $device_model
     *           Model of the device on which the calling SDK is running.
     *           Field value examples: `iPhone12,1`, `SM-G920F`.
     *     @type int $sdk_type
     *           The type of SDK sending the request.
     *     @type string $maps_sdk_version
     *           Version of the MapSDK which the calling SDK depends on, if applicable.
     *           The version format is "major.minor.patch", example: `5.2.1`.
     *     @type string $nav_sdk_version
     *           Version of the NavSDK which the calling SDK depends on, if applicable.
     *           The version format is "major.minor.patch", example: `2.1.0`.
     *     @type int $platform
     *           Platform of the calling SDK.
     *     @type string $manufacturer
     *           Manufacturer of the Android device from the calling SDK, only applicable
     *           for the Android SDKs.
     *           Field value example: `Samsung`.
     *     @type int $android_api_level
     *           Android API level of the calling SDK, only applicable for the Android SDKs.
     *           Field value example: `23`.
     *     @type string $trace_id
     *           Optional ID that can be provided for logging purposes in order to identify
     *           the request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Maps\Fleetengine\V1\Header::initOnce();
        parent::__construct($data);
    }

    /**
     * The BCP-47 language code, such as en-US or sr-Latn. For more information,
     * see http://www.unicode.org/reports/tr35/#Unicode_locale_identifier. If none
     * is specified, the response may be in any language, with a preference for
     * English if such a name exists. Field value example: `en-US`.
     *
     * Generated from protobuf field <code>string language_code = 1;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * The BCP-47 language code, such as en-US or sr-Latn. For more information,
     * see http://www.unicode.org/reports/tr35/#Unicode_locale_identifier. If none
     * is specified, the response may be in any language, with a preference for
     * English if such a name exists. Field value example: `en-US`.
     *
     * Generated from protobuf field <code>string language_code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Required. CLDR region code of the region where the request originates.
     * Field value example: `US`.
     *
     * Generated from protobuf field <code>string region_code = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRegionCode()
    {
        return $this->region_code;
    }

    /**
     * Required. CLDR region code of the region where the request originates.
     * Field value example: `US`.
     *
     * Generated from protobuf field <code>string region_code = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRegionCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->region_code = $var;

        return $this;
    }

    /**
     * Version of the calling SDK, if applicable.
     * The version format is "major.minor.patch", example: `1.1.2`.
     *
     * Generated from protobuf field <code>string sdk_version = 3;</code>
     * @return string
     */
    public function getSdkVersion()
    {
        return $this->sdk_version;
    }

    /**
     * Version of the calling SDK, if applicable.
     * The version format is "major.minor.patch", example: `1.1.2`.
     *
     * Generated from protobuf field <code>string sdk_version = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSdkVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->sdk_version = $var;

        return $this;
    }

    /**
     * Version of the operating system on which the calling SDK is running.
     * Field value examples: `4.4.1`, `12.1`.
     *
     * Generated from protobuf field <code>string os_version = 4;</code>
     * @return string
     */
    public function getOsVersion()
    {
        return $this->os_version;
    }

    /**
     * Version of the operating system on which the calling SDK is running.
     * Field value examples: `4.4.1`, `12.1`.
     *
     * Generated from protobuf field <code>string os_version = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOsVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->os_version = $var;

        return $this;
    }

    /**
     * Model of the device on which the calling SDK is running.
     * Field value examples: `iPhone12,1`, `SM-G920F`.
     *
     * Generated from protobuf field <code>string device_model = 5;</code>
     * @return string
     */
    public function getDeviceModel()
    {
        return $this->device_model;
    }

    /**
     * Model of the device on which the calling SDK is running.
     * Field value examples: `iPhone12,1`, `SM-G920F`.
     *
     * Generated from protobuf field <code>string device_model = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_model = $var;

        return $this;
    }

    /**
     * The type of SDK sending the request.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.RequestHeader.SdkType sdk_type = 6;</code>
     * @return int
     */
    public function getSdkType()
    {
        return $this->sdk_type;
    }

    /**
     * The type of SDK sending the request.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.RequestHeader.SdkType sdk_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setSdkType($var)
    {
        GPBUtil::checkEnum($var, \Google\Maps\FleetEngine\V1\RequestHeader\SdkType::class);
        $this->sdk_type = $var;

        return $this;
    }

    /**
     * Version of the MapSDK which the calling SDK depends on, if applicable.
     * The version format is "major.minor.patch", example: `5.2.1`.
     *
     * Generated from protobuf field <code>string maps_sdk_version = 7;</code>
     * @return string
     */
    public function getMapsSdkVersion()
    {
        return $this->maps_sdk_version;
    }

    /**
     * Version of the MapSDK which the calling SDK depends on, if applicable.
     * The version format is "major.minor.patch", example: `5.2.1`.
     *
     * Generated from protobuf field <code>string maps_sdk_version = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setMapsSdkVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->maps_sdk_version = $var;

        return $this;
    }

    /**
     * Version of the NavSDK which the calling SDK depends on, if applicable.
     * The version format is "major.minor.patch", example: `2.1.0`.
     *
     * Generated from protobuf field <code>string nav_sdk_version = 8;</code>
     * @return string
     */
    public function getNavSdkVersion()
    {
        return $this->nav_sdk_version;
    }

    /**
     * Version of the NavSDK which the calling SDK depends on, if applicable.
     * The version format is "major.minor.patch", example: `2.1.0`.
     *
     * Generated from protobuf field <code>string nav_sdk_version = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setNavSdkVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->nav_sdk_version = $var;

        return $this;
    }

    /**
     * Platform of the calling SDK.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.RequestHeader.Platform platform = 9;</code>
     * @return int
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Platform of the calling SDK.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.RequestHeader.Platform platform = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setPlatform($var)
    {
        GPBUtil::checkEnum($var, \Google\Maps\FleetEngine\V1\RequestHeader\Platform::class);
        $this->platform = $var;

        return $this;
    }

    /**
     * Manufacturer of the Android device from the calling SDK, only applicable
     * for the Android SDKs.
     * Field value example: `Samsung`.
     *
     * Generated from protobuf field <code>string manufacturer = 10;</code>
     * @return string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Manufacturer of the Android device from the calling SDK, only applicable
     * for the Android SDKs.
     * Field value example: `Samsung`.
     *
     * Generated from protobuf field <code>string manufacturer = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setManufacturer($var)
    {
        GPBUtil::checkString($var, True);
        $this->manufacturer = $var;

        return $this;
    }

    /**
     * Android API level of the calling SDK, only applicable for the Android SDKs.
     * Field value example: `23`.
     *
     * Generated from protobuf field <code>int32 android_api_level = 11;</code>
     * @return int
     */
    public function getAndroidApiLevel()
    {
        return $this->android_api_level;
    }

    /**
     * Android API level of the calling SDK, only applicable for the Android SDKs.
     * Field value example: `23`.
     *
     * Generated from protobuf field <code>int32 android_api_level = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setAndroidApiLevel($var)
    {
        GPBUtil::checkInt32($var);
        $this->android_api_level = $var;

        return $this;
    }

    /**
     * Optional ID that can be provided for logging purposes in order to identify
     * the request.
     *
     * Generated from protobuf field <code>string trace_id = 12;</code>
     * @return string
     */
    public function getTraceId()
    {
        return $this->trace_id;
    }

    /**
     * Optional ID that can be provided for logging purposes in order to identify
     * the request.
     *
     * Generated from protobuf field <code>string trace_id = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setTraceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->trace_id = $var;

        return $this;
    }

}

