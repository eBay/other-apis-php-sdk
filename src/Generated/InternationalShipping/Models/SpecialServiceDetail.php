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
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type defines the special service details available for a package.
*/
class SpecialServiceDetail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $insuranceFee The insurance fee, if applicable, on the package.<br><br>The insurance amount and currency are consistent with the currency of the destination country
    */
    private ?string $insuranceFee = null;
    
    /**
     * @var string|null $packagingType The package type.<br><br><b>Valid values</b>:<ul><li><code>PAK</code> (limited weight ≤ 2.5KG)</li><li><code>PACKAGE</code> (limited weight 68KG)</li></ul>
    */
    private ?string $packagingType = null;
    
    /**
     * @var string|null $signatureType The signature type, if applicable, for the package.<br><br><b>Valid values</b>:<ul><li><code>ISR</code> (Indirect Signature Required)</li><li><code>DSR</code> (Direct Signature Required)</li><li><code>ASR</code> (Adult Signature Required)</li></ul>
    */
    private ?string $signatureType = null;
    
    /**
     * @var array<string>|null $specialServiceTypes Any special service types supported for the package.<br><br> For example, <code>SATURDAY_DELIVERY</code> indicates that the item is eligible for Saturday delivery.
    */
    private ?array $specialServiceTypes = null;
    
    /**
     * Instantiates a new SpecialServiceDetail and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SpecialServiceDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SpecialServiceDetail {
        return new SpecialServiceDetail();
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
            'insuranceFee' => fn(ParseNode $n) => $o->setInsuranceFee($n->getStringValue()),
            'packagingType' => fn(ParseNode $n) => $o->setPackagingType($n->getStringValue()),
            'signatureType' => fn(ParseNode $n) => $o->setSignatureType($n->getStringValue()),
            'specialServiceTypes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSpecialServiceTypes($val);
            },
        ];
    }

    /**
     * Gets the insuranceFee property value. The insurance fee, if applicable, on the package.<br><br>The insurance amount and currency are consistent with the currency of the destination country
     * @return string|null
    */
    public function getInsuranceFee(): ?string {
        return $this->insuranceFee;
    }

    /**
     * Gets the packagingType property value. The package type.<br><br><b>Valid values</b>:<ul><li><code>PAK</code> (limited weight ≤ 2.5KG)</li><li><code>PACKAGE</code> (limited weight 68KG)</li></ul>
     * @return string|null
    */
    public function getPackagingType(): ?string {
        return $this->packagingType;
    }

    /**
     * Gets the signatureType property value. The signature type, if applicable, for the package.<br><br><b>Valid values</b>:<ul><li><code>ISR</code> (Indirect Signature Required)</li><li><code>DSR</code> (Direct Signature Required)</li><li><code>ASR</code> (Adult Signature Required)</li></ul>
     * @return string|null
    */
    public function getSignatureType(): ?string {
        return $this->signatureType;
    }

    /**
     * Gets the specialServiceTypes property value. Any special service types supported for the package.<br><br> For example, <code>SATURDAY_DELIVERY</code> indicates that the item is eligible for Saturday delivery.
     * @return array<string>|null
    */
    public function getSpecialServiceTypes(): ?array {
        return $this->specialServiceTypes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('insuranceFee', $this->getInsuranceFee());
        $writer->writeStringValue('packagingType', $this->getPackagingType());
        $writer->writeStringValue('signatureType', $this->getSignatureType());
        $writer->writeCollectionOfPrimitiveValues('specialServiceTypes', $this->getSpecialServiceTypes());
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
     * Sets the insuranceFee property value. The insurance fee, if applicable, on the package.<br><br>The insurance amount and currency are consistent with the currency of the destination country
     * @param string|null $value Value to set for the insuranceFee property.
    */
    public function setInsuranceFee(?string $value): void {
        $this->insuranceFee = $value;
    }

    /**
     * Sets the packagingType property value. The package type.<br><br><b>Valid values</b>:<ul><li><code>PAK</code> (limited weight ≤ 2.5KG)</li><li><code>PACKAGE</code> (limited weight 68KG)</li></ul>
     * @param string|null $value Value to set for the packagingType property.
    */
    public function setPackagingType(?string $value): void {
        $this->packagingType = $value;
    }

    /**
     * Sets the signatureType property value. The signature type, if applicable, for the package.<br><br><b>Valid values</b>:<ul><li><code>ISR</code> (Indirect Signature Required)</li><li><code>DSR</code> (Direct Signature Required)</li><li><code>ASR</code> (Adult Signature Required)</li></ul>
     * @param string|null $value Value to set for the signatureType property.
    */
    public function setSignatureType(?string $value): void {
        $this->signatureType = $value;
    }

    /**
     * Sets the specialServiceTypes property value. Any special service types supported for the package.<br><br> For example, <code>SATURDAY_DELIVERY</code> indicates that the item is eligible for Saturday delivery.
     * @param array<string>|null $value Value to set for the specialServiceTypes property.
    */
    public function setSpecialServiceTypes(?array $value): void {
        $this->specialServiceTypes = $value;
    }

}
