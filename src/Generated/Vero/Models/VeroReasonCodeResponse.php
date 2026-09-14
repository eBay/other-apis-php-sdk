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

namespace EBay\OtherApis\Generated\Vero\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the response payload of the <b>getVeroReasonCode</b> method.
*/
class VeroReasonCodeResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var MarketplaceIdEnum|null $marketplaceId The eBay site for which reason code details are returned.
    */
    private ?MarketplaceIdEnum $marketplaceId = null;
    
    /**
     * @var ReasonCodeDetailType|null $reasonCodeDetails This container includes both brief and detailed text descriptions for the VeRO program intellectual property right infringement reason, as well as the ID for the reason code
    */
    private ?ReasonCodeDetailType $reasonCodeDetails = null;
    
    /**
     * Instantiates a new VeroReasonCodeResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VeroReasonCodeResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VeroReasonCodeResponse {
        return new VeroReasonCodeResponse();
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
            'marketplaceId' => fn(ParseNode $n) => $o->setMarketplaceId($n->getEnumValue(MarketplaceIdEnum::class)),
            'reasonCodeDetails' => fn(ParseNode $n) => $o->setReasonCodeDetails($n->getObjectValue([ReasonCodeDetailType::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the marketplaceId property value. The eBay site for which reason code details are returned.
     * @return MarketplaceIdEnum|null
    */
    public function getMarketplaceId(): ?MarketplaceIdEnum {
        return $this->marketplaceId;
    }

    /**
     * Gets the reasonCodeDetails property value. This container includes both brief and detailed text descriptions for the VeRO program intellectual property right infringement reason, as well as the ID for the reason code
     * @return ReasonCodeDetailType|null
    */
    public function getReasonCodeDetails(): ?ReasonCodeDetailType {
        return $this->reasonCodeDetails;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('marketplaceId', $this->getMarketplaceId());
        $writer->writeObjectValue('reasonCodeDetails', $this->getReasonCodeDetails());
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
     * Sets the marketplaceId property value. The eBay site for which reason code details are returned.
     * @param MarketplaceIdEnum|null $value Value to set for the marketplaceId property.
    */
    public function setMarketplaceId(?MarketplaceIdEnum $value): void {
        $this->marketplaceId = $value;
    }

    /**
     * Sets the reasonCodeDetails property value. This container includes both brief and detailed text descriptions for the VeRO program intellectual property right infringement reason, as well as the ID for the reason code
     * @param ReasonCodeDetailType|null $value Value to set for the reasonCodeDetails property.
    */
    public function setReasonCodeDetails(?ReasonCodeDetailType $value): void {
        $this->reasonCodeDetails = $value;
    }

}
