<?php
namespace HZ\Contracts\Http;

use Arrayable;

interface ResponseInterface
{
    /**
     * Set the response content
     * 
     * @param   string $content
     * @return  ResponseInterface
     */
    public function setContent(string $content): ResponseInterface;    

    /**
     * Set the response status code
     * 
     * @param   int $statusCode
     * @return  ResponseInterface
     */
    public function setStatusCode(int $statusCode): ResponseInterface;    

    /**
     * Set the response headers
     * 
     * @param   array $headers
     * @return  ResponseInterface
     */
    public function setHeaders(array $headers): ResponseInterface;    

    /**
     * Send response
     * If the given content is an array or is Arrayable, then send response as json response
     * 
     * @param  string|array $content
     * @param  int          $statusCode
     * @param  array        $headers
     * @return string
     */
    public function send($content, int $statusCode, array $headers): string;

    /**
     * Send json response
     * 
     * @param  \Arrayable $content
     * @param  int $statusCode
     * @param  array $headers
     * @return string
     */
    public function sendJson(Arrayable $content, int $statusCode, array $headers): string;

    /**
     * Send json response
     * 
     * @param  string $filePath
     * @param  int $statusCode
     * @param  array $headers
     * @return string
     */
    public function sendFIle(string $filePath, int $statusCode, array $headers): string;

    /**
     * Convert Response object to string on string casting by returning response content
     */
    public function __toString(): string;
}