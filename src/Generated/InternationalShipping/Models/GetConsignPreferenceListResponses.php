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

namespace EBay\OtherApis\Generated\InternationalShipping\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the response container of the <b>getConsignPreferences</b> method.
*/
class GetConsignPreferenceListResponses implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var GetConsignPreferenceListResponsesData|null $consignPreferenceList This type defines the fields associated with a seller's consign addresses, including the location and contact details of the address, as well as its unique identifiers.
    */
    private ?GetConsignPreferenceListResponsesData $consignPreferenceList = null;
    
    /**
     * Instantiates a new GetConsignPreferenceListResponses and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetConsignPreferenceListResponses
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetConsignPreferenceListResponses {
        return new GetConsignPreferenceListResponses();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the consignPreferenceList property value. This type defines the fields associated with a seller's consign addresses, including the location and contact details of the address, as well as its unique identifiers.
     * @return GetConsignPreferenceListResponsesData|null
    */
    public function getConsignPreferenceList(): ?GetConsignPreferenceListResponsesData {
        return $this->consignPreferenceList;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'consignPreferenceList' => fn(ParseNode $n) => $o->setConsignPreferenceList($n->getObjectValue([GetConsignPreferenceListResponsesData::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('consignPreferenceList', $this->getConsignPreferenceList());
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
     * Sets the consignPreferenceList property value. This type defines the fields associated with a seller's consign addresses, including the location and contact details of the address, as well as its unique identifiers.
     * @param GetConsignPreferenceListResponsesData|null $value Value to set for the consignPreferenceList property.
    */
    public function setConsignPreferenceList(?GetConsignPreferenceListResponsesData $value): void {
        $this->consignPreferenceList = $value;
    }

}
