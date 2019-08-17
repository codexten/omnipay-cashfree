<?php

namespace Omnipay\Cashfree;

use Omnipay\Common\AbstractGateway;
use Omnipay\Common\Message\AbstractRequest;
use Omnipay\Common\Message\RequestInterface;

/**
 * Class Gateway
 *
 * @package Omnipay\Cashfree
 *
 * @method RequestInterface authorize(array $options = [])
 * @method RequestInterface completeAuthorize(array $options = [])
 * @method RequestInterface capture(array $options = [])
 * @method RequestInterface completePurchase(array $options = [])
 * @method RequestInterface refund(array $options = [])
 * @method RequestInterface void(array $options = [])
 * @method RequestInterface createCard(array $options = [])
 * @method RequestInterface updateCard(array $options = [])
 * @method RequestInterface deleteCard(array $options = [])
 *
 * @link http://docs.cashfree.com/docs/web/guide/
 */
class Gateway extends AbstractGateway
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Cashfree';
    }

    /**
     * @return array
     */
    public function getDefaultParameters()
    {
        return [
            'appId' => '',
            'secretKey' => '',
            'currency' => 'INR',
        ];
    }

    public function getAppId()
    {
        return $this->getParameter('appId');
    }

    public function setAppId($value)
    {
        return $this->setParameter('appId', $value);
    }

    public function getSecretKey()
    {
        return $this->getParameter('secretKey');
    }

    public function setSecretKey($value)
    {
        return $this->setParameter('secretKey',$value);
    }
    //    /**
//     * @return mixed
//     */
//    public function getSalt()
//    {
//        return $this->getParameter('salt');
//    }
//
//    /**
//     * @param $value
//     *
//     * @return $this
//     */
//    public function setSalt($value)
//    {
//        return $this->setParameter('salt', $value);
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getApiKey()
//    {
//        return $this->getParameter('api_key');
//    }
//
//    /**
//     * @param $value
//     *
//     * @return $this
//     */
//    public function setApiKey($value)
//    {
//        return $this->setParameter('api_key', $value);
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getAuthToken()
//    {
//        return $this->getParameter('auth_token');
//    }
//
//    /**
//     * @param $value
//     *
//     * @return $this
//     */
//    public function setAuthToken($value)
//    {
//        return $this->setParameter('auth_token', $value);
//    }
//
    /**
     * @param array $parameters
     *
     * @return AbstractRequest
     */
    public function purchase(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\Cashfree\Message\PurchaseRequest', $parameters);
    }
//
//    /**
//     * @param array $parameters
//     *
//     * @return \Omnipay\Common\Message\AbstractRequest
//     */
//    public function completePurchase(array $parameters = [])
//    {
//        return $this->createRequest('\Omnipay\Cashfree\Message\CompletePurchaseRequest', $parameters);
//    }
//
//    /**
//     * @param array $parameters
//     *
//     * @return \Omnipay\Common\Message\AbstractRequest
//     */
//    public function refund(array $parameters = [])
//    {
//        return $this->createRequest('\Omnipay\Cashfree\Message\RefundRequest', $parameters);
//    }
//
//    /**
//     * @param array $parameters
//     *
//     * @return \Omnipay\Common\Message\AbstractRequest
//     */
//    public function fetchPaymentRequest(array $parameters = [])
//    {
//        return $this->createRequest('\Omnipay\Cashfree\Message\FetchPaymentRequest', $parameters);
//    }
//
//    /**
//     * Handle notification callback.
//     *
//     * @param array $parameters
//     *
//     * @return \Omnipay\Common\Message\AbstractRequest
//     */
//    public function acceptNotification(array $parameters = [])
//    {
//        return $this->createRequest('\Omnipay\Cashfree\Message\NotifyRequest', $parameters);
//    }

    public function __call($name, $arguments)
    {
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface authorize(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface completeAuthorize(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface capture(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface purchase(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface completePurchase(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface refund(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface void(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface createCard(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface updateCard(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface deleteCard(array $options = array())
    }
}
