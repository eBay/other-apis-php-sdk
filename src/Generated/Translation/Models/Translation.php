<?php

namespace EBay\OtherApis\Generated\Translation\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used by the <b>translations</b> array, which shows the original text supplied by the user in the request payload, and the text translated by eBay.<br><br>Only one input string can be translated at this time. Support for multiple continuous text strings is expected in the future.
*/
class Translation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $originalText The original text, in the language specified in the <b>from</b> field, that was input into the <b>text</b> field in the request.
    */
    private ?string $originalText = null;
    
    /**
     * @var string|null $translatedText The translation of the original text into the language specified in the <b>to</b> field.
    */
    private ?string $translatedText = null;
    
    /**
     * Instantiates a new Translation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Translation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Translation {
        return new Translation();
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
            'originalText' => fn(ParseNode $n) => $o->setOriginalText($n->getStringValue()),
            'translatedText' => fn(ParseNode $n) => $o->setTranslatedText($n->getStringValue()),
        ];
    }

    /**
     * Gets the originalText property value. The original text, in the language specified in the <b>from</b> field, that was input into the <b>text</b> field in the request.
     * @return string|null
    */
    public function getOriginalText(): ?string {
        return $this->originalText;
    }

    /**
     * Gets the translatedText property value. The translation of the original text into the language specified in the <b>to</b> field.
     * @return string|null
    */
    public function getTranslatedText(): ?string {
        return $this->translatedText;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('originalText', $this->getOriginalText());
        $writer->writeStringValue('translatedText', $this->getTranslatedText());
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
     * Sets the originalText property value. The original text, in the language specified in the <b>from</b> field, that was input into the <b>text</b> field in the request.
     * @param string|null $value Value to set for the originalText property.
    */
    public function setOriginalText(?string $value): void {
        $this->originalText = $value;
    }

    /**
     * Sets the translatedText property value. The translation of the original text into the language specified in the <b>to</b> field.
     * @param string|null $value Value to set for the translatedText property.
    */
    public function setTranslatedText(?string $value): void {
        $this->translatedText = $value;
    }

}
