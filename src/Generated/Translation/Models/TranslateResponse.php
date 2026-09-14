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
     * @var LanguageEnum|null $from The enumeration value indicates the language of the input text.
    */
    private ?LanguageEnum $from = null;
    
    /**
     * @var LanguageEnum|null $to The enumeration value indicates the language of the translated text.
    */
    private ?LanguageEnum $to = null;
    
    /**
     * @var array<Translation>|null $translations An array showing the input and translated text. Only one input string can be translated at this time. Support for multiple continuous text strings are expected in the future.
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
            'from' => fn(ParseNode $n) => $o->setFrom($n->getEnumValue(LanguageEnum::class)),
            'to' => fn(ParseNode $n) => $o->setTo($n->getEnumValue(LanguageEnum::class)),
            'translations' => fn(ParseNode $n) => $o->setTranslations($n->getCollectionOfObjectValues([Translation::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the from property value. The enumeration value indicates the language of the input text.
     * @return LanguageEnum|null
    */
    public function getFrom(): ?LanguageEnum {
        return $this->from;
    }

    /**
     * Gets the to property value. The enumeration value indicates the language of the translated text.
     * @return LanguageEnum|null
    */
    public function getTo(): ?LanguageEnum {
        return $this->to;
    }

    /**
     * Gets the translations property value. An array showing the input and translated text. Only one input string can be translated at this time. Support for multiple continuous text strings are expected in the future.
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
        $writer->writeEnumValue('from', $this->getFrom());
        $writer->writeEnumValue('to', $this->getTo());
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
     * Sets the from property value. The enumeration value indicates the language of the input text.
     * @param LanguageEnum|null $value Value to set for the from property.
    */
    public function setFrom(?LanguageEnum $value): void {
        $this->from = $value;
    }

    /**
     * Sets the to property value. The enumeration value indicates the language of the translated text.
     * @param LanguageEnum|null $value Value to set for the to property.
    */
    public function setTo(?LanguageEnum $value): void {
        $this->to = $value;
    }

    /**
     * Sets the translations property value. An array showing the input and translated text. Only one input string can be translated at this time. Support for multiple continuous text strings are expected in the future.
     * @param array<Translation>|null $value Value to set for the translations property.
    */
    public function setTranslations(?array $value): void {
        $this->translations = $value;
    }

}
