<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace GPBMetadata;

class Api
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a90030a096170692e70726f746f120b677270632e6170692e7631224a0a104765745265706f727452657175657374120c0a046e616d6518012001280912280a046461746518022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70226d0a114765745265706f7274526573706f6e7365120c0a046e616d6518012001280912280a046461746518022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012200a0566696c657318032003280b32112e677270632e6170692e76312e46696c65223b0a0446696c65120a0a026964180120012803120b0a0375726c180220012809120c0a0473697a65180320012809120c0a046861736818042001280932510a03417069124a0a094765745265706f7274121d2e677270632e6170692e76312e4765745265706f7274526571756573741a1e2e677270632e6170692e76312e4765745265706f7274526573706f6e736542235a216769746875622e636f6d2f54696d52757474652f6170692f70726f746f2f617069620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
