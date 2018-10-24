<?php

namespace Rule\RuleMailer\Plugin\Magento\Newsletter\Model;

class Subscriber
{
    /**
     * Before unsubscribe
     *
     * Enable import mode to avoid sending native Magento emails.
     *
     * @param \Magento\Newsletter\Model\Subscriber $subject Subject class
     * @param string                               $email   Subscriber email
     *
     * @return null
     */
    public function beforeSubscribe(\Magento\Newsletter\Model\Subscriber $subject, $email)
    {
        $subject->setImportMode(true);

        return null;
    }

    /**
     * Before unsubscribe
     *
     * Enable import mode to avoid sending native Magento emails.
     *
     * @param \Magento\Newsletter\Model\Subscriber $subject Subject class
     *
     * @return null
     */
    public function beforeUnsubscribe(\Magento\Newsletter\Model\Subscriber $subject)
    {
        $subject->setImportMode(true);

        return null;
    }
}
