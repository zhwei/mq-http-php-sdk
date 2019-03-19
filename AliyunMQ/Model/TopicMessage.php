<?php

namespace AliyunMQ\Model;

use AliyunMQ\Traits\MessagePropertiesForPublish;

class TopicMessage
{

    use MessagePropertiesForPublish;

    public function __construct($messageBody)
    {
        $this->messageBody = $messageBody;
    }
}
