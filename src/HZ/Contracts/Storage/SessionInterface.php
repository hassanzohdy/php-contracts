<?php
namespace HZ\Contracts\Storage;

interface SessionInterface extends StorageInterface
{
    /**
     * Start the session
     * 
     * @return  void
     */
    public function start();

    /**
     * Destroy the session
     * 
     * @return void
     */
    public function destroy();
}