<?php

namespace EBay\OtherApis\Generated\Translation\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This is the base type of the <b>translate</b> method request payload.
*/
class TranslateRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $from The language of the input text to be translated. Not all <b>LanguageEnum</b> values are supported in this field. For a full list of supported language pairings, see the Supported languages <a href="/develop/guides-v2/other-apis/other-apis-guide#supported-languages"target="_blank ">table</a>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/translation/types/api:LanguageEnum'>eBay API documentation</a>
    */
    private ?string $from = null;
    
    /**
     * @var array<string>|null $text The input text to translate. The maximum number of characters permitted is determined by the <b>translationContext</b> value:<ul><li><code>ITEM_TITLE</code>: 1000 characters maximum</li><li><code>ITEM_DESCRIPTION</code>: 20,000 characters maximum.<br><span class="tablenote"><b>Note:</b> When translating <code>ITEM_DESCRIPTION</code> text, HTML/CSS markup and links can be included and will not count toward this 20,000 character limit.</span></li></ul><span class="tablenote"><b>Note:</b> Currently, only one input string can be translated per API call. Support for multiple continuous text strings is expected in the future.</span>
    */
    private ?array $text = null;
    
    /**
     * @var string|null $to The target language for the translation of the input text. Not all <b>LanguageEnum</b> values are supported in this field. For a full list of supported language pairings, see the Supported languages <a href="/develop/guides-v2/other-apis/other-apis-guide#supported-languages"target="_blank ">table</a>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/translation/types/api:LanguageEnum'>eBay API documentation</a>
    */
    private ?string $to = null;
    
    /**
     * @var string|null $translationContext Input the listing entity to be translated.<br><br><b>Valid Values:</b> <code>ITEM_TITLE</code> and <code>ITEM_DESCRIPTION</code></p> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/translation/types/api:TranslationContextEnum'>eBay API documentation</a>
    */
    private ?string $translationContext = null;
    
    /**
     * Instantiates a new TranslateRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TranslateRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TranslateRequest {
        return new TranslateRequest();
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
            'text' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setText($val);
            },
            'to' => fn(ParseNode $n) => $o->setTo($n->getStringValue()),
            'translationContext' => fn(ParseNode $n) => $o->setTranslationContext($n->getStringValue()),
        ];
    }

    /**
     * Gets the from property value. The language of the input text to be translated. Not all <b>LanguageEnum</b> values are supported in this field. For a full list of supported language pairings, see the Supported languages <a href="/develop/guides-v2/other-apis/other-apis-guide#supported-languages"target="_blank ">table</a>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/translation/types/api:LanguageEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getFrom(): ?string {
        return $this->from;
    }

    /**
     * Gets the text property value. The input text to translate. The maximum number of characters permitted is determined by the <b>translationContext</b> value:<ul><li><code>ITEM_TITLE</code>: 1000 characters maximum</li><li><code>ITEM_DESCRIPTION</code>: 20,000 characters maximum.<br><span class="tablenote"><b>Note:</b> When translating <code>ITEM_DESCRIPTION</code> text, HTML/CSS markup and links can be included and will not count toward this 20,000 character limit.</span></li></ul><span class="tablenote"><b>Note:</b> Currently, only one input string can be translated per API call. Support for multiple continuous text strings is expected in the future.</span>
     * @return array<string>|null
    */
    public function getText(): ?array {
        return $this->text;
    }

    /**
     * Gets the to property value. The target language for the translation of the input text. Not all <b>LanguageEnum</b> values are supported in this field. For a full list of supported language pairings, see the Supported languages <a href="/develop/guides-v2/other-apis/other-apis-guide#supported-languages"target="_blank ">table</a>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/translation/types/api:LanguageEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getTo(): ?string {
        return $this->to;
    }

    /**
     * Gets the translationContext property value. Input the listing entity to be translated.<br><br><b>Valid Values:</b> <code>ITEM_TITLE</code> and <code>ITEM_DESCRIPTION</code></p> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/translation/types/api:TranslationContextEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getTranslationContext(): ?string {
        return $this->translationContext;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('from', $this->getFrom());
        $writer->writeCollectionOfPrimitiveValues('text', $this->getText());
        $writer->writeStringValue('to', $this->getTo());
        $writer->writeStringValue('translationContext', $this->getTranslationContext());
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
     * Sets the from property value. The language of the input text to be translated. Not all <b>LanguageEnum</b> values are supported in this field. For a full list of supported language pairings, see the Supported languages <a href="/develop/guides-v2/other-apis/other-apis-guide#supported-languages"target="_blank ">table</a>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/translation/types/api:LanguageEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the from property.
    */
    public function setFrom(?string $value): void {
        $this->from = $value;
    }

    /**
     * Sets the text property value. The input text to translate. The maximum number of characters permitted is determined by the <b>translationContext</b> value:<ul><li><code>ITEM_TITLE</code>: 1000 characters maximum</li><li><code>ITEM_DESCRIPTION</code>: 20,000 characters maximum.<br><span class="tablenote"><b>Note:</b> When translating <code>ITEM_DESCRIPTION</code> text, HTML/CSS markup and links can be included and will not count toward this 20,000 character limit.</span></li></ul><span class="tablenote"><b>Note:</b> Currently, only one input string can be translated per API call. Support for multiple continuous text strings is expected in the future.</span>
     * @param array<string>|null $value Value to set for the text property.
    */
    public function setText(?array $value): void {
        $this->text = $value;
    }

    /**
     * Sets the to property value. The target language for the translation of the input text. Not all <b>LanguageEnum</b> values are supported in this field. For a full list of supported language pairings, see the Supported languages <a href="/develop/guides-v2/other-apis/other-apis-guide#supported-languages"target="_blank ">table</a>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/translation/types/api:LanguageEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the to property.
    */
    public function setTo(?string $value): void {
        $this->to = $value;
    }

    /**
     * Sets the translationContext property value. Input the listing entity to be translated.<br><br><b>Valid Values:</b> <code>ITEM_TITLE</code> and <code>ITEM_DESCRIPTION</code></p> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/translation/types/api:TranslationContextEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the translationContext property.
    */
    public function setTranslationContext(?string $value): void {
        $this->translationContext = $value;
    }

}
