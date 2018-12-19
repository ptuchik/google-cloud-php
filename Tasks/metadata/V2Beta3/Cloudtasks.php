<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta3/cloudtasks.proto

namespace GPBMetadata\Google\Cloud\Tasks\V2Beta3;

class Cloudtasks
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Tasks\V2Beta3\Queue::initOnce();
        \GPBMetadata\Google\Cloud\Tasks\V2Beta3\Task::initOnce();
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Rpc\Code::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af4200a2b676f6f676c652f636c6f75642f7461736b732f763262657461" .
            "332f636c6f75647461736b732e70726f746f121a676f6f676c652e636c6f" .
            "75642e7461736b732e763262657461331a26676f6f676c652f636c6f7564" .
            "2f7461736b732f763262657461332f71756575652e70726f746f1a25676f" .
            "6f676c652f636c6f75642f7461736b732f763262657461332f7461736b2e" .
            "70726f746f1a1e676f6f676c652f69616d2f76312f69616d5f706f6c6963" .
            "792e70726f746f1a1a676f6f676c652f69616d2f76312f706f6c6963792e" .
            "70726f746f1a1b676f6f676c652f70726f746f6275662f656d7074792e70" .
            "726f746f1a20676f6f676c652f70726f746f6275662f6669656c645f6d61" .
            "736b2e70726f746f1a15676f6f676c652f7270632f636f64652e70726f74" .
            "6f225a0a114c69737451756575657352657175657374120e0a0670617265" .
            "6e74180120012809120e0a0666696c74657218022001280912110a097061" .
            "67655f73697a6518032001280512120a0a706167655f746f6b656e180420" .
            "01280922600a124c697374517565756573526573706f6e736512310a0671" .
            "756575657318012003280b32212e676f6f676c652e636c6f75642e746173" .
            "6b732e763262657461332e517565756512170a0f6e6578745f706167655f" .
            "746f6b656e180220012809221f0a0f476574517565756552657175657374" .
            "120c0a046e616d6518012001280922560a12437265617465517565756552" .
            "657175657374120e0a06706172656e7418012001280912300a0571756575" .
            "6518022001280b32212e676f6f676c652e636c6f75642e7461736b732e76" .
            "3262657461332e517565756522770a125570646174655175657565526571" .
            "7565737412300a05717565756518012001280b32212e676f6f676c652e63" .
            "6c6f75642e7461736b732e763262657461332e5175657565122f0a0b7570" .
            "646174655f6d61736b18022001280b321a2e676f6f676c652e70726f746f" .
            "6275662e4669656c644d61736b22220a1244656c65746551756575655265" .
            "7175657374120c0a046e616d6518012001280922210a1150757267655175" .
            "65756552657175657374120c0a046e616d6518012001280922210a115061" .
            "757365517565756552657175657374120c0a046e616d6518012001280922" .
            "220a12526573756d65517565756552657175657374120c0a046e616d6518" .
            "01200128092287010a104c6973745461736b7352657175657374120e0a06" .
            "706172656e74180120012809123c0a0d726573706f6e73655f7669657718" .
            "022001280e32252e676f6f676c652e636c6f75642e7461736b732e763262" .
            "657461332e5461736b2e5669657712110a09706167655f73697a65180320" .
            "01280512120a0a706167655f746f6b656e180420012809225d0a114c6973" .
            "745461736b73526573706f6e7365122f0a057461736b7318012003280b32" .
            "202e676f6f676c652e636c6f75642e7461736b732e763262657461332e54" .
            "61736b12170a0f6e6578745f706167655f746f6b656e180220012809225c" .
            "0a0e4765745461736b52657175657374120c0a046e616d65180120012809" .
            "123c0a0d726573706f6e73655f7669657718022001280e32252e676f6f67" .
            "6c652e636c6f75642e7461736b732e763262657461332e5461736b2e5669" .
            "65772291010a114372656174655461736b52657175657374120e0a067061" .
            "72656e74180120012809122e0a047461736b18022001280b32202e676f6f" .
            "676c652e636c6f75642e7461736b732e763262657461332e5461736b123c" .
            "0a0d726573706f6e73655f7669657718032001280e32252e676f6f676c65" .
            "2e636c6f75642e7461736b732e763262657461332e5461736b2e56696577" .
            "22210a1144656c6574655461736b52657175657374120c0a046e616d6518" .
            "0120012809225c0a0e52756e5461736b52657175657374120c0a046e616d" .
            "65180120012809123c0a0d726573706f6e73655f7669657718022001280e" .
            "32252e676f6f676c652e636c6f75642e7461736b732e763262657461332e" .
            "5461736b2e5669657732a7140a0a436c6f75645461736b7312a4010a0a4c" .
            "697374517565756573122d2e676f6f676c652e636c6f75642e7461736b73" .
            "2e763262657461332e4c697374517565756573526571756573741a2e2e67" .
            "6f6f676c652e636c6f75642e7461736b732e763262657461332e4c697374" .
            "517565756573526573706f6e7365223782d3e4930231122f2f7632626574" .
            "61332f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e" .
            "732f2a7d2f7175657565731293010a084765745175657565122b2e676f6f" .
            "676c652e636c6f75642e7461736b732e763262657461332e476574517565" .
            "7565526571756573741a212e676f6f676c652e636c6f75642e7461736b73" .
            "2e763262657461332e5175657565223782d3e4930231122f2f7632626574" .
            "61332f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f" .
            "2a2f7175657565732f2a7d12a0010a0b4372656174655175657565122e2e" .
            "676f6f676c652e636c6f75642e7461736b732e763262657461332e437265" .
            "6174655175657565526571756573741a212e676f6f676c652e636c6f7564" .
            "2e7461736b732e763262657461332e5175657565223e82d3e4930238222f" .
            "2f763262657461332f7b706172656e743d70726f6a656374732f2a2f6c6f" .
            "636174696f6e732f2a7d2f7175657565733a05717565756512a6010a0b55" .
            "70646174655175657565122e2e676f6f676c652e636c6f75642e7461736b" .
            "732e763262657461332e5570646174655175657565526571756573741a21" .
            "2e676f6f676c652e636c6f75642e7461736b732e763262657461332e5175" .
            "657565224482d3e493023e32352f763262657461332f7b71756575652e6e" .
            "616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f717565" .
            "7565732f2a7d3a057175657565128e010a0b44656c657465517565756512" .
            "2e2e676f6f676c652e636c6f75642e7461736b732e763262657461332e44" .
            "656c6574655175657565526571756573741a162e676f6f676c652e70726f" .
            "746f6275662e456d707479223782d3e49302312a2f2f763262657461332f" .
            "7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f71" .
            "75657565732f2a7d12a0010a0a50757267655175657565122d2e676f6f67" .
            "6c652e636c6f75642e7461736b732e763262657461332e50757267655175" .
            "657565526571756573741a212e676f6f676c652e636c6f75642e7461736b" .
            "732e763262657461332e5175657565224082d3e493023a22352f76326265" .
            "7461332f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e73" .
            "2f2a2f7175657565732f2a7d3a70757267653a012a12a0010a0a50617573" .
            "655175657565122d2e676f6f676c652e636c6f75642e7461736b732e7632" .
            "62657461332e50617573655175657565526571756573741a212e676f6f67" .
            "6c652e636c6f75642e7461736b732e763262657461332e51756575652240" .
            "82d3e493023a22352f763262657461332f7b6e616d653d70726f6a656374" .
            "732f2a2f6c6f636174696f6e732f2a2f7175657565732f2a7d3a70617573" .
            "653a012a12a3010a0b526573756d655175657565122e2e676f6f676c652e" .
            "636c6f75642e7461736b732e763262657461332e526573756d6551756575" .
            "65526571756573741a212e676f6f676c652e636c6f75642e7461736b732e" .
            "763262657461332e5175657565224182d3e493023b22362f763262657461" .
            "332f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a" .
            "2f7175657565732f2a7d3a726573756d653a012a1296010a0c4765744961" .
            "6d506f6c69637912222e676f6f676c652e69616d2e76312e47657449616d" .
            "506f6c696379526571756573741a152e676f6f676c652e69616d2e76312e" .
            "506f6c696379224b82d3e493024522402f763262657461332f7b7265736f" .
            "757263653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f7175" .
            "657565732f2a7d3a67657449616d506f6c6963793a012a1296010a0c5365" .
            "7449616d506f6c69637912222e676f6f676c652e69616d2e76312e536574" .
            "49616d506f6c696379526571756573741a152e676f6f676c652e69616d2e" .
            "76312e506f6c696379224b82d3e493024522402f763262657461332f7b72" .
            "65736f757263653d70726f6a656374732f2a2f6c6f636174696f6e732f2a" .
            "2f7175657565732f2a7d3a73657449616d506f6c6963793a012a12bc010a" .
            "125465737449616d5065726d697373696f6e7312282e676f6f676c652e69" .
            "616d2e76312e5465737449616d5065726d697373696f6e73526571756573" .
            "741a292e676f6f676c652e69616d2e76312e5465737449616d5065726d69" .
            "7373696f6e73526573706f6e7365225182d3e493024b22462f7632626574" .
            "61332f7b7265736f757263653d70726f6a656374732f2a2f6c6f63617469" .
            "6f6e732f2a2f7175657565732f2a7d3a7465737449616d5065726d697373" .
            "696f6e733a012a12a9010a094c6973745461736b73122c2e676f6f676c65" .
            "2e636c6f75642e7461736b732e763262657461332e4c6973745461736b73" .
            "526571756573741a2d2e676f6f676c652e636c6f75642e7461736b732e76" .
            "3262657461332e4c6973745461736b73526573706f6e7365223f82d3e493" .
            "023912372f763262657461332f7b706172656e743d70726f6a656374732f" .
            "2a2f6c6f636174696f6e732f2a2f7175657565732f2a7d2f7461736b7312" .
            "98010a074765745461736b122a2e676f6f676c652e636c6f75642e746173" .
            "6b732e763262657461332e4765745461736b526571756573741a202e676f" .
            "6f676c652e636c6f75642e7461736b732e763262657461332e5461736b22" .
            "3f82d3e493023912372f763262657461332f7b6e616d653d70726f6a6563" .
            "74732f2a2f6c6f636174696f6e732f2a2f7175657565732f2a2f7461736b" .
            "732f2a7d12a1010a0a4372656174655461736b122d2e676f6f676c652e63" .
            "6c6f75642e7461736b732e763262657461332e4372656174655461736b52" .
            "6571756573741a202e676f6f676c652e636c6f75642e7461736b732e7632" .
            "62657461332e5461736b224282d3e493023c22372f763262657461332f7b" .
            "706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f" .
            "7175657565732f2a7d2f7461736b733a012a1294010a0a44656c65746554" .
            "61736b122d2e676f6f676c652e636c6f75642e7461736b732e7632626574" .
            "61332e44656c6574655461736b526571756573741a162e676f6f676c652e" .
            "70726f746f6275662e456d707479223f82d3e49302392a372f7632626574" .
            "61332f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f" .
            "2a2f7175657565732f2a2f7461736b732f2a7d129f010a0752756e546173" .
            "6b122a2e676f6f676c652e636c6f75642e7461736b732e76326265746133" .
            "2e52756e5461736b526571756573741a202e676f6f676c652e636c6f7564" .
            "2e7461736b732e763262657461332e5461736b224682d3e4930240223b2f" .
            "763262657461332f7b6e616d653d70726f6a656374732f2a2f6c6f636174" .
            "696f6e732f2a2f7175657565732f2a2f7461736b732f2a7d3a72756e3a01" .
            "2a427c0a1e636f6d2e676f6f676c652e636c6f75642e7461736b732e7632" .
            "6265746133420f436c6f75645461736b7350726f746f50015a3f676f6f67" .
            "6c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c6561" .
            "7069732f636c6f75642f7461736b732f763262657461333b7461736b73a2" .
            "02055441534b53620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
