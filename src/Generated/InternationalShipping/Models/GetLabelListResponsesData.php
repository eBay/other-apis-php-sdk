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
 * This type defines the response payload for the <b>getLabels</b> method.
*/
class GetLabelListResponsesData implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $base64Str The base 64 string value for a shipping label.<br><br>This string value can be converted to a PDF file.
    */
    private ?string $base64Str = null;
    
    /**
     * @var string|null $message A message relating to the status of the shipping label retrieval process.
    */
    private ?string $message = null;
    
    /**
     * @var string|null $resultCode The result code detailing the results of the shipping label retrieval process.<br><br>For example, a result code of <code>200</code> indicates that at least one shipping label was successfully retrieved.
    */
    private ?string $resultCode = null;
    
    /**
     * @var string|null $trackingNumber The tracking number for which the shipping label is being retrieved.
    */
    private ?string $trackingNumber = null;
    
    /**
     * Instantiates a new GetLabelListResponsesData and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetLabelListResponsesData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetLabelListResponsesData {
        return new GetLabelListResponsesData();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the base64Str property value. The base 64 string value for a shipping label.<br><br>This string value can be converted to a PDF file.
     * @return string|null
    */
    public function getBase64Str(): ?string {
        return $this->base64Str;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'base64Str' => fn(ParseNode $n) => $o->setBase64Str($n->getStringValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'resultCode' => fn(ParseNode $n) => $o->setResultCode($n->getStringValue()),
            'trackingNumber' => fn(ParseNode $n) => $o->setTrackingNumber($n->getStringValue()),
        ];
    }

    /**
     * Gets the message property value. A message relating to the status of the shipping label retrieval process.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the resultCode property value. The result code detailing the results of the shipping label retrieval process.<br><br>For example, a result code of <code>200</code> indicates that at least one shipping label was successfully retrieved.
     * @return string|null
    */
    public function getResultCode(): ?string {
        return $this->resultCode;
    }

    /**
     * Gets the trackingNumber property value. The tracking number for which the shipping label is being retrieved.
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
        $writer->writeStringValue('base64Str', $this->getBase64Str());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeStringValue('resultCode', $this->getResultCode());
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
     * Sets the base64Str property value. The base 64 string value for a shipping label.<br><br>This string value can be converted to a PDF file.
     * @param string|null $value Value to set for the base64Str property.
    */
    public function setBase64Str(?string $value): void {
        $this->base64Str = $value;
    }

    /**
     * Sets the message property value. A message relating to the status of the shipping label retrieval process.
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the resultCode property value. The result code detailing the results of the shipping label retrieval process.<br><br>For example, a result code of <code>200</code> indicates that at least one shipping label was successfully retrieved.
     * @param string|null $value Value to set for the resultCode property.
    */
    public function setResultCode(?string $value): void {
        $this->resultCode = $value;
    }

    /**
     * Sets the trackingNumber property value. The tracking number for which the shipping label is being retrieved.
     * @param string|null $value Value to set for the trackingNumber property.
    */
    public function setTrackingNumber(?string $value): void {
        $this->trackingNumber = $value;
    }

}
