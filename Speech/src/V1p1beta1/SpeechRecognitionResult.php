<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1p1beta1/cloud_speech.proto

namespace Google\Cloud\Speech\V1p1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A speech recognition result corresponding to a portion of the audio.
 *
 * Generated from protobuf message <code>google.cloud.speech.v1p1beta1.SpeechRecognitionResult</code>
 */
final class SpeechRecognitionResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. May contain one or more recognition hypotheses (up to the
     * maximum specified in `max_alternatives`).
     * These alternatives are ordered in terms of accuracy, with the top (first)
     * alternative being the most probable, as ranked by the recognizer.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1p1beta1.SpeechRecognitionAlternative alternatives = 1;</code>
     */
    private $alternatives;
    /**
     * For multi-channel audio, this is the channel number corresponding to the
     * recognized result for the audio from that channel.
     * For audio_channel_count = N, its output values can range from '1' to 'N'.
     *
     * Generated from protobuf field <code>int32 channel_tag = 2;</code>
     */
    private $channel_tag = 0;
    /**
     * Output only. The
     * [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag of the
     * language in this result. This language code was detected to have the most
     * likelihood of being spoken in the audio.
     *
     * Generated from protobuf field <code>string language_code = 5;</code>
     */
    private $language_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Speech\V1p1beta1\SpeechRecognitionAlternative[]|\Google\Protobuf\Internal\RepeatedField $alternatives
     *           Output only. May contain one or more recognition hypotheses (up to the
     *           maximum specified in `max_alternatives`).
     *           These alternatives are ordered in terms of accuracy, with the top (first)
     *           alternative being the most probable, as ranked by the recognizer.
     *     @type int $channel_tag
     *           For multi-channel audio, this is the channel number corresponding to the
     *           recognized result for the audio from that channel.
     *           For audio_channel_count = N, its output values can range from '1' to 'N'.
     *     @type string $language_code
     *           Output only. The
     *           [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag of the
     *           language in this result. This language code was detected to have the most
     *           likelihood of being spoken in the audio.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V1P1Beta1\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. May contain one or more recognition hypotheses (up to the
     * maximum specified in `max_alternatives`).
     * These alternatives are ordered in terms of accuracy, with the top (first)
     * alternative being the most probable, as ranked by the recognizer.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1p1beta1.SpeechRecognitionAlternative alternatives = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAlternatives()
    {
        return $this->alternatives;
    }

    /**
     * Output only. May contain one or more recognition hypotheses (up to the
     * maximum specified in `max_alternatives`).
     * These alternatives are ordered in terms of accuracy, with the top (first)
     * alternative being the most probable, as ranked by the recognizer.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1p1beta1.SpeechRecognitionAlternative alternatives = 1;</code>
     * @param \Google\Cloud\Speech\V1p1beta1\SpeechRecognitionAlternative[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAlternatives($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Speech\V1p1beta1\SpeechRecognitionAlternative::class);
        $this->alternatives = $arr;

        return $this;
    }

    /**
     * For multi-channel audio, this is the channel number corresponding to the
     * recognized result for the audio from that channel.
     * For audio_channel_count = N, its output values can range from '1' to 'N'.
     *
     * Generated from protobuf field <code>int32 channel_tag = 2;</code>
     * @return int
     */
    public function getChannelTag()
    {
        return $this->channel_tag;
    }

    /**
     * For multi-channel audio, this is the channel number corresponding to the
     * recognized result for the audio from that channel.
     * For audio_channel_count = N, its output values can range from '1' to 'N'.
     *
     * Generated from protobuf field <code>int32 channel_tag = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setChannelTag($var)
    {
        GPBUtil::checkInt32($var);
        $this->channel_tag = $var;

        return $this;
    }

    /**
     * Output only. The
     * [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag of the
     * language in this result. This language code was detected to have the most
     * likelihood of being spoken in the audio.
     *
     * Generated from protobuf field <code>string language_code = 5;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Output only. The
     * [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag of the
     * language in this result. This language code was detected to have the most
     * likelihood of being spoken in the audio.
     *
     * Generated from protobuf field <code>string language_code = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

}

