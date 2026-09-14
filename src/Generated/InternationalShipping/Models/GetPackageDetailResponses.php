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
 * This type defines the response container of the <b>getPackage</b> method.
*/
class GetPackageDetailResponses implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var GetPackageDetailResponsesData|null $packageDetail This container returns the details for the specified package.
    */
    private ?GetPackageDetailResponsesData $packageDetail = null;
    
    /**
     * Instantiates a new GetPackageDetailResponses and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetPackageDetailResponses
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetPackageDetailResponses {
        return new GetPackageDetailResponses();
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
            'packageDetail' => fn(ParseNode $n) => $o->setPackageDetail($n->getObjectValue([GetPackageDetailResponsesData::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the packageDetail property value. This container returns the details for the specified package.
     * @return GetPackageDetailResponsesData|null
    */
    public function getPackageDetail(): ?GetPackageDetailResponsesData {
        return $this->packageDetail;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('packageDetail', $this->getPackageDetail());
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
     * Sets the packageDetail property value. This container returns the details for the specified package.
     * @param GetPackageDetailResponsesData|null $value Value to set for the packageDetail property.
    */
    public function setPackageDetail(?GetPackageDetailResponsesData $value): void {
        $this->packageDetail = $value;
    }

}
