<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Custom information type provided by the user. Used to find domain-specific
 * sensitive information configurable to the data in question.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.CustomInfoType</code>
 */
class CustomInfoType extends \Google\Protobuf\Internal\Message
{
    /**
     * Info type configuration. All custom info types must have configurations
     * that do not conflict with built-in info types or other custom info types.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InfoType info_type = 1;</code>
     */
    private $info_type = null;
    /**
     * Likelihood to return for this custom info type. This base value can be
     * altered by a detection rule if the finding meets the criteria specified by
     * the rule. Defaults to `VERY_LIKELY` if not specified.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Likelihood likelihood = 6;</code>
     */
    private $likelihood = 0;
    /**
     * Set of detection rules to apply to all findings of this custom info type.
     * Rules are applied in order that they are specified. Not supported for the
     * `surrogate_type` custom info type.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.CustomInfoType.DetectionRule detection_rules = 7;</code>
     */
    private $detection_rules;
    protected $type;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2\Storage::initOnce();
        parent::__construct();
    }

    /**
     * Info type configuration. All custom info types must have configurations
     * that do not conflict with built-in info types or other custom info types.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InfoType info_type = 1;</code>
     * @return \Google\Cloud\Dlp\V2\InfoType
     */
    public function getInfoType()
    {
        return $this->info_type;
    }

    /**
     * Info type configuration. All custom info types must have configurations
     * that do not conflict with built-in info types or other custom info types.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InfoType info_type = 1;</code>
     * @param \Google\Cloud\Dlp\V2\InfoType $var
     * @return $this
     */
    public function setInfoType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\InfoType::class);
        $this->info_type = $var;

        return $this;
    }

    /**
     * Likelihood to return for this custom info type. This base value can be
     * altered by a detection rule if the finding meets the criteria specified by
     * the rule. Defaults to `VERY_LIKELY` if not specified.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Likelihood likelihood = 6;</code>
     * @return int
     */
    public function getLikelihood()
    {
        return $this->likelihood;
    }

    /**
     * Likelihood to return for this custom info type. This base value can be
     * altered by a detection rule if the finding meets the criteria specified by
     * the rule. Defaults to `VERY_LIKELY` if not specified.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Likelihood likelihood = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setLikelihood($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\Likelihood::class);
        $this->likelihood = $var;

        return $this;
    }

    /**
     * Dictionary-based custom info type.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.Dictionary dictionary = 2;</code>
     * @return \Google\Cloud\Dlp\V2\CustomInfoType_Dictionary
     */
    public function getDictionary()
    {
        return $this->readOneof(2);
    }

    /**
     * Dictionary-based custom info type.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.Dictionary dictionary = 2;</code>
     * @param \Google\Cloud\Dlp\V2\CustomInfoType_Dictionary $var
     * @return $this
     */
    public function setDictionary($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\CustomInfoType_Dictionary::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Regex-based custom info type.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.Regex regex = 3;</code>
     * @return \Google\Cloud\Dlp\V2\CustomInfoType_Regex
     */
    public function getRegex()
    {
        return $this->readOneof(3);
    }

    /**
     * Regex-based custom info type.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.Regex regex = 3;</code>
     * @param \Google\Cloud\Dlp\V2\CustomInfoType_Regex $var
     * @return $this
     */
    public function setRegex($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\CustomInfoType_Regex::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Surrogate info type.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.SurrogateType surrogate_type = 4;</code>
     * @return \Google\Cloud\Dlp\V2\CustomInfoType_SurrogateType
     */
    public function getSurrogateType()
    {
        return $this->readOneof(4);
    }

    /**
     * Surrogate info type.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.SurrogateType surrogate_type = 4;</code>
     * @param \Google\Cloud\Dlp\V2\CustomInfoType_SurrogateType $var
     * @return $this
     */
    public function setSurrogateType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\CustomInfoType_SurrogateType::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Set of detection rules to apply to all findings of this custom info type.
     * Rules are applied in order that they are specified. Not supported for the
     * `surrogate_type` custom info type.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.CustomInfoType.DetectionRule detection_rules = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDetectionRules()
    {
        return $this->detection_rules;
    }

    /**
     * Set of detection rules to apply to all findings of this custom info type.
     * Rules are applied in order that they are specified. Not supported for the
     * `surrogate_type` custom info type.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.CustomInfoType.DetectionRule detection_rules = 7;</code>
     * @param \Google\Cloud\Dlp\V2\CustomInfoType_DetectionRule[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDetectionRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\CustomInfoType_DetectionRule::class);
        $this->detection_rules = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->whichOneof("type");
    }

}
