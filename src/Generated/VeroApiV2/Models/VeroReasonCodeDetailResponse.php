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

namespace EBay\OtherApis\Generated\VeroApiV2\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the response fields returned in the <b>getVeroReasonCodes</b> method.
*/
class VeroReasonCodeDetailResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<VeroReasonCode>|null $veroReasonCodes This array provides a list of VeRO reason codes, including the ID, marketplace, and brief and detailed descriptions of each code, based on the input criteria.<br><br>If a <b>X-EBAY-C-MARKETPLACE-ID</b> header is used, only VeRO reason codes for that specific site will be returned. If this header is not included, all reason codes for all sites are returned.
    */
    private ?array $veroReasonCodes = null;
    
    /**
     * Instantiates a new VeroReasonCodeDetailResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VeroReasonCodeDetailResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VeroReasonCodeDetailResponse {
        return new VeroReasonCodeDetailResponse();
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
            'veroReasonCodes' => fn(ParseNode $n) => $o->setVeroReasonCodes($n->getCollectionOfObjectValues([VeroReasonCode::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the veroReasonCodes property value. This array provides a list of VeRO reason codes, including the ID, marketplace, and brief and detailed descriptions of each code, based on the input criteria.<br><br>If a <b>X-EBAY-C-MARKETPLACE-ID</b> header is used, only VeRO reason codes for that specific site will be returned. If this header is not included, all reason codes for all sites are returned.
     * @return array<VeroReasonCode>|null
    */
    public function getVeroReasonCodes(): ?array {
        return $this->veroReasonCodes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('veroReasonCodes', $this->getVeroReasonCodes());
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
     * Sets the veroReasonCodes property value. This array provides a list of VeRO reason codes, including the ID, marketplace, and brief and detailed descriptions of each code, based on the input criteria.<br><br>If a <b>X-EBAY-C-MARKETPLACE-ID</b> header is used, only VeRO reason codes for that specific site will be returned. If this header is not included, all reason codes for all sites are returned.
     * @param array<VeroReasonCode>|null $value Value to set for the veroReasonCodes property.
    */
    public function setVeroReasonCodes(?array $value): void {
        $this->veroReasonCodes = $value;
    }

}
