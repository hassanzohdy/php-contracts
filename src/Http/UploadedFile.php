<?php
namespace HZ\Contracts\Http;

interface UploadedFile
{
    /**
     * Get file name
     * 
     * @return string
     */
    public function name(): string;
    
    /**
     * Get file extension
     * 
     * @return string
     */
    public function extension(): string;
    
    /**
     * Get file mime type
     * 
     * @return string
     */
    public function mime(): string;
    
    /**
     * Get file size in bits
     * 
     * @return int
     */
    public function size(): int;
    
    /**
     * Store the file to the given directory and return full stored file location
     * The file name will be generated randomly
     * 
     * @param string $directory
     * @return string
     */
    public function store(string $directory = null): string;
    
    /**
     * Store the file to the given directory with the given name and return full stored file location
     * 
     * @param string $savedName
     * @param string $directory
     * @return string
     */
    public function storeAs(string $savedName, string $directory = null): string;
}