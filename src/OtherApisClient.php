<?php

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
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class OtherApisClient
{
    public readonly IdentityClient $identity;
    public readonly TranslationClient $translation;
    public readonly VeroClient $vero;
    public readonly EdeliveryInternationalShippingClient $edeliveryInternationalShipping;

    public function __construct(OtherApisConfiguration $config, ?GuzzleClient $guzzle = null)
    {
        $guzzle ??= new GuzzleClient([
            'timeout'         => 30,
            'connect_timeout' => 5,
        ]);

        $auth = new BaseBearerTokenAuthenticationProvider(new KiotaAuthProvider($config));

        $identityAdapter = new GuzzleRequestAdapter($auth, client: $guzzle);
        $identityAdapter->setBaseUrl($config->identityBaseUrl);
        $this->identity = new IdentityClient(new IdentityApiClient($identityAdapter));

        $translationAdapter = new GuzzleRequestAdapter($auth, client: $guzzle);
        $translationAdapter->setBaseUrl($config->translationBaseUrl);
        $this->translation = new TranslationClient(new TranslationApiClient($translationAdapter));

        $veroAdapter = new GuzzleRequestAdapter($auth, client: $guzzle);
        $veroAdapter->setBaseUrl($config->veroBaseUrl);
        $this->vero = new VeroClient(new VeroApiClient($veroAdapter));

        $edisAdapter = new GuzzleRequestAdapter($auth, client: $guzzle);
        $edisAdapter->setBaseUrl($config->edeliveryInternationalShippingBaseUrl);
        $this->edeliveryInternationalShipping = new EdeliveryInternationalShippingClient(
            new EdeliveryInternationalShippingApiClient($edisAdapter)
        );
    }
}
