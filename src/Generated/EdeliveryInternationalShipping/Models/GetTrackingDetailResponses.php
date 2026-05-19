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

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This container defines the response container for the <b>getTracking</b> method.
*/
class GetTrackingDetailResponses implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<GetTrackingDetailResponsesData>|null $trackingDetails This array returns a list of tracking event details for the specified tracking number.
    */
    private ?array $trackingDetails = null;
    
    /**
     * Instantiates a new GetTrackingDetailResponses and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetTrackingDetailResponses
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetTrackingDetailResponses {
        return new GetTrackingDetailResponses();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'trackingDetails' => fn(ParseNode $n) => $o->setTrackingDetails($n->getCollectionOfObjectValues([GetTrackingDetailResponsesData::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the trackingDetails property value. This array returns a list of tracking event details for the specified tracking number.
     * @return array<GetTrackingDetailResponsesData>|null
    */
    public function getTrackingDetails(): ?array {
        return $this->trackingDetails;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('trackingDetails', $this->getTrackingDetails());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the trackingDetails property value. This array returns a list of tracking event details for the specified tracking number.
     * @param array<GetTrackingDetailResponsesData>|null $value Value to set for the trackingDetails property.
    */
    public function setTrackingDetails(?array $value): void {
        $this->trackingDetails = $value;
    }

}
