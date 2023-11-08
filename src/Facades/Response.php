<?php

namespace Rainte\PHP\Facades;

/**
 * @method string __toString()
 * @method __clone()
 * @method static prepare(Symfony\Component\HttpFoundation\Request $request)
 * @method static sendHeaders()
 * @method static sendContent()
 * @method static send()
 * @method static setContent(?string $content)
 * @method string|false getContent()
 * @method static setProtocolVersion(string $version)
 * @method string getProtocolVersion()
 * @method static setStatusCode(int $code, ?string $text = null)
 * @method int getStatusCode()
 * @method static setCharset(string $charset)
 * @method ?string getCharset()
 * @method bool isCacheable()
 * @method bool isFresh()
 * @method bool isValidateable()
 * @method static setPrivate()
 * @method static setPublic()
 * @method static setImmutable(bool $immutable = true)
 * @method bool isImmutable()
 * @method bool mustRevalidate()
 * @method ?DateTimeInterface getDate()
 * @method static setDate(DateTimeInterface $date)
 * @method int getAge()
 * @method static expire()
 * @method ?DateTimeInterface getExpires()
 * @method static setExpires(?DateTimeInterface $date = null)
 * @method ?int getMaxAge()
 * @method static setMaxAge(int $value)
 * @method static setStaleIfError(int $value)
 * @method static setStaleWhileRevalidate(int $value)
 * @method static setSharedMaxAge(int $value)
 * @method ?int getTtl()
 * @method static setTtl(int $seconds)
 * @method static setClientTtl(int $seconds)
 * @method ?DateTimeInterface getLastModified()
 * @method static setLastModified(?DateTimeInterface $date = null)
 * @method ?string getEtag()
 * @method static setEtag(?string $etag = null, bool $weak = false)
 * @method static setCache(array $options)
 * @method static setNotModified()
 * @method bool hasVary()
 * @method array getVary()
 * @method static setVary(array|string $headers, bool $replace = true)
 * @method bool isNotModified(Symfony\Component\HttpFoundation\Request $request)
 * @method bool isInvalid()
 * @method bool isInformational()
 * @method bool isSuccessful()
 * @method bool isRedirection()
 * @method bool isClientError()
 * @method bool isServerError()
 * @method bool isOk()
 * @method bool isForbidden()
 * @method bool isNotFound()
 * @method bool isRedirect(?string $location = null)
 * @method bool isEmpty()
 * @method static void closeOutputBuffers(int $targetLevel, bool $flush)
 * @method void setContentSafe(bool $safe = true)
 *
 * @see \Symfony\Component\HttpFoundation\Response
 */
class Response extends \Rainte\PHP\Facades\AbstractFacade
{
    /**
     * @inheritdoc
     */
    protected $class = \Rainte\PHP\Providers\ResponseProvider::class;
}
