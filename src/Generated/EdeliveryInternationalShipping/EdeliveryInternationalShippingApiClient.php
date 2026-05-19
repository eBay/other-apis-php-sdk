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

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping;

use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Actual_costs\Actual_costsRequestBuilder;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Address_preference\Address_preferenceRequestBuilder;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Agents\AgentsRequestBuilder;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Battery_qualifications\Battery_qualificationsRequestBuilder;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Bundle\BundleRequestBuilder;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Complaint\ComplaintRequestBuilder;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Consign_preference\Consign_preferenceRequestBuilder;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Dropoff_sites\Dropoff_sitesRequestBuilder;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Handover_sheet\Handover_sheetRequestBuilder;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Labels\LabelsRequestBuilder;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Package\PackageRequestBuilder;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Services\ServicesRequestBuilder;
use EBay\OtherApis\Generated\EdeliveryInternationalShipping\Tracking\TrackingRequestBuilder;
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
class EdeliveryInternationalShippingApiClient extends BaseRequestBuilder 
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
     * Instantiates a new EdeliveryInternationalShippingApiClient and sets the default values.
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
