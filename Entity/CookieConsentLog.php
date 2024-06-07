<?php

declare(strict_types=1);

/*
 * This file is part of the ConnectHolland CookieConsentBundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\CookieConsentBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;

#[ORM\Entity]
#[ORM\Table(name: 'cookie_consent_log')]
class CookieConsentLog
{

    /**
     * @var int
     */
    #[ORM\Id]
    #[ORM\Column(type: Types::INTEGER)]
    #[ORM\GeneratedValue]
    protected $id;

    /**
     *
     * @var string
     */
    #[ORM\Column(type: Types::STRING, length: 255)]
    protected $ipAddress;

    /**
     *
     * @var string
     */
    #[ORM\Column(type: Types::STRING, length: 255)]
    protected $cookieConsentKey;

    /**
     *
     * @var string
     */
    #[ORM\Column(type: Types::STRING, length: 255)]
    protected $cookieName;

    /**
     *
     * @var string
     */
    #[ORM\Column(type: Types::STRING, length: 255)]
    protected $cookieValue;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var DateTime
     */
    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    protected $timestamp;

    public function getId(): int
    {
        return $this->id;
    }

    public function setIpAddress(string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    public function setCookieConsentKey(string $cookieConsentKey): self
    {
        $this->cookieConsentKey = $cookieConsentKey;

        return $this;
    }

    public function getCookieConsentKey(): string
    {
        return $this->cookieConsentKey;
    }

    public function setCookieName(string $cookieName): self
    {
        $this->cookieName = $cookieName;

        return $this;
    }

    public function getCookieName(): string
    {
        return $this->cookieName;
    }

    public function setCookieValue(string $cookieValue): self
    {
        $this->cookieValue = $cookieValue;

        return $this;
    }

    public function getCookieValue(): string
    {
        return $this->cookieValue;
    }

    public function setTimestamp(DateTime $timestamp): self
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    public function getTimestamp(): DateTime
    {
        return $this->timestamp;
    }
}
