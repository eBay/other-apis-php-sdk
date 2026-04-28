<?php

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type specifies the tracking event details for the specified tracking number.
*/
class GetTrackingDetailResponsesData implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $city The city code in which the tracking event occurred.<br><br>See <a href="https://www.edisebay.com/open/development-guide-detail?id=36" target="_blank">商户API地址编码主数据</a> for valid city codes.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
    */
    private ?string $city = null;
    
    /**
     * @var string|null $country The two-letter ISO 3166 country code where the tracking event occurred.
    */
    private ?string $country = null;
    
    /**
     * @var string|null $descriptionEn The English description of the tracking event.
    */
    private ?string $descriptionEn = null;
    
    /**
     * @var string|null $descriptionZh The Chinese description of the tracking event.
    */
    private ?string $descriptionZh = null;
    
    /**
     * @var string|null $district The district code where the tracking event occurred.<br><br>See <a href="https://www.edisebay.com/open/development-guide-detail?id=36" target="_blank">商户API地址编码主数据</a> for valid district codes.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
    */
    private ?string $district = null;
    
    /**
     * @var string|null $eventPostalCode The postal code of where the tracking event occurred.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
    */
    private ?string $eventPostalCode = null;
    
    /**
     * @var string|null $eventTime This timestamp the time and date the tracking event occurred.
    */
    private ?string $eventTime = null;
    
    /**
     * @var string|null $province The province code where the tracking event occurred.<br><br>See <a href="https://www.edisebay.com/open/development-guide-detail?id=36" target="_blank">商户API地址编码主数据</a> for province district codes.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
    */
    private ?string $province = null;
    
    /**
     * @var string|null $status The status of the shipment.
    */
    private ?string $status = null;
    
    /**
     * @var string|null $trackingNumber The tracking number specified in the request.
    */
    private ?string $trackingNumber = null;
    
    /**
     * Instantiates a new GetTrackingDetailResponsesData and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetTrackingDetailResponsesData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetTrackingDetailResponsesData {
        return new GetTrackingDetailResponsesData();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the city property value. The city code in which the tracking event occurred.<br><br>See <a href="https://www.edisebay.com/open/development-guide-detail?id=36" target="_blank">商户API地址编码主数据</a> for valid city codes.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the country property value. The two-letter ISO 3166 country code where the tracking event occurred.
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * Gets the descriptionEn property value. The English description of the tracking event.
     * @return string|null
    */
    public function getDescriptionEn(): ?string {
        return $this->descriptionEn;
    }

    /**
     * Gets the descriptionZh property value. The Chinese description of the tracking event.
     * @return string|null
    */
    public function getDescriptionZh(): ?string {
        return $this->descriptionZh;
    }

    /**
     * Gets the district property value. The district code where the tracking event occurred.<br><br>See <a href="https://www.edisebay.com/open/development-guide-detail?id=36" target="_blank">商户API地址编码主数据</a> for valid district codes.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
     * @return string|null
    */
    public function getDistrict(): ?string {
        return $this->district;
    }

    /**
     * Gets the eventPostalCode property value. The postal code of where the tracking event occurred.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
     * @return string|null
    */
    public function getEventPostalCode(): ?string {
        return $this->eventPostalCode;
    }

    /**
     * Gets the eventTime property value. This timestamp the time and date the tracking event occurred.
     * @return string|null
    */
    public function getEventTime(): ?string {
        return $this->eventTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'city' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'descriptionEn' => fn(ParseNode $n) => $o->setDescriptionEn($n->getStringValue()),
            'descriptionZh' => fn(ParseNode $n) => $o->setDescriptionZh($n->getStringValue()),
            'district' => fn(ParseNode $n) => $o->setDistrict($n->getStringValue()),
            'eventPostalCode' => fn(ParseNode $n) => $o->setEventPostalCode($n->getStringValue()),
            'eventTime' => fn(ParseNode $n) => $o->setEventTime($n->getStringValue()),
            'province' => fn(ParseNode $n) => $o->setProvince($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'trackingNumber' => fn(ParseNode $n) => $o->setTrackingNumber($n->getStringValue()),
        ];
    }

    /**
     * Gets the province property value. The province code where the tracking event occurred.<br><br>See <a href="https://www.edisebay.com/open/development-guide-detail?id=36" target="_blank">商户API地址编码主数据</a> for province district codes.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
     * @return string|null
    */
    public function getProvince(): ?string {
        return $this->province;
    }

    /**
     * Gets the status property value. The status of the shipment.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the trackingNumber property value. The tracking number specified in the request.
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
        $writer->writeStringValue('city', $this->getCity());
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeStringValue('descriptionEn', $this->getDescriptionEn());
        $writer->writeStringValue('descriptionZh', $this->getDescriptionZh());
        $writer->writeStringValue('district', $this->getDistrict());
        $writer->writeStringValue('eventPostalCode', $this->getEventPostalCode());
        $writer->writeStringValue('eventTime', $this->getEventTime());
        $writer->writeStringValue('province', $this->getProvince());
        $writer->writeStringValue('status', $this->getStatus());
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
     * Sets the city property value. The city code in which the tracking event occurred.<br><br>See <a href="https://www.edisebay.com/open/development-guide-detail?id=36" target="_blank">商户API地址编码主数据</a> for valid city codes.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->city = $value;
    }

    /**
     * Sets the country property value. The two-letter ISO 3166 country code where the tracking event occurred.
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->country = $value;
    }

    /**
     * Sets the descriptionEn property value. The English description of the tracking event.
     * @param string|null $value Value to set for the descriptionEn property.
    */
    public function setDescriptionEn(?string $value): void {
        $this->descriptionEn = $value;
    }

    /**
     * Sets the descriptionZh property value. The Chinese description of the tracking event.
     * @param string|null $value Value to set for the descriptionZh property.
    */
    public function setDescriptionZh(?string $value): void {
        $this->descriptionZh = $value;
    }

    /**
     * Sets the district property value. The district code where the tracking event occurred.<br><br>See <a href="https://www.edisebay.com/open/development-guide-detail?id=36" target="_blank">商户API地址编码主数据</a> for valid district codes.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
     * @param string|null $value Value to set for the district property.
    */
    public function setDistrict(?string $value): void {
        $this->district = $value;
    }

    /**
     * Sets the eventPostalCode property value. The postal code of where the tracking event occurred.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
     * @param string|null $value Value to set for the eventPostalCode property.
    */
    public function setEventPostalCode(?string $value): void {
        $this->eventPostalCode = $value;
    }

    /**
     * Sets the eventTime property value. This timestamp the time and date the tracking event occurred.
     * @param string|null $value Value to set for the eventTime property.
    */
    public function setEventTime(?string $value): void {
        $this->eventTime = $value;
    }

    /**
     * Sets the province property value. The province code where the tracking event occurred.<br><br>See <a href="https://www.edisebay.com/open/development-guide-detail?id=36" target="_blank">商户API地址编码主数据</a> for province district codes.<br><br><span class="tablenote"><b>Note:</b> This field is always returned, but will show as null or have an empty value if not defined/applicable.</span>
     * @param string|null $value Value to set for the province property.
    */
    public function setProvince(?string $value): void {
        $this->province = $value;
    }

    /**
     * Sets the status property value. The status of the shipment.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the trackingNumber property value. The tracking number specified in the request.
     * @param string|null $value Value to set for the trackingNumber property.
    */
    public function setTrackingNumber(?string $value): void {
        $this->trackingNumber = $value;
    }

}
