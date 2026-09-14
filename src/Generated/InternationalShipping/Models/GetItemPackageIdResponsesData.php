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
 * This type returns information on the packages being retrieved based on the specified line item ID. 
*/
class GetItemPackageIdResponsesData implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $packageId The unique identifier of the package.
    */
    private ?string $packageId = null;
    
    /**
     * @var PackageStatusEnum|null $packageStatus The current status of the package.
    */
    private ?PackageStatusEnum $packageStatus = null;
    
    /**
     * @var string|null $trackingNumber The tracking number of the package.
    */
    private ?string $trackingNumber = null;
    
    /**
     * Instantiates a new GetItemPackageIdResponsesData and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetItemPackageIdResponsesData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetItemPackageIdResponsesData {
        return new GetItemPackageIdResponsesData();
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
            'packageId' => fn(ParseNode $n) => $o->setPackageId($n->getStringValue()),
            'packageStatus' => fn(ParseNode $n) => $o->setPackageStatus($n->getEnumValue(PackageStatusEnum::class)),
            'trackingNumber' => fn(ParseNode $n) => $o->setTrackingNumber($n->getStringValue()),
        ];
    }

    /**
     * Gets the packageId property value. The unique identifier of the package.
     * @return string|null
    */
    public function getPackageId(): ?string {
        return $this->packageId;
    }

    /**
     * Gets the packageStatus property value. The current status of the package.
     * @return PackageStatusEnum|null
    */
    public function getPackageStatus(): ?PackageStatusEnum {
        return $this->packageStatus;
    }

    /**
     * Gets the trackingNumber property value. The tracking number of the package.
     * @return string|null
    */
    public function getTrackingNumber(): ?string {
        return $this->trackingNumber;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('packageId', $this->getPackageId());
        $writer->writeEnumValue('packageStatus', $this->getPackageStatus());
        $writer->writeStringValue('trackingNumber', $this->getTrackingNumber());
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
     * Sets the packageId property value. The unique identifier of the package.
     * @param string|null $value Value to set for the packageId property.
    */
    public function setPackageId(?string $value): void {
        $this->packageId = $value;
    }

    /**
     * Sets the packageStatus property value. The current status of the package.
     * @param PackageStatusEnum|null $value Value to set for the packageStatus property.
    */
    public function setPackageStatus(?PackageStatusEnum $value): void {
        $this->packageStatus = $value;
    }

    /**
     * Sets the trackingNumber property value. The tracking number of the package.
     * @param string|null $value Value to set for the trackingNumber property.
    */
    public function setTrackingNumber(?string $value): void {
        $this->trackingNumber = $value;
    }

}
