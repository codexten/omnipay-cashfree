<?php

namespace Omnipay\Cashfree\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\NotificationInterface;
use Omnipay\Common\Message\RequestInterface;
use Omnipay\Common\Message\RedirectResponseInterface;

/**
 * Class Response
 *
 * @package Omnipay\Cashfree\Message
 */
class Response extends AbstractResponse implements RedirectResponseInterface, NotificationInterface
{

    /**
     * @return bool
     */
    public function isSuccessful()
    {
        return $this->data['status'] == 'OK';
    }

    /**
     * @return bool
     */
    public function isRedirect()
    {
        return !empty($this->data['paymentLink']);
    }

    /**
     * @return null
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl = $this->isRedirect() ? $this->data['paymentLink'] : null;
    }

    /**
     * Gateway Reference
     *
     * @return null|string A reference provided by the gateway to represent this transaction
     */
    public function getTransactionReference()
    {
        return !empty($this->data['payment_request']['id']) ? $this->data['payment_request']['id'] : null;
    }

    /**
     * Was the transaction successful?
     *
     * @return string Transaction status, one of {@see STATUS_COMPLETED}, {@see #STATUS_PENDING},
     * or {@see #STATUS_FAILED}.
     */
    public function getTransactionStatus()
    {
        return static::STATUS_PENDING;
    }

    /**
     * Response Message
     *
     * @return null|string A response message from the payment gateway
     */
    public function getMessage()
    {
        return $this->data['reason'];
    }

    /**
     * @return string
     */
    public function getRedirectMethod()
    {
        return 'GET';
    }

    /**
     * @return mixed
     */
    public function getRedirectData()
    {
        return $this->getData();
    }
}
