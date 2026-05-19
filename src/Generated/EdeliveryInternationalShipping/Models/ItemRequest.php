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

/**
 * This container specifies information about the items being included in a package.
*/
class ItemRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $buyerId The buyer's eBay user ID.
    */
    private ?string $buyerId = null;
    
    /**
     * @var string|null $buyerTaxId The tax ID for the buyer. The type of Tax ID is specified in the <b>buyerTaxIdType</b> field.
    */
    private ?string $buyerTaxId = null;
    
    /**
     * @var string|null $buyerTaxType The type of tax ID that was supplied by the buyer during the checkout process.
    */
    private ?string $buyerTaxType = null;
    
    /**
     * @var bool|null $ebayCollectAndRemitTax This boolean indicates if the corresponding line item is subject to a 'Collect and Remit' tax that eBay will collect and remit to the proper taxing authority on the buyer's behalf.
    */
    private ?bool $ebayCollectAndRemitTax = null;
    
    /**
     * @var string|null $ebayCollectAndRemitTaxesValue The value of the 'Collect and Remit' tax for the order that the line item belongs to.
    */
    private ?string $ebayCollectAndRemitTaxesValue = null;
    
    /**
     * @var string|null $email The buyer's email address.
    */
    private ?string $email = null;
    
    /**
     * @var string|null $itemTitle The title of the listing.
    */
    private ?string $itemTitle = null;
    
    /**
     * @var string|null $listingId The unique identifier of the eBay listing.<br><br><span class="tablenote"><b>Note:</b> Either a <b>listingId</b> and <b>transactionId</b> pair, or an <b>orderLineItem</b> field is required to identify an order line item.</span>
    */
    private ?string $listingId = null;
    
    /**
     * @var string|null $message A message from the seller to the buyer.
    */
    private ?string $message = null;
    
    /**
     * @var string|null $orderId The unique identifier of the eBay order that the line item belongs to.
    */
    private ?string $orderId = null;
    
    /**
     * @var string|null $orderLineItem The unique identifier of the line item.<br><br><span class="tablenote"><b>Note:</b> Either a <b>listingId</b> and <b>transactionId</b> pair, or an <b>orderLineItem</b> field is required to identify an order line item.<span>
    */
    private ?string $orderLineItem = null;
    
    /**
     * @var string|null $paymentDate The date and time the buyer pays for the order.<br><br><b>Format:</b> <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>
    */
    private ?string $paymentDate = null;
    
    /**
     * @var string|null $payPalEmail The buyer's PayPal email address.
    */
    private ?string $payPalEmail = null;
    
    /**
     * @var string|null $payPalMessage The buyer's PayPal message.
    */
    private ?string $payPalMessage = null;
    
    /**
     * @var int|null $postedQuantity The quantity of the line item that will be shipped with the package. This value can differ from the order quantity in the case of a combined or split shipment.<br><br><b>Min</b>: 1<br><br><b>Max</b>: 999
    */
    private ?int $postedQuantity = null;
    
    /**
     * @var int|null $siteId The unique identifier of the eBay site in which the order occurred.
    */
    private ?int $siteId = null;
    
    /**
     * @var SkuRequest|null $sku This type specifies information relating to the SKU item in a package.
    */
    private ?SkuRequest $sku = null;
    
    /**
     * @var string|null $soldDate The date the item was sold.<br><br><b>Format</b>: <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>
    */
    private ?string $soldDate = null;
    
    /**
     * @var Amount|null $soldPrice This type defines the monetary value of an amount. 
    */
    private ?Amount $soldPrice = null;
    
    /**
     * @var int|null $soldQuantity The quantity of the line item that was sold.
    */
    private ?int $soldQuantity = null;
    
    /**
     * @var string|null $transactionId The unique identifier of the monetary transaction.<br><br><span class="tablenote"><b>Note:</b> Either a <b>listingId</b> and <b>transactionId</b> pair, or an <b>orderLineItem</b> field is required to identify an order line item.</span>
    */
    private ?string $transactionId = null;
    
    /**
     * Instantiates a new ItemRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemRequest {
        return new ItemRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the buyerId property value. The buyer's eBay user ID.
     * @return string|null
    */
    public function getBuyerId(): ?string {
        return $this->buyerId;
    }

    /**
     * Gets the buyerTaxId property value. The tax ID for the buyer. The type of Tax ID is specified in the <b>buyerTaxIdType</b> field.
     * @return string|null
    */
    public function getBuyerTaxId(): ?string {
        return $this->buyerTaxId;
    }

    /**
     * Gets the buyerTaxType property value. The type of tax ID that was supplied by the buyer during the checkout process.
     * @return string|null
    */
    public function getBuyerTaxType(): ?string {
        return $this->buyerTaxType;
    }

    /**
     * Gets the ebayCollectAndRemitTax property value. This boolean indicates if the corresponding line item is subject to a 'Collect and Remit' tax that eBay will collect and remit to the proper taxing authority on the buyer's behalf.
     * @return bool|null
    */
    public function getEbayCollectAndRemitTax(): ?bool {
        return $this->ebayCollectAndRemitTax;
    }

    /**
     * Gets the ebayCollectAndRemitTaxesValue property value. The value of the 'Collect and Remit' tax for the order that the line item belongs to.
     * @return string|null
    */
    public function getEbayCollectAndRemitTaxesValue(): ?string {
        return $this->ebayCollectAndRemitTaxesValue;
    }

    /**
     * Gets the email property value. The buyer's email address.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'buyerId' => fn(ParseNode $n) => $o->setBuyerId($n->getStringValue()),
            'buyerTaxId' => fn(ParseNode $n) => $o->setBuyerTaxId($n->getStringValue()),
            'buyerTaxType' => fn(ParseNode $n) => $o->setBuyerTaxType($n->getStringValue()),
            'ebayCollectAndRemitTax' => fn(ParseNode $n) => $o->setEbayCollectAndRemitTax($n->getBooleanValue()),
            'ebayCollectAndRemitTaxesValue' => fn(ParseNode $n) => $o->setEbayCollectAndRemitTaxesValue($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'itemTitle' => fn(ParseNode $n) => $o->setItemTitle($n->getStringValue()),
            'listingId' => fn(ParseNode $n) => $o->setListingId($n->getStringValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'orderId' => fn(ParseNode $n) => $o->setOrderId($n->getStringValue()),
            'orderLineItem' => fn(ParseNode $n) => $o->setOrderLineItem($n->getStringValue()),
            'paymentDate' => fn(ParseNode $n) => $o->setPaymentDate($n->getStringValue()),
            'payPalEmail' => fn(ParseNode $n) => $o->setPayPalEmail($n->getStringValue()),
            'payPalMessage' => fn(ParseNode $n) => $o->setPayPalMessage($n->getStringValue()),
            'postedQuantity' => fn(ParseNode $n) => $o->setPostedQuantity($n->getIntegerValue()),
            'siteId' => fn(ParseNode $n) => $o->setSiteId($n->getIntegerValue()),
            'sku' => fn(ParseNode $n) => $o->setSku($n->getObjectValue([SkuRequest::class, 'createFromDiscriminatorValue'])),
            'soldDate' => fn(ParseNode $n) => $o->setSoldDate($n->getStringValue()),
            'soldPrice' => fn(ParseNode $n) => $o->setSoldPrice($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'soldQuantity' => fn(ParseNode $n) => $o->setSoldQuantity($n->getIntegerValue()),
            'transactionId' => fn(ParseNode $n) => $o->setTransactionId($n->getStringValue()),
        ];
    }

    /**
     * Gets the itemTitle property value. The title of the listing.
     * @return string|null
    */
    public function getItemTitle(): ?string {
        return $this->itemTitle;
    }

    /**
     * Gets the listingId property value. The unique identifier of the eBay listing.<br><br><span class="tablenote"><b>Note:</b> Either a <b>listingId</b> and <b>transactionId</b> pair, or an <b>orderLineItem</b> field is required to identify an order line item.</span>
     * @return string|null
    */
    public function getListingId(): ?string {
        return $this->listingId;
    }

    /**
     * Gets the message property value. A message from the seller to the buyer.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the orderId property value. The unique identifier of the eBay order that the line item belongs to.
     * @return string|null
    */
    public function getOrderId(): ?string {
        return $this->orderId;
    }

    /**
     * Gets the orderLineItem property value. The unique identifier of the line item.<br><br><span class="tablenote"><b>Note:</b> Either a <b>listingId</b> and <b>transactionId</b> pair, or an <b>orderLineItem</b> field is required to identify an order line item.<span>
     * @return string|null
    */
    public function getOrderLineItem(): ?string {
        return $this->orderLineItem;
    }

    /**
     * Gets the paymentDate property value. The date and time the buyer pays for the order.<br><br><b>Format:</b> <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>
     * @return string|null
    */
    public function getPaymentDate(): ?string {
        return $this->paymentDate;
    }

    /**
     * Gets the payPalEmail property value. The buyer's PayPal email address.
     * @return string|null
    */
    public function getPayPalEmail(): ?string {
        return $this->payPalEmail;
    }

    /**
     * Gets the payPalMessage property value. The buyer's PayPal message.
     * @return string|null
    */
    public function getPayPalMessage(): ?string {
        return $this->payPalMessage;
    }

    /**
     * Gets the postedQuantity property value. The quantity of the line item that will be shipped with the package. This value can differ from the order quantity in the case of a combined or split shipment.<br><br><b>Min</b>: 1<br><br><b>Max</b>: 999
     * @return int|null
    */
    public function getPostedQuantity(): ?int {
        return $this->postedQuantity;
    }

    /**
     * Gets the siteId property value. The unique identifier of the eBay site in which the order occurred.
     * @return int|null
    */
    public function getSiteId(): ?int {
        return $this->siteId;
    }

    /**
     * Gets the sku property value. This type specifies information relating to the SKU item in a package.
     * @return SkuRequest|null
    */
    public function getSku(): ?SkuRequest {
        return $this->sku;
    }

    /**
     * Gets the soldDate property value. The date the item was sold.<br><br><b>Format</b>: <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>
     * @return string|null
    */
    public function getSoldDate(): ?string {
        return $this->soldDate;
    }

    /**
     * Gets the soldPrice property value. This type defines the monetary value of an amount. 
     * @return Amount|null
    */
    public function getSoldPrice(): ?Amount {
        return $this->soldPrice;
    }

    /**
     * Gets the soldQuantity property value. The quantity of the line item that was sold.
     * @return int|null
    */
    public function getSoldQuantity(): ?int {
        return $this->soldQuantity;
    }

    /**
     * Gets the transactionId property value. The unique identifier of the monetary transaction.<br><br><span class="tablenote"><b>Note:</b> Either a <b>listingId</b> and <b>transactionId</b> pair, or an <b>orderLineItem</b> field is required to identify an order line item.</span>
     * @return string|null
    */
    public function getTransactionId(): ?string {
        return $this->transactionId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('buyerId', $this->getBuyerId());
        $writer->writeStringValue('buyerTaxId', $this->getBuyerTaxId());
        $writer->writeStringValue('buyerTaxType', $this->getBuyerTaxType());
        $writer->writeBooleanValue('ebayCollectAndRemitTax', $this->getEbayCollectAndRemitTax());
        $writer->writeStringValue('ebayCollectAndRemitTaxesValue', $this->getEbayCollectAndRemitTaxesValue());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('itemTitle', $this->getItemTitle());
        $writer->writeStringValue('listingId', $this->getListingId());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeStringValue('orderId', $this->getOrderId());
        $writer->writeStringValue('orderLineItem', $this->getOrderLineItem());
        $writer->writeStringValue('paymentDate', $this->getPaymentDate());
        $writer->writeStringValue('payPalEmail', $this->getPayPalEmail());
        $writer->writeStringValue('payPalMessage', $this->getPayPalMessage());
        $writer->writeIntegerValue('postedQuantity', $this->getPostedQuantity());
        $writer->writeIntegerValue('siteId', $this->getSiteId());
        $writer->writeObjectValue('sku', $this->getSku());
        $writer->writeStringValue('soldDate', $this->getSoldDate());
        $writer->writeObjectValue('soldPrice', $this->getSoldPrice());
        $writer->writeIntegerValue('soldQuantity', $this->getSoldQuantity());
        $writer->writeStringValue('transactionId', $this->getTransactionId());
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
     * Sets the buyerId property value. The buyer's eBay user ID.
     * @param string|null $value Value to set for the buyerId property.
    */
    public function setBuyerId(?string $value): void {
        $this->buyerId = $value;
    }

    /**
     * Sets the buyerTaxId property value. The tax ID for the buyer. The type of Tax ID is specified in the <b>buyerTaxIdType</b> field.
     * @param string|null $value Value to set for the buyerTaxId property.
    */
    public function setBuyerTaxId(?string $value): void {
        $this->buyerTaxId = $value;
    }

    /**
     * Sets the buyerTaxType property value. The type of tax ID that was supplied by the buyer during the checkout process.
     * @param string|null $value Value to set for the buyerTaxType property.
    */
    public function setBuyerTaxType(?string $value): void {
        $this->buyerTaxType = $value;
    }

    /**
     * Sets the ebayCollectAndRemitTax property value. This boolean indicates if the corresponding line item is subject to a 'Collect and Remit' tax that eBay will collect and remit to the proper taxing authority on the buyer's behalf.
     * @param bool|null $value Value to set for the ebayCollectAndRemitTax property.
    */
    public function setEbayCollectAndRemitTax(?bool $value): void {
        $this->ebayCollectAndRemitTax = $value;
    }

    /**
     * Sets the ebayCollectAndRemitTaxesValue property value. The value of the 'Collect and Remit' tax for the order that the line item belongs to.
     * @param string|null $value Value to set for the ebayCollectAndRemitTaxesValue property.
    */
    public function setEbayCollectAndRemitTaxesValue(?string $value): void {
        $this->ebayCollectAndRemitTaxesValue = $value;
    }

    /**
     * Sets the email property value. The buyer's email address.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the itemTitle property value. The title of the listing.
     * @param string|null $value Value to set for the itemTitle property.
    */
    public function setItemTitle(?string $value): void {
        $this->itemTitle = $value;
    }

    /**
     * Sets the listingId property value. The unique identifier of the eBay listing.<br><br><span class="tablenote"><b>Note:</b> Either a <b>listingId</b> and <b>transactionId</b> pair, or an <b>orderLineItem</b> field is required to identify an order line item.</span>
     * @param string|null $value Value to set for the listingId property.
    */
    public function setListingId(?string $value): void {
        $this->listingId = $value;
    }

    /**
     * Sets the message property value. A message from the seller to the buyer.
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the orderId property value. The unique identifier of the eBay order that the line item belongs to.
     * @param string|null $value Value to set for the orderId property.
    */
    public function setOrderId(?string $value): void {
        $this->orderId = $value;
    }

    /**
     * Sets the orderLineItem property value. The unique identifier of the line item.<br><br><span class="tablenote"><b>Note:</b> Either a <b>listingId</b> and <b>transactionId</b> pair, or an <b>orderLineItem</b> field is required to identify an order line item.<span>
     * @param string|null $value Value to set for the orderLineItem property.
    */
    public function setOrderLineItem(?string $value): void {
        $this->orderLineItem = $value;
    }

    /**
     * Sets the paymentDate property value. The date and time the buyer pays for the order.<br><br><b>Format:</b> <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>
     * @param string|null $value Value to set for the paymentDate property.
    */
    public function setPaymentDate(?string $value): void {
        $this->paymentDate = $value;
    }

    /**
     * Sets the payPalEmail property value. The buyer's PayPal email address.
     * @param string|null $value Value to set for the payPalEmail property.
    */
    public function setPayPalEmail(?string $value): void {
        $this->payPalEmail = $value;
    }

    /**
     * Sets the payPalMessage property value. The buyer's PayPal message.
     * @param string|null $value Value to set for the payPalMessage property.
    */
    public function setPayPalMessage(?string $value): void {
        $this->payPalMessage = $value;
    }

    /**
     * Sets the postedQuantity property value. The quantity of the line item that will be shipped with the package. This value can differ from the order quantity in the case of a combined or split shipment.<br><br><b>Min</b>: 1<br><br><b>Max</b>: 999
     * @param int|null $value Value to set for the postedQuantity property.
    */
    public function setPostedQuantity(?int $value): void {
        $this->postedQuantity = $value;
    }

    /**
     * Sets the siteId property value. The unique identifier of the eBay site in which the order occurred.
     * @param int|null $value Value to set for the siteId property.
    */
    public function setSiteId(?int $value): void {
        $this->siteId = $value;
    }

    /**
     * Sets the sku property value. This type specifies information relating to the SKU item in a package.
     * @param SkuRequest|null $value Value to set for the sku property.
    */
    public function setSku(?SkuRequest $value): void {
        $this->sku = $value;
    }

    /**
     * Sets the soldDate property value. The date the item was sold.<br><br><b>Format</b>: <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>
     * @param string|null $value Value to set for the soldDate property.
    */
    public function setSoldDate(?string $value): void {
        $this->soldDate = $value;
    }

    /**
     * Sets the soldPrice property value. This type defines the monetary value of an amount. 
     * @param Amount|null $value Value to set for the soldPrice property.
    */
    public function setSoldPrice(?Amount $value): void {
        $this->soldPrice = $value;
    }

    /**
     * Sets the soldQuantity property value. The quantity of the line item that was sold.
     * @param int|null $value Value to set for the soldQuantity property.
    */
    public function setSoldQuantity(?int $value): void {
        $this->soldQuantity = $value;
    }

    /**
     * Sets the transactionId property value. The unique identifier of the monetary transaction.<br><br><span class="tablenote"><b>Note:</b> Either a <b>listingId</b> and <b>transactionId</b> pair, or an <b>orderLineItem</b> field is required to identify an order line item.</span>
     * @param string|null $value Value to set for the transactionId property.
    */
    public function setTransactionId(?string $value): void {
        $this->transactionId = $value;
    }

}
