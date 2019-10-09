<?php
namespace HZ\Contracts\Encryption;

interface EncrypterInterface
{
    /**
     * Encrypt the given content
     * The value MUST BE always json encoded even if it's not an array
     *
     * @param  string|array $value
     * @return string
     */
    public function encrypt(string $value): string;

    /**
     * Decrypt the given cyphered text 
     * 
     * @param   string $payload
     * @return  string|array
     */
    public function decrypt(string $payload);
}