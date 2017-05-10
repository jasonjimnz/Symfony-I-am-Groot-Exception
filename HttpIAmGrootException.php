<?php
/**
 * Created by PhpStorm.
 * User: Jason Jiménez Cruz (JJDEV)
 * Date: 9/5/17
 * Time: 21:10
 */

# namespace \HereIsYourBundle\Exception;

use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class HttpIAmGrootException extends \RuntimeException implements HttpExceptionInterface
{
    private $statusCode;
    private $headers;

    public function __construct($statusCode = 523, $message = "I am Groot!", \Exception $previous = null, array $headers = array(), $code = 0)
    {
        $this->statusCode = $statusCode;
        $this->headers = $headers;

        parent::__construct($message, $code, $previous);
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Set response headers.
     *
     * @param array $headers Response headers
     */
    public function setHeaders(array $headers)
    {
        $this->headers = $headers;
    }
}
