<?php

declare(strict_types=1);

namespace JonPurvis\Lawman\PHPStan;

use Pest\Expectation;

/** @internal */
interface ExpectationMethods
{
    public function toUseTokenAuthentication(): Expectation;

    public function toUseBasicAuthentication(): Expectation;

    public function toUseCertificateAuthentication(): Expectation;

    public function toUseHeaderAuthentication(): Expectation;

    public function toUseQueryAuthentication(): Expectation;

    public function toHaveCaching(): Expectation;

    public function toBeSaloonConnector(): Expectation;

    public function toHaveDefaultHeaders(): Expectation;

    public function toHaveDefaultConfig(): Expectation;

    public function toHaveBaseUrl(): Expectation;

    public function toUseCustomResponse(): Expectation;

    public function toHaveCustomFailureDetection(): Expectation;

    public function toHaveCustomException(): Expectation;

    public function toUsePagedPagination(): Expectation;

    public function toUseOffsetPagination(): Expectation;

    public function toUseCursorPagination(): Expectation;

    public function toUseCustomPagination(): Expectation;

    public function toUseRequestPagination(): Expectation;

    public function toBeSaloonPlugin(): Expectation;

    public function toSetConnectTimeout(int $connectTimeout = 10): Expectation;

    public function toSetRequestTimeout(int $requestTimeout = 30): Expectation;

    public function toBeTriedAgainOnFailure(int $tries = 3): Expectation;

    public function toHaveRetryInterval(int $retryInterval = 500): Expectation;

    public function toUseExponentialBackoff(): Expectation;

    public function toThrowOnMaxTries(): Expectation;

    public function toHaveRateLimits(): Expectation;

    public function toBeSaloonRequest(): Expectation;

    public function toHaveRequestMethod(): Expectation;

    public function toSendGetRequest(): Expectation;

    public function toSendPostRequest(): Expectation;

    public function toSendHeadRequest(): Expectation;

    public function toSendPutRequest(): Expectation;

    public function toSendPatchRequest(): Expectation;

    public function toSendDeleteRequest(): Expectation;

    public function toSendOptionsRequest(): Expectation;

    public function toSendConnectRequest(): Expectation;

    public function toSendTraceRequest(): Expectation;

    public function toHaveJsonBody(): Expectation;

    public function toHaveMultipartBody(): Expectation;

    public function toHaveXmlBody(): Expectation;

    public function toHaveFormBody(): Expectation;

    public function toHaveStringBody(): Expectation;

    public function toHaveStreamBody(): Expectation;

    public function toHaveDefaultQuery(): Expectation;

    public function toHaveDefaultBody(): Expectation;

    public function toBeSaloonResponse(): Expectation;

    public function toUseAcceptsJsonTrait(): Expectation;

    public function toUseAlwaysThrowOnErrorsTrait(): Expectation;

    public function toUseTimeoutTrait(): Expectation;

    public function toUseAuthorisationCodeGrantTrait(): Expectation;

    public function toUseClientCredentialsGrantTrait(): Expectation;
}
