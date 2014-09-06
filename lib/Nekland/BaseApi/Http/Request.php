<?php

/**
 * This file is a part of nekland base api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\BaseApi\Http;


class Request
{
    /**
     * @var string
     */
    private $method;

    /**
     * @var string
     */
    private $path;

    /**
     * @var array
     */
    private $body;

    /**
     * @var array
     */
    private $headers;

    /**
     * @param string $method
     * @param string $path
     * @param array  $body
     * @param array  $headers
     */
    public function __construct($method, $path, array $body = [], array $headers = [])
    {
        $this->method  = $method;
        $this->path    = $path;
        $this->body    = $body;
        $this->headers = $headers;
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @param  string $name
     * @return bool
     */
    public function hasHeader($name)
    {
        return isset($this->headers[$name]);
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return strtolower($this->method);
    }

    /**
     * @return array
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param  array $body
     * @return self
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * @param  array $headers
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->headers = $headers;
        return $this;
    }

    /**
     * @param  string $method
     * @return self
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @param  string $path
     * @return self
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }
}
