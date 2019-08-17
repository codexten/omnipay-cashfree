<?php

namespace Omnipay\Cashfree\Message;

use Guzzle\Http\Message\RequestInterface;
use Guzzle\Http\Exception\ClientErrorResponseException;
use Omnipay\Cashfree\Gateway;

/**
 * Class AbstractRequest
 *
 * @package Omnipay\Cashfree\Message
 */
abstract class AbstractRequest extends \Omnipay\Common\Message\AbstractRequest
{
    /**
     * @var string
     */
    protected $liveEndpoint = 'https://api.cashfree.com/api/v1';
    /**
     * @var string
     */
    protected $testEndpoint = 'https://test.cashfree.com/api/v1';

    /**
     * @param $method
     * @param $endpoint
     * @param $data
     *
     * @return RequestInterface
     */
    public function createRequest($method, $endpoint, $data = null)
    {
        return $this->httpClient->createRequest($method, $endpoint, null, $data);
    }

    /**
     * @param RequestInterface $httpRequest
     *
     * @return array|bool|float|int|string
     */
    public function sendRequest(RequestInterface $httpRequest)
    {
        try {
            $httpResponse = $httpRequest->send();
        } catch (ClientErrorResponseException $e) {
            $httpResponse = $e->getResponse();
        }

        return $httpResponse->json();
    }

    /**
     * @return string
     */
    protected function getEndpoint()
    {
        return $this->getTestMode() ? $this->testEndpoint : $this->liveEndpoint;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return [
            'appId' => $this->getAppId(),
            'secretKey' => $this->getSecretKey(),
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
}
