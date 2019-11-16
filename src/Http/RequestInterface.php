<?php
namespace HZ\Contracts\Http;

interface RequestInterface
{
    /**
     * Get value from the query parameters ie from _GET global variable
     * If not exists, return null
     * 
     * @param   string $input
     * @return  mixed
     */
    public function get(string $input);
    
    /**
     * Get value from the request body ie from _POST global variable
     * If not exists, return null
     * 
     * @param   string $input
     * @return  mixed
     */
    public function post(string $input);
    
    /**
     * Get value from the _SERVER global variable
     * If not exists, return null
     * 
     * @param   string $key
     * @return  string
     */
    public function server(string $key): string;
    
    /**
     * Get a request header value for the given header 
     * 
     * @param   string $header
     * @return  string
     */
    public function header(string $header): string;
    
    /**
     * Get all request headers
     * 
     * @return  array
     */
    public function headers(): array;
    
    /**
     * Get value from the _FILES global variable
     * If not exists, return null, otherwise return new object of UploadedFile 
     * 
     * @param   string $key
     * @return  UploadedFile
     */
    public function file(string $key):? UploadedFile;
        
    /**
     * Check if the given input name is uploaded
     * 
     * @param   string $input
     * @return  mixed
     */
    public function isFile(string $input): bool;
        
    /**
     * Get the current route
     * 
     * @return  string
     */
    public function route(): string;
    
    /**
     * Validate the given inputs by the given rules
     * Rules are listed in array
     * Returns array contains the input name and the value is the error message
     * If all rules are valid, return true
     *   
     * @param   array $rules
     * @return  array|true
     */
    public function validate(array $rules);

    /**
     * Determine if current request is served by https request
     * 
     * @return bool
     */
    public function isSecure(): bool;
    
    /**
     * Get current ip
     * 
     * @return string
     */
    public function ip(): string;
    
    /**
     * Get user agent
     * 
     * @return string
     */
    public function userAgent(): string;

    /**
     * Get current uri
     * i.e /users
     * 
     * @return string
     */
    public function uri(): string;

    /**
     * Get current full url of the request
     * 
     * @return string
     */
    public function url(): string;

    /**
     * Access any request value either from _GET, _POST or _FILES variables dynamically
     * 
     * @param string $key
     * @return mixed
     */
    public function __get(string $key);
}