<?php

namespace Omnipay\Cashfree\Message;

/**
 * Class CompletePurchaseRequest
 *
 * @package Omnipay\Cashfree\Message
 */
class CompletePurchaseRequest extends AbstractRequest
{
    /**
     * @return array
     */
    public function getData()
    {
        $data = parent::getData();

        $this->validate('orderId');
        $data['orderId'] = $this->getOrderId();


        return $data;
    }

    /**
     * @param mixed $data
     *
     * @return CompletePurchaseResponse
     */
    public function sendData($data)
    {
        $httpRequest = $this->createRequest('GET', $this->getEndpoint() . 'payments/' . $data['payment_id']);
        $jsonResponse = $this->sendRequest($httpRequest);

        return $this->response = new CompletePurchaseResponse($this, $jsonResponse);
    }


    public function setOrderId($value)
    {
        return $this->setParameter('orderId', $value);
    }

    public function getOrderId()
    {
        return $this->getParameter('orderId');
    }

}
