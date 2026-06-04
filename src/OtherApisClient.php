<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

declare(strict_types=1);

namespace EBay\OtherApis;

use EBay\OtherApis\Clients\Rest\EdeliveryInternationalShippingClient;
use EBay\OtherApis\Clients\Rest\IdentityClient;
use EBay\OtherApis\Clients\Rest\TranslationClient;
use EBay\OtherApis\Clients\Rest\VeroClient;
use EBay\OtherApis\Configuration\KiotaAuthProvider;
use EBay\OtherApis\Configuration\OtherApisConfiguration;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\EdeliveryInternationalShippingApiClient;
use EBay\OtherApis\Generated\Identity\IdentityApiClient;
use EBay\OtherApis\Generated\Translation\TranslationApiClient;
use EBay\OtherApis\Generated\Vero\VeroApiClient;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\HandlerStack;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

final class OtherApisClient
{
    public readonly IdentityClient $identity;
    public readonly TranslationClient $translation;
    public readonly VeroClient $vero;
    public readonly EdeliveryInternationalShippingClient $edeliveryInternationalShipping;

    public function __construct(OtherApisConfiguration $config, ?GuzzleClient $guzzle = null)
    {
        $guzzle ??= $this->buildGuzzleClient($config);

        $auth = new BaseBearerTokenAuthenticationProvider(new KiotaAuthProvider($config));

        $identityAdapter = new GuzzleRequestAdapter($auth, guzzleClient: $guzzle);
        $identityAdapter->setBaseUrl($config->identityBaseUrl);
        $this->identity = new IdentityClient(new IdentityApiClient($identityAdapter), $config);

        $translationAdapter = new GuzzleRequestAdapter($auth, guzzleClient: $guzzle);
        $translationAdapter->setBaseUrl($config->translationBaseUrl);
        $this->translation = new TranslationClient(new TranslationApiClient($translationAdapter), $config);

        $veroAdapter = new GuzzleRequestAdapter($auth, guzzleClient: $guzzle);
        $veroAdapter->setBaseUrl($config->veroBaseUrl);
        $this->vero = new VeroClient(new VeroApiClient($veroAdapter), $config);

        $edisAdapter = new GuzzleRequestAdapter($auth, guzzleClient: $guzzle);
        $edisAdapter->setBaseUrl($config->edeliveryInternationalShippingBaseUrl);
        $this->edeliveryInternationalShipping = new EdeliveryInternationalShippingClient(
            new EdeliveryInternationalShippingApiClient($edisAdapter),
            $config,
        );
    }

    private function buildGuzzleClient(OtherApisConfiguration $config): GuzzleClient
    {
        $options = [
            'timeout'         => 30,
            'connect_timeout' => 5,
        ];

        if ($config->diagnosticLogging) {
            $stack = HandlerStack::create();
            $stack->push(static function (callable $handler): callable {
                return static function (RequestInterface $request, array $options) use ($handler) {
                    return $handler($request, $options)->then(
                        static function (ResponseInterface $response) use ($request): ResponseInterface {
                            $status = $response->getStatusCode();
                            if ($status < 200 || $status >= 300) {
                                $body = (string) $response->getBody();
                                fwrite(STDERR, sprintf(
                                    "[OtherApisSDK] %s %s => HTTP %d\n%s\n",
                                    $request->getMethod(),
                                    str_replace(["\r", "\n"], ' ', (string) $request->getUri()),
                                    $status,
                                    $body,
                                ));
                                // Rewind so downstream can still read the body.
                                $response->getBody()->rewind();
                            }
                            return $response;
                        }
                    );
                };
            }, 'diagnostic_logging');
            $options['handler'] = $stack;
        }

        return new GuzzleClient($options);
    }
}
