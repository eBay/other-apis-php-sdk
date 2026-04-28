<?php

namespace EBay\OtherApis\Generated\Translation\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This is the base type of the <b>translate</b> method response payload.
*/
class TranslateResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $from The enumeration value indicates the language of the input text. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/translation/types/api:LanguageEnum'>eBay API documentation</a>
    */
    private ?string $from = null;
    
    /**
     * @var string|null $to The enumeration value indicates the language of the translated text. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/translation/types/api:LanguageEnum'>eBay API documentation</a>
    */
    private ?string $to = null;
    
    /**
     * @var array<Translation>|null $translations An array showing the input and translated text. Only one input string can be translated at this time. Support for multiple continuous text strings is expected in the future.
    */
    private ?array $translations = null;
    
    /**
     * Instantiates a new TranslateResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TranslateResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TranslateResponse {
        return new TranslateResponse();
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
            'from' => fn(ParseNode $n) => $o->setFrom($n->getStringValue()),
            'to' => fn(ParseNode $n) => $o->setTo($n->getStringValue()),
            'translations' => fn(ParseNode $n) => $o->setTranslations($n->getCollectionOfObjectValues([Translation::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the from property value. The enumeration value indicates the language of the input text. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/translation/types/api:LanguageEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getFrom(): ?string {
        return $this->from;
    }

    /**
     * Gets the to property value. The enumeration value indicates the language of the translated text. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/translation/types/api:LanguageEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getTo(): ?string {
        return $this->to;
    }

    /**
     * Gets the translations property value. An array showing the input and translated text. Only one input string can be translated at this time. Support for multiple continuous text strings is expected in the future.
     * @return array<Translation>|null
    */
    public function getTranslations(): ?array {
        return $this->translations;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('from', $this->getFrom());
        $writer->writeStringValue('to', $this->getTo());
        $writer->writeCollectionOfObjectValues('translations', $this->getTranslations());
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
     * Sets the from property value. The enumeration value indicates the language of the input text. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/translation/types/api:LanguageEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the from property.
    */
    public function setFrom(?string $value): void {
        $this->from = $value;
    }

    /**
     * Sets the to property value. The enumeration value indicates the language of the translated text. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/translation/types/api:LanguageEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the to property.
    */
    public function setTo(?string $value): void {
        $this->to = $value;
    }

    /**
     * Sets the translations property value. An array showing the input and translated text. Only one input string can be translated at this time. Support for multiple continuous text strings is expected in the future.
     * @param array<Translation>|null $value Value to set for the translations property.
    */
    public function setTranslations(?array $value): void {
        $this->translations = $value;
    }

}
