<?php

declare(strict_types=1);

namespace Tests\Fixtures\PHPStan;

use Pest\Expectation;

function lawmanExpectations(Expectation $expectation): void
{
    $expectation
        ->toUseTokenAuthentication()
        ->toUseBasicAuthentication()
        ->toUseCertificateAuthentication()
        ->toUseHeaderAuthentication()
        ->toUseQueryAuthentication()
        ->toHaveCaching()
        ->toBeSaloonConnector()
        ->toHaveDefaultHeaders()
        ->toHaveDefaultConfig()
        ->toHaveBaseUrl()
        ->toUseCustomResponse()
        ->toHaveCustomFailureDetection()
        ->toHaveCustomException()
        ->toUsePagedPagination()
        ->toUseOffsetPagination()
        ->toUseCursorPagination()
        ->toUseCustomPagination()
        ->toUseRequestPagination()
        ->toBeSaloonPlugin()
        ->toSetConnectTimeout(connectTimeout: 3)
        ->toSetRequestTimeout(requestTimeout: 30)
        ->toBeTriedAgainOnFailure(tries: 3)
        ->toHaveRetryInterval(retryInterval: 500)
        ->toUseExponentialBackoff()
        ->toThrowOnMaxTries()
        ->toHaveRateLimits()
        ->toBeSaloonRequest()
        ->toHaveRequestMethod()
        ->toSendGetRequest()
        ->toSendPostRequest()
        ->toSendHeadRequest()
        ->toSendPutRequest()
        ->toSendPatchRequest()
        ->toSendDeleteRequest()
        ->toSendOptionsRequest()
        ->toSendConnectRequest()
        ->toSendTraceRequest()
        ->toHaveJsonBody()
        ->toHaveMultipartBody()
        ->toHaveXmlBody()
        ->toHaveFormBody()
        ->toHaveStringBody()
        ->toHaveStreamBody()
        ->toHaveDefaultQuery()
        ->toHaveDefaultBody()
        ->toBeSaloonResponse()
        ->toUseAcceptsJsonTrait()
        ->toUseAlwaysThrowOnErrorsTrait()
        ->toUseTimeoutTrait()
        ->toUseAuthorisationCodeGrantTrait()
        ->toUseClientCredentialsGrantTrait()
        ->toBeTrue();
}
