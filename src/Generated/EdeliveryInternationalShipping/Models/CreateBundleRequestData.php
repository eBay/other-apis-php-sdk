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
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type defines the information used to create a bundle.
*/
class CreateBundleRequestData implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $consignPreferenceId The unique identifier of the consign address to be associated with the bundle.<br><br>This ID can be retrieved using the <a href="/api-docs/sell/edelivery_international_shipping/resources/consign_preference/methods/getConsignPreferences" target="_blank">getConsignPreferences</a> method.
    */
    private ?string $consignPreferenceId = null;
    
    /**
     * @var array<string>|null $trackingNumbers This array specifies the tracking numbers of the packages to be included in the bundle.<br><br>Tracking numbers are returned when creating a package through the <a href="/api-docs/sell/edelivery_international_shipping/resources/package/methods/createPackage" target="_blank">createPackage</a> method.
    */
    private ?array $trackingNumbers = null;
    
    /**
     * Instantiates a new CreateBundleRequestData and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateBundleRequestData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateBundleRequestData {
        return new CreateBundleRequestData();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the consignPreferenceId property value. The unique identifier of the consign address to be associated with the bundle.<br><br>This ID can be retrieved using the <a href="/api-docs/sell/edelivery_international_shipping/resources/consign_preference/methods/getConsignPreferences" target="_blank">getConsignPreferences</a> method.
     * @return string|null
    */
    public function getConsignPreferenceId(): ?string {
        return $this->consignPreferenceId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'consignPreferenceId' => fn(ParseNode $n) => $o->setConsignPreferenceId($n->getStringValue()),
            'trackingNumbers' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTrackingNumbers($val);
            },
        ];
    }

    /**
     * Gets the trackingNumbers property value. This array specifies the tracking numbers of the packages to be included in the bundle.<br><br>Tracking numbers are returned when creating a package through the <a href="/api-docs/sell/edelivery_international_shipping/resources/package/methods/createPackage" target="_blank">createPackage</a> method.
     * @return array<string>|null
    */
    public function getTrackingNumbers(): ?array {
        return $this->trackingNumbers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('consignPreferenceId', $this->getConsignPreferenceId());
        $writer->writeCollectionOfPrimitiveValues('trackingNumbers', $this->getTrackingNumbers());
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
     * Sets the consignPreferenceId property value. The unique identifier of the consign address to be associated with the bundle.<br><br>This ID can be retrieved using the <a href="/api-docs/sell/edelivery_international_shipping/resources/consign_preference/methods/getConsignPreferences" target="_blank">getConsignPreferences</a> method.
     * @param string|null $value Value to set for the consignPreferenceId property.
    */
    public function setConsignPreferenceId(?string $value): void {
        $this->consignPreferenceId = $value;
    }

    /**
     * Sets the trackingNumbers property value. This array specifies the tracking numbers of the packages to be included in the bundle.<br><br>Tracking numbers are returned when creating a package through the <a href="/api-docs/sell/edelivery_international_shipping/resources/package/methods/createPackage" target="_blank">createPackage</a> method.
     * @param array<string>|null $value Value to set for the trackingNumbers property.
    */
    public function setTrackingNumbers(?array $value): void {
        $this->trackingNumbers = $value;
    }

}
