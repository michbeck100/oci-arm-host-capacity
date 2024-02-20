<?php


namespace Hitrov;

use Hitrov\OCI\KeyProvider\KeyProviderInterface;

class PrivateKeyProvider implements KeyProviderInterface
{
    private string $privateKey;
    private string $keyId;

    public function __construct(string $privateKey, string $keyId)
    {
        $this->privateKey = $privateKey;
        $this->keyId = $keyId;
    }

    public function getPrivateKey(): string
    {
        return $this->privateKey;
    }

    public function getKeyId(): string
    {
        return $this->keyId;
    }
}
