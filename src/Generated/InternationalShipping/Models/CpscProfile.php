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
 * This type defines the fields that provide information about a CPSC profile.
*/
class CpscProfile implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $cpscProfileId The unique identifier of the CPSC profile assigned by eDIS.<br><br>This ID can be used to associate a SKU with this CPSC profile when creating a package.
    */
    private ?string $cpscProfileId = null;
    
    /**
     * @var string|null $name The name of the CPSC profile.
    */
    private ?string $name = null;
    
    /**
     * @var CpscTypeEnum|null $type This enum returns the type of the CPSC profile.<br><br><b>Valid values:</b><ul><li><code>REF_PGA</code></li><li><code>FULL_PGA</code></li></ul>
    */
    private ?CpscTypeEnum $type = null;
    
    /**
     * Instantiates a new CpscProfile and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CpscProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CpscProfile {
        return new CpscProfile();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the cpscProfileId property value. The unique identifier of the CPSC profile assigned by eDIS.<br><br>This ID can be used to associate a SKU with this CPSC profile when creating a package.
     * @return string|null
    */
    public function getCpscProfileId(): ?string {
        return $this->cpscProfileId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cpscProfileId' => fn(ParseNode $n) => $o->setCpscProfileId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(CpscTypeEnum::class)),
        ];
    }

    /**
     * Gets the name property value. The name of the CPSC profile.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the type property value. This enum returns the type of the CPSC profile.<br><br><b>Valid values:</b><ul><li><code>REF_PGA</code></li><li><code>FULL_PGA</code></li></ul>
     * @return CpscTypeEnum|null
    */
    public function getType(): ?CpscTypeEnum {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('cpscProfileId', $this->getCpscProfileId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeEnumValue('type', $this->getType());
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
     * Sets the cpscProfileId property value. The unique identifier of the CPSC profile assigned by eDIS.<br><br>This ID can be used to associate a SKU with this CPSC profile when creating a package.
     * @param string|null $value Value to set for the cpscProfileId property.
    */
    public function setCpscProfileId(?string $value): void {
        $this->cpscProfileId = $value;
    }

    /**
     * Sets the name property value. The name of the CPSC profile.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the type property value. This enum returns the type of the CPSC profile.<br><br><b>Valid values:</b><ul><li><code>REF_PGA</code></li><li><code>FULL_PGA</code></li></ul>
     * @param CpscTypeEnum|null $value Value to set for the type property.
    */
    public function setType(?CpscTypeEnum $value): void {
        $this->type = $value;
    }

}
