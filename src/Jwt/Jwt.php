<?php

namespace YdbPlatform\Ydb\Jwt;

use DateTimeInterface;

use phpseclib\Crypt\RSA as LegacyRSA;
use phpseclib3\Crypt\RSA;
use phpseclib3\Crypt\PublicKeyLoader;

class Jwt
{
    /**
     * @var array
     */
	protected $header = [
		'typ' => 'JWT',
		'alg' => 'PS256',
	];

    /**
     * @var array
     */
	protected $payload = [];

    /**
     * @var string
     */
	protected $privateKey;

    /**
     * @param string $privateKey
     * @param string $keyId
     * @param \Psr\Log\LoggerInterface $logger
     */
	public function __construct($privateKey, $keyId, $logger)
	{
		$this->privateKey = $privateKey;
		$this->header['kid'] = $keyId;
        $this->logger = $logger;
	}

    /**
     * @param string $value
     * @return $this
     */
	public function issuedBy($value)
	{
		$this->payload['iss'] = $value;
		return $this;
	}

    /**
     * @param DateTimeInterface $value
     * @return $this
     */
	public function issuedAt(DateTimeInterface $value)
	{
		$this->payload['iat'] = $value->getTimestamp();
		return $this;
	}

    /**
     * @param DateTimeInterface $value
     * @return $this
     */
	public function expiresAt(DateTimeInterface $value)
	{
		$this->payload['exp'] = $value->getTimestamp();
		return $this;
	}

    /**
     * @param string $value
     * @return $this
     */
	public function permittedFor($value)
	{
		$this->payload['aud'] = $value;
		return $this;
	}

    /**
     * @return string
     */
	public function getToken()
	{
        $this->logger->debug("YDB start getToken");
        $segments = [];

        $segments[] = $this->urlEncode($this->header);
        $segments[] = $this->urlEncode($this->payload);
        $segments[] = $this->urlEncode($this->sign(implode('.', $segments)));

        return implode('.', $segments);
	}

    /**
     * @param string
     * @return string
     */
	public function sign($input)
	{
        $this->logger->debug("YDB start sign");
        if (class_exists(LegacyRSA::class))
        {
            $this->logger->debug("YDB: LegacyRSA exist");
            $rsa = new LegacyRSA;
            $rsa->loadKey($this->privateKey);
            $rsa->setHash('sha256');
            $rsa->setMGFHash('sha256');
            $rsa->setSignatureMode(LegacyRSA::SIGNATURE_PSS);
        }
        else
        {
            $this->logger->debug("YDB: LegacyRSA not exist");
            $rsa = PublicKeyLoader::load($this->privateKey);
            $rsa->withPadding(RSA::SIGNATURE_PSS);
        }
        $this->logger->debug("YDB loaded RSA ".get_class($rsa));
        $output  = $rsa->sign($input);
        $this->logger->debug("YDB singed token");
        return $output;
	}

    /**
     * @param array $value
     * @return string
     */
	public function jsonEncode($value)
	{
		return json_encode($value, JSON_UNESCAPED_SLASHES);
	}

    /**
     * @param string|array $value
     * @return string
     */
	public function urlEncode($value)
    {
    	if (is_array($value))
    	{
    		$value = $this->jsonEncode($value);
    	}
        return str_replace('=', '', strtr(base64_encode($value), '+/', '-_'));
    }
}
