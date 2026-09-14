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
 * This type defines the response containers of the <b>getActualCost</b> method.
*/
class GetActualCostResponses implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<GetActualCostResponsesData>|null $actualCosts This array returns a list of actual costs associated with the packages matching the input criteria.
    */
    private ?array $actualCosts = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * Instantiates a new GetActualCostResponses and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetActualCostResponses
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetActualCostResponses {
        return new GetActualCostResponses();
    }

    /**
     * Gets the actualCosts property value. This array returns a list of actual costs associated with the packages matching the input criteria.
     * @return array<GetActualCostResponsesData>|null
    */
    public function getActualCosts(): ?array {
        return $this->actualCosts;
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
            'actualCosts' => fn(ParseNode $n) => $o->setActualCosts($n->getCollectionOfObjectValues([GetActualCostResponsesData::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('actualCosts', $this->getActualCosts());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actualCosts property value. This array returns a list of actual costs associated with the packages matching the input criteria.
     * @param array<GetActualCostResponsesData>|null $value Value to set for the actualCosts property.
    */
    public function setActualCosts(?array $value): void {
        $this->actualCosts = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

}
