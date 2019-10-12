<?php
namespace HZ\Contracts\Filesystem;

interface FilesystemInterface
{
    /**
     * Check if the given path exists
     * 
     * @param string $path
     * @return bool 
     */
    public function exists(string $path): bool;
    
    /**
     * Check if the given path is a file
     * 
     * @param string $path
     * @return bool 
     */
    public function isFile(string $path): bool;
    
    /**
     * Check if the given path is a directory
     * 
     * @param string $path
     * @return bool 
     */
    public function isDirectory(string $path): bool;
    
    /**
     * Create a directory.
     *
     * @param  string  $path
     * @param  int     $mode
     * @param  bool    $recursive
     * @param  bool    $force
     * @return bool
     */
    public function makeDirectory(string $path, int $mode, bool $recursive, bool $force): bool;

    /**
     * Remove all contents of the given directory path and keep the directory
     * 
     * @param  string $path
     * @return bool
     */
    public function cleanDirectory(string $path): bool;

    /**
     * Get the content of the given file path
     * 
     * @param string $path
     * @param bool   $lock
     * @return string
     * @throws FileNotFoundException
     */
    public function get(string $path, bool $lock): string;
    
    /**
     * Require the given file path 
     * 
     * @param string $file
     * @return mixed
     */
    public function require(string $file);
    
    /**
     * Require the given file path once 
     * 
     * @param string $file
     * @return mixed
     */
    public function requireOnce(string $file);
    
    /**
     * Get the content of the given file path
     * 
     * @param string $path
     * @param string $content
     * @param int $flags
     * @return int|false 
     */
    public function put(string $path, string $content, int $flags);
    
    /**
     * Add content to the beginning of the given file path
     * 
     * @param string $path
     * @param string $content
     * @return int|false 
     */
    public function prepend(string $path, string $content);
    
    /**
     * Add content to the end of the given file path
     * 
     * @param string $path
     * @param string $content
     * @return int|false 
     */
    public function append(string $path, string $content);
    
    /**
     * Delete the given path
     * This works with files and directories as well
     * 
     * @param string $path
     * @return bool 
     */
    public function delete(string $path): bool;
    
    /**
     * Rename the given path to the new path
     * 
     * @param string $oldPath
     * @param string $newPath
     * @return bool 
     */
    public function rename(string $oldPath, string $newPath): bool;
    
    /**
     * Copy the given path to the new pat
     * This works with files and directories as well
     * 
     * @param string $target
     * @param string $destination
     * @return bool 
     */
    public function copy(string $target, string $destination): bool;

    /**
     * Move the given path to the new path
     * This works with files and directories as well
     * 
     * @param string $target
     * @param string $destination
     * @return bool 
     */
    public function move(string $target, string $destination): bool;

    /**
     * Get the MD5 hash of the file at the given path.
     *
     * @param  string  $path
     * @return string
     */
    public function hash(string $path): string;

    /**
     * Get the file|directory size.
     * If the unit parameter is passed then convert the size to its corresponding unit accordingly
     * Available units: kb|mb|gb
     *  
     * @param  string  $path
     * @param  string  $unit
     * @return float
     */
    public function size(string $path, string $unit): float;
    
    /**
     * Get or set UNIX mode of a file or directory.
     * If second parameter is passed, then set the mode otherwise return it.
     *
     * @param  string  $path
     * @param  int  $mode
     * @return mixed
     */
    public function chmod(string $path, int $mode);

    /**
     * Extract the file name from a file path.
     *
     * @param  string  $path
     * @return string
     */
    public function name(string $path): string;

    /**
     * Extract the trailing name component from a file path.
     *
     * @param  string  $path
     * @return string
     */
    public function basename(string $path): string;

    /**
     * Extract the parent directory from a file path.
     *
     * @param  string  $path
     * @return string
     */
    public function dirname(string $path):? string;

    /**
     * Extract the file extension from a file path.
     *
     * @param  string  $path
     * @return string
     */
    public function extension(string $path):? string;

    /**
     * Get the file type of a given file.
     *
     * @param  string  $path
     * @return string
     */
    public function type(string $path):? string;

    /**
     * Get the mime-type of a given file.
     *
     * @param  string  $path
     * @return string|null
     */
    public function mimeType(string $path):? string;    

    /**
     * Get the file's last modification time.
     *
     * @param  string  $path
     * @return int
     */
    public function lastModified(string $path): int;

    /**
     * Determine if the given path is readable.
     *
     * @param  string  $path
     * @return bool
     */
    public function isReadable(string $path): bool;
    
    /**
     * Determine if the given path is writable.
     *
     * @param  string  $path
     * @return bool
     */
    public function isWritable(string $path): bool;
    
    /**
     * Get an array of all files in a directory.
     *
     * @param  string  $directory
     * @param  bool  $hidden
     */
    public function files(string $directory, bool $hidden = false): iterable;
    
    /**
     * Get an array of all files in a directory recursively.
     *
     * @param  string  $directory
     * @param  bool  $hidden
     */
    public function allFiles(string $directory, bool $hidden = false): iterable;
    
    /**
     * Get an array of all directories in a directory.
     *
     * @param  string  $directory
     * @param  bool  $hidden
     */
    public function directories(string $directory, bool $hidden = false): iterable;
    
    /**
     * Get an array of all directories in a directory recursively.
     *
     * @param  string  $directory
     * @param  bool  $hidden
     */
    public function allDirectories(string $directory, bool $hidden = false): iterable;
    
    /**
     * Get an array of all directories and files in a directory.
     *
     * @param  string  $directory
     * @param  bool  $hidden
     */
    public function list(string $directory, bool $hidden = false): iterable;
    
    /**
     * Get an array of all directories and files in a directory recursively.
     *
     * @param  string  $directory
     * @param  bool  $hidden
     */
    public function listAll(string $directory, bool $hidden = false): iterable;
    
    /**
     * Find path names matching a given pattern.
     *
     * @param  string  $pattern
     * @param  int     $flags
     * @return array
     */
    public function glob(string $pattern, int $flags): iterable;
}