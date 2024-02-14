<img src="art/banner.png">

# Lawman - Your Architectural Enforcer for Saloon API Integrations

---

A PestPHP Plugin for SaloonPHP that helps you enforce architectural rules with your API integrations.
    
## Introduction
Lawman is a PestPHP Plugin for SaloonPHP which allows you to easily write architecture tests for your API integrations
with a focus on them being easy to write and easy to read. After all, if SaloonPHP makes our 
API integrations beautiful, the tests for them should be beautiful too, right?

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
    ->expect('App\Http\Integrations\Intranet\Requests\Request')
    ->toExtend('\Saloon\Http\Request')
    ->toImplement('Saloon\Contracts\Body\HasBody')
    ->toUse('Saloon\Traits\Body\HasFormBody')
    ->toUse('Saloon\Traits\Plugins\AcceptsJson');
```

Lawman makes this test much nicer to read:

```php
test('request')
    ->expect('App\Http\Integrations\Intranet\Requests\Request')
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
    ->expect('App\Http\Integrations\Intranet\Requests\Request')
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
    ->toBeTriedAgainOnFailure()
    ->toHaveRetryInterval()
    ->toUseExponentialBackoff()
```

Lawman makes testing your SaloonPHP API integrations, from an architecture point of view, much
easier to do. Allowing you to see, at a glance, what a test is actually doing. Lawman is a plugin for
PestPHP meaning you can use Lawman Expectations and PestPHP Expectations together, just chain whatever 
you need for your tests!
