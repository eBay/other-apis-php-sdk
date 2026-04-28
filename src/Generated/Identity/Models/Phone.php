<?php

namespace EBay\OtherApis\Generated\Identity\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The type that defines the fields for the details of a phone.
*/
class Phone implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $countryCode The two-letter <a href="https://www.iso.org/iso-3166-country-codes.html">ISO 3166</a> standard of the country to which the phone number belongs.
    */
    private ?string $countryCode = null;
    
    /**
     * @var string|null $number The numeric string representing the phone number.
    */
    private ?string $number = null;
    
    /**
     * @var string|null $phoneType The type of phone service. <br /><br /><b> Valid Values: </b> MOBILE or LAND_LINE  <br /><br />Code so that your app gracefully handles any future changes to this list.
    */
    private ?string $phoneType = null;
    
    /**
     * Instantiates a new Phone and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Phone
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Phone {
        return new Phone();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the countryCode property value. The two-letter <a href="https://www.iso.org/iso-3166-country-codes.html">ISO 3166</a> standard of the country to which the phone number belongs.
     * @return string|null
    */
    public function getCountryCode(): ?string {
        return $this->countryCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'countryCode' => fn(ParseNode $n) => $o->setCountryCode($n->getStringValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            'phoneType' => fn(ParseNode $n) => $o->setPhoneType($n->getStringValue()),
        ];
    }

    /**
     * Gets the number property value. The numeric string representing the phone number.
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->number;
    }

    /**
     * Gets the phoneType property value. The type of phone service. <br /><br /><b> Valid Values: </b> MOBILE or LAND_LINE  <br /><br />Code so that your app gracefully handles any future changes to this list.
     * @return string|null
    */
    public function getPhoneType(): ?string {
        return $this->phoneType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('countryCode', $this->getCountryCode());
        $writer->writeStringValue('number', $this->getNumber());
        $writer->writeStringValue('phoneType', $this->getPhoneType());
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
     * Sets the countryCode property value. The two-letter <a href="https://www.iso.org/iso-3166-country-codes.html">ISO 3166</a> standard of the country to which the phone number belongs.
     * @param string|null $value Value to set for the countryCode property.
    */
    public function setCountryCode(?string $value): void {
        $this->countryCode = $value;
    }

    /**
     * Sets the number property value. The numeric string representing the phone number.
     * @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value): void {
        $this->number = $value;
    }

    /**
     * Sets the phoneType property value. The type of phone service. <br /><br /><b> Valid Values: </b> MOBILE or LAND_LINE  <br /><br />Code so that your app gracefully handles any future changes to this list.
     * @param string|null $value Value to set for the phoneType property.
    */
    public function setPhoneType(?string $value): void {
        $this->phoneType = $value;
    }

}
