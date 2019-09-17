<?php
namespace HZ\Contracts\Storage;

interface StorageInterface
{
    /**
     * Set new value to the container
     * 
     * @param   string $key
     * @param   mixed $value
     * @return  void
     */
    public function set(string $key, $value);
    
    /**
     * Check if the container has a value for the given key  
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
     * Get all stored values in the container
     * 
     * @return  iterable
     */
    public function all(): iterable;
    
    /**
     * Remove the value from the container
     * 
     * @param   string $key
     * @return  void
     */
    public function remove(string $key);
}