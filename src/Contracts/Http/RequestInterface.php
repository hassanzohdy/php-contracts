<?php
namespace HZ\Contracts\Http;

interface RequestInterface
{
    /**
     * Get value from the query parameters ie from _GET global variable
     * If not exists, return null
     * 
     * @param   string $key
     * @return  mixed
     */
    public function get(string $key);
    
    /**
     * Get value from the request body ie from _POST global variable
     * If not exists, return null
     * 
     * @param   string $key
     * @return  mixed
     */
    public function post(string $key);
    
    /**
     * Get value from the _SERVER global variable
     * If not exists, return null
     * 
     * @param   string $key
     * @return  mixed
     */
    public function server(string $key);
    
    /**
     * Get value from the _FILES global variable
     * If not exists, return null
     * 
     * @param   string $key
     * @return  mixed
     */
    public function file(string $key);
        
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
}