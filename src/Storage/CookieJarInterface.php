<?php
namespace HZ\Contracts\Storage;

interface CookieJarInterface
{
    /**
     * Add new cookie 
     *
     * @param  string       $name
     * @param  string       $value
     * @param  int          $minutes
     * @return $this
     */
    public function set(string $name, string $value, int $minutes): CookieJarInterface;

    /**
     * Check if the cookie has a value for the given key  
     * 
     * @param   string $key
     * @return  boolean
     */
    public function has(string $key): bool;
    
    /**
     * Get a value from the storage container
     * If no value exists for the given key, return the default value instead
     * 
     * @param   string $key
     * @param   mixed $default
     * @return  mixed
     */
    public function get(string $key, $default);
    
    /**
     * Remove the value from the container
     * 
     * @param   string $key
     * @return  void
     */
    public function remove(string $key);

    /**
     * Clear all cookies
     * 
     * @return void
     */
    public function flush();
}