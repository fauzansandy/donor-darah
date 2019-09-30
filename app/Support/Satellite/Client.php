<?php

namespace App\Support\Satellite;

use GuzzleHttp;

class Client
{
    /**
     * The Instance Message Object.
     *
     * @var \Message
     */
    protected static $_Instance = NULL;

    /**
     * The Request Http Instance.
     *
     * @var array
     */
    protected $_Request = null;

    /**
     * The result.
     *
     * @var array
     */
    protected $_Result = null;

    public function __construct()
    {
        $this->_Request = new GuzzleHttp\Client([
            'base_uri' => 'http://' . env('HOST_SERVICE_PROVIDER_SCORE')
        ]);
        return $this;
    }

    public function Request()
    {
        return $this->_request;
    }

    public static function get($url)
    {
        if (static::$_Instance == NULL) {
            static::$_Instance = new self();
        }
        return static::$_Instance->_GET($url);
    }

    public function _GET($url)
    {
        $result = [];
        try {
            $response = $this->_Request->get($url);
            $BodyObject = json_decode($response->getBody());
            $result = $BodyObject;
        } catch (\Exception $e) {
        }
        $this->_Result = $result;
        return $this;
    }

    public function result()
    {
        return $this;
    }

    public function show()
    {
        try {
            return $this->_Result->data->show;
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function data()
    {
        try {
            return $this->_Result->data->records;
        } catch (\Exception $e) {
            return null;
        }
    }
}
