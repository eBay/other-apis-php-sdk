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
 * This type specifies the information included in a complaint request.
*/
class AddComplaintRequestData implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $affectedPackages This array specifies a list of packages, specified by their <b>packageId</b>, affected by the issue causing the complaint.<br><br>Package ID values are returned when creating a package through the <a href="/api-docs/sell/edelivery_international_shipping/resources/package/methods/createPackage" target="_blank">createPackage</a> method<br><br>This array is required if the complaint being filed is for a missing package.
    */
    private ?array $affectedPackages = null;
    
    /**
     * @var string|null $complaintDate The date in which the issue associated with the complaint occurred.<br><br><b>Format:</b> <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code> 
    */
    private ?string $complaintDate = null;
    
    /**
     * @var string|null $complaintReason This string specifies the reason the complaint was filed.<br><br><b>Max length</b>: 200 characters
    */
    private ?string $complaintReason = null;
    
    /**
     * @var string|null $complaintType The type of complaint being filed.<br><br><b>Valid values</b>:<ul><li><code>ABNORMAL_COLLECTION_COMPLAINT</code></li><li><code>LOST_PACKAGE_COMPLAINT</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:ComplaintTypeEnum'>eBay API documentation</a>
    */
    private ?string $complaintType = null;
    
    /**
     * @var int|null $preferenceId The unique identifier of the address associated with the complaint.<br><br>This field is required if the complain being filed is associated with a specific address.
    */
    private ?int $preferenceId = null;
    
    /**
     * @var string|null $remark A remark to the seller themselves.
    */
    private ?string $remark = null;
    
    /**
     * Instantiates a new AddComplaintRequestData and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AddComplaintRequestData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AddComplaintRequestData {
        return new AddComplaintRequestData();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the affectedPackages property value. This array specifies a list of packages, specified by their <b>packageId</b>, affected by the issue causing the complaint.<br><br>Package ID values are returned when creating a package through the <a href="/api-docs/sell/edelivery_international_shipping/resources/package/methods/createPackage" target="_blank">createPackage</a> method<br><br>This array is required if the complaint being filed is for a missing package.
     * @return array<string>|null
    */
    public function getAffectedPackages(): ?array {
        return $this->affectedPackages;
    }

    /**
     * Gets the complaintDate property value. The date in which the issue associated with the complaint occurred.<br><br><b>Format:</b> <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code> 
     * @return string|null
    */
    public function getComplaintDate(): ?string {
        return $this->complaintDate;
    }

    /**
     * Gets the complaintReason property value. This string specifies the reason the complaint was filed.<br><br><b>Max length</b>: 200 characters
     * @return string|null
    */
    public function getComplaintReason(): ?string {
        return $this->complaintReason;
    }

    /**
     * Gets the complaintType property value. The type of complaint being filed.<br><br><b>Valid values</b>:<ul><li><code>ABNORMAL_COLLECTION_COMPLAINT</code></li><li><code>LOST_PACKAGE_COMPLAINT</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:ComplaintTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getComplaintType(): ?string {
        return $this->complaintType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'affectedPackages' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAffectedPackages($val);
            },
            'complaintDate' => fn(ParseNode $n) => $o->setComplaintDate($n->getStringValue()),
            'complaintReason' => fn(ParseNode $n) => $o->setComplaintReason($n->getStringValue()),
            'complaintType' => fn(ParseNode $n) => $o->setComplaintType($n->getStringValue()),
            'preferenceId' => fn(ParseNode $n) => $o->setPreferenceId($n->getIntegerValue()),
            'remark' => fn(ParseNode $n) => $o->setRemark($n->getStringValue()),
        ];
    }

    /**
     * Gets the preferenceId property value. The unique identifier of the address associated with the complaint.<br><br>This field is required if the complain being filed is associated with a specific address.
     * @return int|null
    */
    public function getPreferenceId(): ?int {
        return $this->preferenceId;
    }

    /**
     * Gets the remark property value. A remark to the seller themselves.
     * @return string|null
    */
    public function getRemark(): ?string {
        return $this->remark;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('affectedPackages', $this->getAffectedPackages());
        $writer->writeStringValue('complaintDate', $this->getComplaintDate());
        $writer->writeStringValue('complaintReason', $this->getComplaintReason());
        $writer->writeStringValue('complaintType', $this->getComplaintType());
        $writer->writeIntegerValue('preferenceId', $this->getPreferenceId());
        $writer->writeStringValue('remark', $this->getRemark());
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
     * Sets the affectedPackages property value. This array specifies a list of packages, specified by their <b>packageId</b>, affected by the issue causing the complaint.<br><br>Package ID values are returned when creating a package through the <a href="/api-docs/sell/edelivery_international_shipping/resources/package/methods/createPackage" target="_blank">createPackage</a> method<br><br>This array is required if the complaint being filed is for a missing package.
     * @param array<string>|null $value Value to set for the affectedPackages property.
    */
    public function setAffectedPackages(?array $value): void {
        $this->affectedPackages = $value;
    }

    /**
     * Sets the complaintDate property value. The date in which the issue associated with the complaint occurred.<br><br><b>Format:</b> <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code> 
     * @param string|null $value Value to set for the complaintDate property.
    */
    public function setComplaintDate(?string $value): void {
        $this->complaintDate = $value;
    }

    /**
     * Sets the complaintReason property value. This string specifies the reason the complaint was filed.<br><br><b>Max length</b>: 200 characters
     * @param string|null $value Value to set for the complaintReason property.
    */
    public function setComplaintReason(?string $value): void {
        $this->complaintReason = $value;
    }

    /**
     * Sets the complaintType property value. The type of complaint being filed.<br><br><b>Valid values</b>:<ul><li><code>ABNORMAL_COLLECTION_COMPLAINT</code></li><li><code>LOST_PACKAGE_COMPLAINT</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/edelivery_international_shipping/types/api:ComplaintTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the complaintType property.
    */
    public function setComplaintType(?string $value): void {
        $this->complaintType = $value;
    }

    /**
     * Sets the preferenceId property value. The unique identifier of the address associated with the complaint.<br><br>This field is required if the complain being filed is associated with a specific address.
     * @param int|null $value Value to set for the preferenceId property.
    */
    public function setPreferenceId(?int $value): void {
        $this->preferenceId = $value;
    }

    /**
     * Sets the remark property value. A remark to the seller themselves.
     * @param string|null $value Value to set for the remark property.
    */
    public function setRemark(?string $value): void {
        $this->remark = $value;
    }

}
