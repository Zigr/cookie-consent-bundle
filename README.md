# Cookie Consent bundle for Symfony 6.4

Based on [Harborn-digital Cookie Consent Bundle](https://github.com/Harborn-digital/cookie-consent-bundle) and adapted to meet [Symfony 6.4](https://symfony.com/releases/6.4) requirements.
As well as [PHP Unit 9](https://phpunit.de/documentation.html) [testing](https://docs.phpunit.de/en/9.6/)

## Installation

### Step 1: Download using composer
In a Symfony application run this command to install and integrate Cookie Consent bundle in your application:
```bash
composer require zigr/connectholland_cookie-consent-bundle-fork
```

### Step 2: Go futher on [Original Bundle Installation Page](https://github.com/Harborn-digital/cookie-consent-bundle)

### Step 3:
There should be the following files:

./config/packages/ch_cookie_consent.yaml
As per configuration after Step 2 above.

./config/bundles.php
```php
...
ConnectHolland\CookieConsentBundle\CHCookieConsentBundle::class => ['all' => true],
```

./config/packages/framework.yaml:
```yaml
framework:
    annotations: false
```

 config/routes/ch_cookie_consent.yaml
```yaml
ch_cookie_consent:
    resource: "@CHCookieConsentBundle/Resources/config/routing.yaml"
```
### Step 4(optional):
If you choose to log cookie consent to db when configuring Step 2, then

```bash
./bin/console doctrine:schema:update --complete --dump-sql
```
and perform migration for log table creation.
