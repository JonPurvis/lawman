<p align="center">
    <img src="art/banner.png" alt="Lawman">
    <p align="center">
        <a href="https://github.com/JonPurvis/lawman/actions"><img alt="GitHub Workflow Status (master)" src="https://github.com/JonPurvis/lawman/actions/workflows/tests.yml/badge.svg"></a>
        <a href="https://packagist.org/packages/jonpurvis/lawman"><img alt="Total Downloads" src="https://img.shields.io/packagist/dt/jonpurvis/lawman"></a>
        <a href="https://packagist.org/packages/jonpurvis/lawman"><img alt="Latest Version" src="https://img.shields.io/packagist/v/jonpurvis/lawman"></a>
        <a href="https://packagist.org/packages/jonpurvis/lawman"><img alt="License" src="https://img.shields.io/packagist/l/jonpurvis/lawman"></a>
    </p>
</p>

------
# Lawman - Your Architectural Enforcer for SaloonPHP

A PestPHP Plugin for SaloonPHP that helps you enforce architectural rules with your API integrations.

## Introduction
Lawman is a PestPHP Plugin for SaloonPHP which allows you to easily write architecture tests for your API integrations
with a focus on them being easy to write and easy to read. After all, if SaloonPHP makes our 
API integrations beautiful, the tests for them should be beautiful too, right?

Lawman makes testing your SaloonPHP API integrations, from an architecture point of view, much
easier to do. Allowing you to see, at a glance, what a test is actually doing. Lawman is a plugin for
PestPHP meaning you can use Lawman Expectations and PestPHP Expectations together, just chain whatever
you need for your tests!


## Examples

Let's take a look at how Lawman can help make writing tests easier. 

Let's say we have a Connector class that we want to test, with PestPHP we could do the following:

```php
test('connector')
    ->expect('App\Http\Integrations\Integration\Connector')
    ->toExtend('Saloon\Http\Connector')
    ->toUse('Saloon\Traits\Plugins\AcceptsJson')
    ->toUse('Saloon\Traits\Plugins\AlwaysThrowOnErrors');
```

So that test is ensuring our class extends the base Connector and uses the `AcceptJson` and
`AlwaysThrowOnErrors` traits. Whilst that test works, we could perhaps make it quicker to write
and easier to read, so with Lawman, you can do:

```php
test('connector')
    ->expect('App\Http\Integrations\Integration\Connector')
    ->toBeSaloonConnector()
    ->toUseAcceptsJsonTrait()
    ->toUseAlwaysThrowOnErrorsTrait();
```

Next up, let's take a Request test that we have:

```php
test('request')
    ->expect('App\Http\Integrations\Integration\Requests\Request')
    ->toExtend('\Saloon\Http\Request')
    ->toImplement('Saloon\Contracts\Body\HasBody')
    ->toUse('Saloon\Traits\Body\HasFormBody')
    ->toUse('Saloon\Traits\Plugins\AcceptsJson');
```

Lawman makes this test much nicer to read:

```php
test('request')
    ->expect('App\Http\Integrations\Integration\Requests\Request')
    ->toBeSaloonRequest()
    ->toSendPostRequest()
    ->toHaveFormBody()
    ->toUseAcceptsJsonTrait();
```

What about if we want to test our Connector has an Authentication method? Lawman makes this
easy to do, it even works with multi auth:

```php
test('connector')
    ->expect('App\Http\Integrations\Integration\Connector')
    ->toBeSaloonConnector()
    ->toUseCertificateAuthentication()
    ->toUseTokenAuthentication();
```

Lawman also has Expectations for the Pagination, Cache and Rate Limit Plugins:

```php
test('request')
    ->expect('App\Http\Integrations\Integration\Requests\Request')
    ->toBeSaloonRequest()
    ->toSendPostRequest()
    ->toUsePagedPagination()
    ->toHaveCaching()
    ->toHaveRateLimits()
```

Maybe our Connector has some Retry instructions that we want to test. Again, with Lawman, it's 
as simple as:

```php
test('connector')
    ->expect('App\Http\Integrations\Integration\Connector')
    ->toBeSaloonConnector()
    ->toBeTriedAgainOnFailure(tries: 3)
    ->toHaveRetryInterval(retryInterval: 1500)
    ->toUseExponentialBackoff()
```

Maybe our Connector is for an API that tends to be quite slow, so we increased some timeouts:

```php
test('connector')
    ->expect('App\Http\Integrations\Integration\Connector')
    ->toBeSaloonConnector()
    ->toSetConnectTimeout(connectTimeout: 30)
    ->toSetRequestTimeout(requestTimeout: 60)
    ->toUseExponentialBackoff()
```

## PHPStan Support

Lawman ships with a PHPStan extension so expectations like `toBeSaloonConnector()` and
`toSendPostRequest()` are recognised when you analyse your test suite.

If your project uses [`phpstan/extension-installer`](https://github.com/phpstan/extension-installer),
the extension is registered automatically. Otherwise, add the following to your `phpstan.neon`:

```neon
includes:
    - vendor/jonpurvis/lawman/extension.neon
```

## Contributing

Contributions to the package are more than welcome - open an Issue or submit a Pull Request. Please see [CONTRIBUTING.md](CONTRIBUTING.md). If you add an Expectation, include a new Fixture and a test for it.

To report a security vulnerability, please see [SECURITY.md](SECURITY.md).

## Useful Links

- [Lawman Documentation](https://docs.saloon.dev/installable-plugins/lawman)
- [SaloonPHP](https://docs.saloon.dev/)
- [PestPHP](https://pestphp.com/)
  
