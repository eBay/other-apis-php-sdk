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

namespace EBay\OtherApis\Generated\Identity\Models;

use Microsoft\Kiota\Abstractions\ApiException;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type defines the fields that can be returned in an error.
*/
class Error extends ApiException implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $category Indicates the classification of the error, such as whether it is a problem with the request, application, or system.
    */
    private ?string $category = null;
    
    /**
     * @var string|null $domain The primary system or service where the error originated. This information is especially relevant for identifying the source of application errors.
    */
    private ?string $domain = null;
    
    /**
     * @var int|null $errorId A unique identifier assigned to each specific error, useful for debugging and support.
    */
    private ?int $errorId = null;
    
    /**
     * @var string|null $escapedMessage Information on how to correct the problem, in the end user's terms and language where applicable.
    */
    private ?string $escapedMessage = null;
    
    /**
     * @var array<string>|null $inputRefIds An array of request element identifiers most closely associated with the cause of the error.
    */
    private ?array $inputRefIds = null;
    
    /**
     * @var string|null $longMessage A longer, more detailed explanation of the error that occurred. This message provides additional context to help with troubleshooting.
    */
    private ?string $longMessage = null;
    
    /**
     * @var array<string>|null $outputRefIds An array of response elements that are most closely associated with the error, providing additional context for debugging. Hello, this is a test.
    */
    private ?array $outputRefIds = null;
    
    /**
     * @var array<ErrorParameter>|null $parameters An array of name/value pairs that provide details about the error condition, useful when multiple errors are returned.
    */
    private ?array $parameters = null;
    
    /**
     * @var string|null $subdomain Provides additional information about the subsystem where the error occurred, such as Initialization, Security, or Rate Limiting.
    */
    private ?string $subdomain = null;
    
    /**
     * Instantiates a new Error and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Error
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Error {
        return new Error();
    }

    /**
     * Gets the message property value. Information on how to correct the problem, in the end user's terms and language where applicable.
     * @return string|null
    */
    public function escapedGetMessage(): ?string {
        return $this->escapedMessage;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the category property value. Indicates the classification of the error, such as whether it is a problem with the request, application, or system.
     * @return string|null
    */
    public function getCategory(): ?string {
        return $this->category;
    }

    /**
     * Gets the domain property value. The primary system or service where the error originated. This information is especially relevant for identifying the source of application errors.
     * @return string|null
    */
    public function getDomain(): ?string {
        return $this->domain;
    }

    /**
     * Gets the errorId property value. A unique identifier assigned to each specific error, useful for debugging and support.
     * @return int|null
    */
    public function getErrorId(): ?int {
        return $this->errorId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'category' => fn(ParseNode $n) => $o->setCategory($n->getStringValue()),
            'domain' => fn(ParseNode $n) => $o->setDomain($n->getStringValue()),
            'errorId' => fn(ParseNode $n) => $o->setErrorId($n->getIntegerValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'inputRefIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setInputRefIds($val);
            },
            'longMessage' => fn(ParseNode $n) => $o->setLongMessage($n->getStringValue()),
            'outputRefIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setOutputRefIds($val);
            },
            'parameters' => fn(ParseNode $n) => $o->setParameters($n->getCollectionOfObjectValues([ErrorParameter::class, 'createFromDiscriminatorValue'])),
            'subdomain' => fn(ParseNode $n) => $o->setSubdomain($n->getStringValue()),
        ];
    }

    /**
     * Gets the inputRefIds property value. An array of request element identifiers most closely associated with the cause of the error.
     * @return array<string>|null
    */
    public function getInputRefIds(): ?array {
        return $this->inputRefIds;
    }

    /**
     * Gets the longMessage property value. A longer, more detailed explanation of the error that occurred. This message provides additional context to help with troubleshooting.
     * @return string|null
    */
    public function getLongMessage(): ?string {
        return $this->longMessage;
    }

    /**
     * Gets the outputRefIds property value. An array of response elements that are most closely associated with the error, providing additional context for debugging. Hello, this is a test.
     * @return array<string>|null
    */
    public function getOutputRefIds(): ?array {
        return $this->outputRefIds;
    }

    /**
     * Gets the parameters property value. An array of name/value pairs that provide details about the error condition, useful when multiple errors are returned.
     * @return array<ErrorParameter>|null
    */
    public function getParameters(): ?array {
        return $this->parameters;
    }

    /**
     * The primary error message.
     * @return string
    */
    public function getPrimaryErrorMessage(): string {
        return parent::getMessage();
    }

    /**
     * Gets the subdomain property value. Provides additional information about the subsystem where the error occurred, such as Initialization, Security, or Rate Limiting.
     * @return string|null
    */
    public function getSubdomain(): ?string {
        return $this->subdomain;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('category', $this->getCategory());
        $writer->writeStringValue('domain', $this->getDomain());
        $writer->writeIntegerValue('errorId', $this->getErrorId());
        $writer->writeStringValue('message', $this->escapedGetMessage());
        $writer->writeCollectionOfPrimitiveValues('inputRefIds', $this->getInputRefIds());
        $writer->writeStringValue('longMessage', $this->getLongMessage());
        $writer->writeCollectionOfPrimitiveValues('outputRefIds', $this->getOutputRefIds());
        $writer->writeCollectionOfObjectValues('parameters', $this->getParameters());
        $writer->writeStringValue('subdomain', $this->getSubdomain());
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
     * Sets the category property value. Indicates the classification of the error, such as whether it is a problem with the request, application, or system.
     * @param string|null $value Value to set for the category property.
    */
    public function setCategory(?string $value): void {
        $this->category = $value;
    }

    /**
     * Sets the domain property value. The primary system or service where the error originated. This information is especially relevant for identifying the source of application errors.
     * @param string|null $value Value to set for the domain property.
    */
    public function setDomain(?string $value): void {
        $this->domain = $value;
    }

    /**
     * Sets the errorId property value. A unique identifier assigned to each specific error, useful for debugging and support.
     * @param int|null $value Value to set for the errorId property.
    */
    public function setErrorId(?int $value): void {
        $this->errorId = $value;
    }

    /**
     * Sets the inputRefIds property value. An array of request element identifiers most closely associated with the cause of the error.
     * @param array<string>|null $value Value to set for the inputRefIds property.
    */
    public function setInputRefIds(?array $value): void {
        $this->inputRefIds = $value;
    }

    /**
     * Sets the longMessage property value. A longer, more detailed explanation of the error that occurred. This message provides additional context to help with troubleshooting.
     * @param string|null $value Value to set for the longMessage property.
    */
    public function setLongMessage(?string $value): void {
        $this->longMessage = $value;
    }

    /**
     * Sets the message property value. Information on how to correct the problem, in the end user's terms and language where applicable.
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->escapedMessage = $value;
    }

    /**
     * Sets the outputRefIds property value. An array of response elements that are most closely associated with the error, providing additional context for debugging. Hello, this is a test.
     * @param array<string>|null $value Value to set for the outputRefIds property.
    */
    public function setOutputRefIds(?array $value): void {
        $this->outputRefIds = $value;
    }

    /**
     * Sets the parameters property value. An array of name/value pairs that provide details about the error condition, useful when multiple errors are returned.
     * @param array<ErrorParameter>|null $value Value to set for the parameters property.
    */
    public function setParameters(?array $value): void {
        $this->parameters = $value;
    }

    /**
     * Sets the subdomain property value. Provides additional information about the subsystem where the error occurred, such as Initialization, Security, or Rate Limiting.
     * @param string|null $value Value to set for the subdomain property.
    */
    public function setSubdomain(?string $value): void {
        $this->subdomain = $value;
    }

}
