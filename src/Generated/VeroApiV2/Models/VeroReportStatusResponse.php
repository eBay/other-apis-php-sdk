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
 * This type defines the response fields returned by the <b>getVeroReportItems</b> method.
*/
class VeroReportStatusResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $href The URL to the current page of the VeRO reported item results.
    */
    private ?string $href = null;
    
    /**
     * @var int|null $limit The value of the <b>limit</b> parameter submitted in the request.
    */
    private ?int $limit = null;
    
    /**
     * @var string|null $next The URI for the next page of results. This value is returned if there is an additional page of results to return from the result set.
    */
    private ?string $next = null;
    
    /**
     * @var int|null $offset The value of the <b>offset</b> parameter submitted in the request.
    */
    private ?int $offset = null;
    
    /**
     * @var string|null $prev The URI for the previous page of results. This is returned if there is a previous page of results from the result set.
    */
    private ?string $prev = null;
    
    /**
     * @var array<ReportedItem>|null $reportedItemDetails This array returns the item ID and statuses of the reported items being returned.
    */
    private ?array $reportedItemDetails = null;
    
    /**
     * @var int|null $total This is the total number of records that match the input criteria.
    */
    private ?int $total = null;
    
    /**
     * Instantiates a new VeroReportStatusResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VeroReportStatusResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VeroReportStatusResponse {
        return new VeroReportStatusResponse();
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
            'href' => fn(ParseNode $n) => $o->setHref($n->getStringValue()),
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'next' => fn(ParseNode $n) => $o->setNext($n->getStringValue()),
            'offset' => fn(ParseNode $n) => $o->setOffset($n->getIntegerValue()),
            'prev' => fn(ParseNode $n) => $o->setPrev($n->getStringValue()),
            'reportedItemDetails' => fn(ParseNode $n) => $o->setReportedItemDetails($n->getCollectionOfObjectValues([ReportedItem::class, 'createFromDiscriminatorValue'])),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the href property value. The URL to the current page of the VeRO reported item results.
     * @return string|null
    */
    public function getHref(): ?string {
        return $this->href;
    }

    /**
     * Gets the limit property value. The value of the <b>limit</b> parameter submitted in the request.
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the next property value. The URI for the next page of results. This value is returned if there is an additional page of results to return from the result set.
     * @return string|null
    */
    public function getNext(): ?string {
        return $this->next;
    }

    /**
     * Gets the offset property value. The value of the <b>offset</b> parameter submitted in the request.
     * @return int|null
    */
    public function getOffset(): ?int {
        return $this->offset;
    }

    /**
     * Gets the prev property value. The URI for the previous page of results. This is returned if there is a previous page of results from the result set.
     * @return string|null
    */
    public function getPrev(): ?string {
        return $this->prev;
    }

    /**
     * Gets the reportedItemDetails property value. This array returns the item ID and statuses of the reported items being returned.
     * @return array<ReportedItem>|null
    */
    public function getReportedItemDetails(): ?array {
        return $this->reportedItemDetails;
    }

    /**
     * Gets the total property value. This is the total number of records that match the input criteria.
     * @return int|null
    */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('href', $this->getHref());
        $writer->writeIntegerValue('limit', $this->getLimit());
        $writer->writeStringValue('next', $this->getNext());
        $writer->writeIntegerValue('offset', $this->getOffset());
        $writer->writeStringValue('prev', $this->getPrev());
        $writer->writeCollectionOfObjectValues('reportedItemDetails', $this->getReportedItemDetails());
        $writer->writeIntegerValue('total', $this->getTotal());
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
     * Sets the href property value. The URL to the current page of the VeRO reported item results.
     * @param string|null $value Value to set for the href property.
    */
    public function setHref(?string $value): void {
        $this->href = $value;
    }

    /**
     * Sets the limit property value. The value of the <b>limit</b> parameter submitted in the request.
     * @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value): void {
        $this->limit = $value;
    }

    /**
     * Sets the next property value. The URI for the next page of results. This value is returned if there is an additional page of results to return from the result set.
     * @param string|null $value Value to set for the next property.
    */
    public function setNext(?string $value): void {
        $this->next = $value;
    }

    /**
     * Sets the offset property value. The value of the <b>offset</b> parameter submitted in the request.
     * @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value): void {
        $this->offset = $value;
    }

    /**
     * Sets the prev property value. The URI for the previous page of results. This is returned if there is a previous page of results from the result set.
     * @param string|null $value Value to set for the prev property.
    */
    public function setPrev(?string $value): void {
        $this->prev = $value;
    }

    /**
     * Sets the reportedItemDetails property value. This array returns the item ID and statuses of the reported items being returned.
     * @param array<ReportedItem>|null $value Value to set for the reportedItemDetails property.
    */
    public function setReportedItemDetails(?array $value): void {
        $this->reportedItemDetails = $value;
    }

    /**
     * Sets the total property value. This is the total number of records that match the input criteria.
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->total = $value;
    }

}
