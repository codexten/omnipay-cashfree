<?php

namespace Omnipay\Cashfree\Message;

use Omnipay\Common\Exception\InvalidRequestException;

/**
 * Class PurchaseRequest
 *
 * @package Omnipay\Cashfree\Message
 */
class PurchaseRequest extends AbstractRequest
{
    /**
     * @return array
     * @throws InvalidRequestException
     */
    public function getData()
    {
        $data = parent::getData();

        $this->validate('amount');
        $this->validate('orderId');
        $this->validate('customerName');
        $this->validate('customerPhone');
        $this->validate('customerEmail');
        $this->validate('returnUrl');
        $this->validate('notifyUrl');

        $data['orderId'] = $this->getOrderId();
        $data['orderAmount'] = $this->getAmount();
        $data['orderCurrency'] = $this->getCurrency();
        $data['orderNote'] = $this->getOrderNote();
        $data['customerName'] = $this->getCustomerName();
        $data['customerEmail'] = $this->getCustomerEmail();
        $data['customerPhone'] = $this->getCustomerPhone();
        $data['returnUrl'] = $this->getReturnUrl();
        $data['notifyUrl'] = $this->getNotifyUrl();

        return $data;
    }

    /**
     * @param mixed $data
     *
     * @return Response
     */
    public function sendData($data)
    {
        $httpRequest = $this->createRequest('POST', $this->getEndpoint() . '/order/create', $data);
        $jsonResponse = $this->sendRequest($httpRequest);

        return $this->response = new Response($this, $jsonResponse);
    }

    public function getOrderId()
    {
        return $this->getParameter('orderId');
    }

    public function setOrderId($value)
    {
        return $this->setParameter('orderId', $value);
    }

    public function getOrderNote()
    {
        return $this->getParameter('orderNote');
    }

    public function setOrderNote($value)
    {
        return $this->setParameter('orderNote', $value);
    }

    public function getCustomerName()
    {
        return $this->getParameter('customerName');
    }

    public function setCustomerName($value)
    {
        return $this->setParameter('customerName', $value);
    }

    public function getCustomerEmail()
    {
        return $this->getParameter('customerEmail');
    }

    public function setCustomerEmail($value)
    {
        return $this->setParameter('customerEmail', $value);
    }

    public function getCustomerPhone()
    {
        return $this->getParameter('customerPhone');
    }

    public function setCustomerPhone($value)
    {
        return $this->setParameter('customerPhone', $value);
    }

//    /**
//     * @return mixed
//     */
//    public function getPurpose()
//    {
//        return $this->getParameter('purpose');
//    }
//
//    /**
//     * @param $value
//     *
//     * @return \Omnipay\Common\Message\AbstractRequest
//     */
//    public function setPurpose($value)
//    {
//        return $this->setParameter('purpose', $value);
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getBuyerName()
//    {
//        return $this->getParameter('buyer_name');
//    }
//
//    /**
//     * @param $value
//     *
//     * @return \Omnipay\Common\Message\AbstractRequest
//     */
//    public function setBuyerName($value)
//    {
//        return $this->setParameter('buyer_name', $value);
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getEmail()
//    {
//        return $this->getParameter('email');
//    }
//
//    /**
//     * @param $value
//     *
//     * @return \Omnipay\Common\Message\AbstractRequest
//     */
//    public function setEmail($value)
//    {
//        return $this->setParameter('email', $value);
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getPhone()
//    {
//        return $this->getParameter('phone');
//    }
//
//    /**
//     * @param $value
//     *
//     * @return \Omnipay\Common\Message\AbstractRequest
//     */
//    public function setPhone($value)
//    {
//        return $this->setParameter('phone', $value);
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getRedirectUrl()
//    {
//        return $this->getParameter('redirect_url');
//    }
//
//    /**
//     * @param $value
//     *
//     * @return \Omnipay\Common\Message\AbstractRequest
//     */
//    public function setRedirectUrl($value)
//    {
//        return $this->setParameter('redirect_url', $value);
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getWebhook()
//    {
//        return $this->getParameter('webhook');
//    }
//
//    /**
//     * @param $value
//     *
//     * @return \Omnipay\Common\Message\AbstractRequest
//     */
//    public function setWebhook($value)
//    {
//        return $this->setParameter('webhook', $value);
//    }
//
//    /**
//     * @return bool
//     */
//    public function getAllowRepeatedPayments()
//    {
//        return (bool)$this->getParameter('allow_repeated_payments');
//    }
//
//    /**
//     * @param $value
//     *
//     * @return \Omnipay\Common\Message\AbstractRequest
//     */
//    public function setAllowRepeatedPayments($value)
//    {
//        return $this->setParameter('allow_repeated_payments', (bool)$value);
//    }
//
//    /**
//     * @return bool
//     */
//    public function getSendEmail()
//    {
//        return (bool)$this->getParameter('send_email');
//    }
//
//    /**
//     * @param $value
//     *
//     * @return \Omnipay\Common\Message\AbstractRequest
//     */
//    public function setSendEmail($value)
//    {
//        return $this->setParameter('send_email', (bool)$value);
//    }
//
//    /**
//     * @return bool
//     */
//    public function getSendSms()
//    {
//        return (bool)$this->getParameter('send_sms');
//    }
//
//    /**
//     * @param $value
//     *
//     * @return \Omnipay\Common\Message\AbstractRequest
//     */
//    public function setSendSms($value)
//    {
//        return $this->setParameter('send_sms', (bool)$value);
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getExpiresAt()
//    {
//        return $this->getParameter('expires_at');
//    }
//
//    /**
//     * @param $value
//     *
//     * @return \Omnipay\Common\Message\AbstractRequest
//     */
//    public function setExpiresAt($value)
//    {
//        return $this->setParameter('expires_at', $value);
//    }

}
