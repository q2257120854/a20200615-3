<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plugin/duckchat_session_profile.proto

namespace Zaly\Proto\Plugin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * action: duckchat.session.profile
 *
 * Generated from protobuf message <code>plugin.DuckChatSessionProfileRequest</code>
 */
class DuckChatSessionProfileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *加密过的sessionId，小程序直接从cookie中获取
     *
     * Generated from protobuf field <code>string encryptedSessionId = 1;</code>
     */
    private $encryptedSessionId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $encryptedSessionId
     *          加密过的sessionId，小程序直接从cookie中获取
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Plugin\DuckchatSessionProfile::initOnce();
        parent::__construct($data);
    }

    /**
     *加密过的sessionId，小程序直接从cookie中获取
     *
     * Generated from protobuf field <code>string encryptedSessionId = 1;</code>
     * @return string
     */
    public function getEncryptedSessionId()
    {
        return $this->encryptedSessionId;
    }

    /**
     *加密过的sessionId，小程序直接从cookie中获取
     *
     * Generated from protobuf field <code>string encryptedSessionId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEncryptedSessionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->encryptedSessionId = $var;

        return $this;
    }

}

