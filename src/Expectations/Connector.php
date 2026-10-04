<?php

declare(strict_types=1);

use Pest\Arch\Contracts\ArchExpectation;
use Pest\Expectation;
use Saloon\Http\BaseResource;
use Saloon\Http\Connector;

expect()->extend(
    'toBeSaloonConnector',
    fn (): ArchExpectation => $this->toExtend(Connector::class)
);

expect()->extend(
    'toHaveDefaultHeaders',
    fn (): ArchExpectation => $this->toHaveMethod('defaultHeaders')
);

expect()->extend(
    'toHaveDefaultConfig',
    fn (): ArchExpectation => $this->toHaveMethod('defaultConfig')
);

expect()->extend(
    'toHaveBaseUrl',
    fn (): ArchExpectation => $this->toHaveMethod('resolveBaseUrl')
);

expect()->extend(
    'toUseCustomResponse',
    fn (): ArchExpectation => $this->toHaveMethod('resolveResponseClass')
);

expect()->extend(
    'toHaveCustomFailureDetection',
    fn (): ArchExpectation => $this->toHaveMethod('hasRequestFailed')
);

expect()->extend(
    'toHaveCustomException',
    fn (): ArchExpectation => $this->toHaveMethod('getRequestException')
);

expect()->extend(
    'toHaveDefaultAuth',
    function (): Expectation {
        $class = lawmanExpectationClassName($this->value);

        expect(lawmanMethodIsDeclaredOn($class, 'defaultAuth'))->toBeTrue();

        return $this;
    }
);

expect()->extend(
    'toHaveDefaultOauthConfig',
    function (): Expectation {
        $class = lawmanExpectationClassName($this->value);

        expect(lawmanMethodIsDeclaredOn($class, 'defaultOauthConfig'))->toBeTrue();

        return $this;
    }
);

expect()->extend(
    'toBeSaloonResource',
    fn (): ArchExpectation => $this->toExtend(BaseResource::class)
);

expect()->extend(
    'toHaveBootMethod',
    function (): Expectation {
        $class = lawmanExpectationClassName($this->value);

        expect(lawmanMethodIsDeclaredOn($class, 'boot'))->toBeTrue();

        return $this;
    }
);

expect()->extend(
    'toHandlePsrRequest',
    function (): Expectation {
        $class = lawmanExpectationClassName($this->value);

        expect(lawmanMethodIsDeclaredOn($class, 'handlePsrRequest'))->toBeTrue();

        return $this;
    }
);

expect()->extend(
    'toHaveDefaultSender',
    function (): Expectation {
        $class = lawmanExpectationClassName($this->value);

        expect(lawmanMethodIsDeclaredOn($class, 'defaultSender'))->toBeTrue();

        return $this;
    }
);
