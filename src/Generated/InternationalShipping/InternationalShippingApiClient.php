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

namespace EBay\OtherApis\Generated\InternationalShipping;

use EBay\OtherApis\Generated\InternationalShipping\Actual_costs\Actual_costsRequestBuilder;
use EBay\OtherApis\Generated\InternationalShipping\Address_preference\Address_preferenceRequestBuilder;
use EBay\OtherApis\Generated\InternationalShipping\Agents\AgentsRequestBuilder;
use EBay\OtherApis\Generated\InternationalShipping\Battery_qualifications\Battery_qualificationsRequestBuilder;
use EBay\OtherApis\Generated\InternationalShipping\Bundle\BundleRequestBuilder;
use EBay\OtherApis\Generated\InternationalShipping\Complaint\ComplaintRequestBuilder;
use EBay\OtherApis\Generated\InternationalShipping\Consign_preference\Consign_preferenceRequestBuilder;
use EBay\OtherApis\Generated\InternationalShipping\Cpsc_profiles\Cpsc_profilesRequestBuilder;
use EBay\OtherApis\Generated\InternationalShipping\Dropoff_sites\Dropoff_sitesRequestBuilder;
use EBay\OtherApis\Generated\InternationalShipping\Handover_sheet\Handover_sheetRequestBuilder;
use EBay\OtherApis\Generated\InternationalShipping\Labels\LabelsRequestBuilder;
use EBay\OtherApis\Generated\InternationalShipping\Package\PackageRequestBuilder;
use EBay\OtherApis\Generated\InternationalShipping\Services\ServicesRequestBuilder;
use EBay\OtherApis\Generated\InternationalShipping\Tracking\TrackingRequestBuilder;
use Microsoft\Kiota\Abstractions\ApiClientBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Serialization\Form\FormParseNodeFactory;
use Microsoft\Kiota\Serialization\Form\FormSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Json\JsonParseNodeFactory;
use Microsoft\Kiota\Serialization\Json\JsonSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Multipart\MultipartSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Text\TextParseNodeFactory;
use Microsoft\Kiota\Serialization\Text\TextSerializationWriterFactory;

/**
 * The main entry point of the SDK, exposes the configuration and the fluent API.
*/
class InternationalShippingApiClient extends BaseRequestBuilder 
{
    /**
     * The actual_costs property
    */
    public function actual_costs(): Actual_costsRequestBuilder {
        return new Actual_costsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The address_preference property
    */
    public function address_preference(): Address_preferenceRequestBuilder {
        return new Address_preferenceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The agents property
    */
    public function agents(): AgentsRequestBuilder {
        return new AgentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The battery_qualifications property
    */
    public function battery_qualifications(): Battery_qualificationsRequestBuilder {
        return new Battery_qualificationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The bundle property
    */
    public function bundle(): BundleRequestBuilder {
        return new BundleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The complaint property
    */
    public function complaint(): ComplaintRequestBuilder {
        return new ComplaintRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The consign_preference property
    */
    public function consign_preference(): Consign_preferenceRequestBuilder {
        return new Consign_preferenceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The cpsc_profiles property
    */
    public function cpsc_profiles(): Cpsc_profilesRequestBuilder {
        return new Cpsc_profilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The dropoff_sites property
    */
    public function dropoff_sites(): Dropoff_sitesRequestBuilder {
        return new Dropoff_sitesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The handover_sheet property
    */
    public function handover_sheet(): Handover_sheetRequestBuilder {
        return new Handover_sheetRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The labels property
    */
    public function labels(): LabelsRequestBuilder {
        return new LabelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The package property
    */
    public function package(): PackageRequestBuilder {
        return new PackageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The services property
    */
    public function services(): ServicesRequestBuilder {
        return new ServicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The tracking property
    */
    public function tracking(): TrackingRequestBuilder {
        return new TrackingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new InternationalShippingApiClient and sets the default values.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}');
        ApiClientBuilder::registerDefaultSerializer(JsonSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(TextSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(FormSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(MultipartSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(JsonParseNodeFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(TextParseNodeFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(FormParseNodeFactory::class);
        if (empty($this->requestAdapter->getBaseUrl())) {
            $this->requestAdapter->setBaseUrl('https://api.ebay.com{basePath}');
        }
        $this->pathParameters['baseurl'] = $this->requestAdapter->getBaseUrl();
    }

}
