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

    public function toUseDigestAuthentication(): Expectation;

    public function toUseMultipleAuthenticators(): Expectation;

    public function toUseAccessTokenAuthentication(): Expectation;

    public function toUseNullAuthentication(): Expectation;

    public function toBeSaloonAuthenticator(): Expectation;

    public function toBeOAuthAuthenticator(): Expectation;

    public function toHaveCaching(): Expectation;

    public function toBeSaloonConnector(): Expectation;

    public function toHaveDefaultHeaders(): Expectation;

    public function toHaveDefaultConfig(): Expectation;

    public function toHaveBaseUrl(): Expectation;

    public function toUseCustomResponse(): Expectation;

    public function toHaveCustomFailureDetection(): Expectation;

    public function toHaveCustomException(): Expectation;

    public function toHaveDefaultAuth(): Expectation;

    public function toHaveDefaultOauthConfig(): Expectation;

    public function toBeSaloonResource(): Expectation;

    public function toHaveBootMethod(): Expectation;

    public function toHandlePsrRequest(): Expectation;

    public function toHaveDefaultSender(): Expectation;

    public function toUsePagedPagination(): Expectation;

    public function toUseOffsetPagination(): Expectation;

    public function toUseCursorPagination(): Expectation;

    public function toUseCustomPagination(): Expectation;

    public function toUseRequestPagination(): Expectation;

    public function toBePaginatable(): Expectation;

    public function toUseAsyncPagination(): Expectation;

    public function toMapPaginatedResponseItems(): Expectation;

    public function toBeSaloonPlugin(): Expectation;

    public function toSetConnectTimeout(int $connectTimeout = 10): Expectation;

    public function toSetRequestTimeout(int $requestTimeout = 30): Expectation;

    public function toBeTriedAgainOnFailure(int $tries = 3): Expectation;

    public function toHaveRetryInterval(int $retryInterval = 500): Expectation;

    public function toUseExponentialBackoff(): Expectation;

    public function toThrowOnMaxTries(): Expectation;

    public function toHaveDefaultDelay(): Expectation;

    public function toHaveCustomRetryHandling(): Expectation;

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

    public function toSendQueryRequest(): Expectation;

    public function toHaveJsonBody(): Expectation;

    public function toHaveMultipartBody(): Expectation;

    public function toHaveXmlBody(): Expectation;

    public function toHaveFormBody(): Expectation;

    public function toHaveStringBody(): Expectation;

    public function toHaveStreamBody(): Expectation;

    public function toHaveDefaultQuery(): Expectation;

    public function toHaveDefaultBody(): Expectation;

    public function toBeSoloRequest(): Expectation;

    public function toHaveEndpoint(): Expectation;

    public function toCreateDtoFromResponse(): Expectation;

    public function toBeSaloonResponse(): Expectation;

    public function toBeSaloonDto(): Expectation;

    public function toBeRequestMiddleware(): Expectation;

    public function toBeResponseMiddleware(): Expectation;

    public function toUseAcceptsJsonTrait(): Expectation;

    public function toUseAlwaysThrowOnErrorsTrait(): Expectation;

    public function toUseTimeoutTrait(): Expectation;

    public function toUseAuthorisationCodeGrantTrait(): Expectation;

    public function toUseClientCredentialsGrantTrait(): Expectation;

    public function toUseClientCredentialsBasicAuthGrantTrait(): Expectation;

    public function toUseRequiresAuthTrait(): Expectation;

    public function toUseApiVersionTrait(): Expectation;
}
