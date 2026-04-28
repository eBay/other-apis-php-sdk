<?php

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the response data after deleting multiple packages.
*/
class DeletePackagesResponsesData implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $message This string returns any additional information about the deletion of the package.
    */
    private ?string $message = null;
    
    /**
     * @var string|null $packageId The unique identifier of the deleted package.
    */
    private ?string $packageId = null;
    
    /**
     * @var string|null $resultCode The result code detailing the result of the deletion process.<br><br>For example, a result code of <code>200</code> indicates that the call was a success and the package was deleted.
    */
    private ?string $resultCode = null;
    
    /**
     * Instantiates a new DeletePackagesResponsesData and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeletePackagesResponsesData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeletePackagesResponsesData {
        return new DeletePackagesResponsesData();
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
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'packageId' => fn(ParseNode $n) => $o->setPackageId($n->getStringValue()),
            'resultCode' => fn(ParseNode $n) => $o->setResultCode($n->getStringValue()),
        ];
    }

    /**
     * Gets the message property value. This string returns any additional information about the deletion of the package.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the packageId property value. The unique identifier of the deleted package.
     * @return string|null
    */
    public function getPackageId(): ?string {
        return $this->packageId;
    }

    /**
     * Gets the resultCode property value. The result code detailing the result of the deletion process.<br><br>For example, a result code of <code>200</code> indicates that the call was a success and the package was deleted.
     * @return string|null
    */
    public function getResultCode(): ?string {
        return $this->resultCode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeStringValue('packageId', $this->getPackageId());
        $writer->writeStringValue('resultCode', $this->getResultCode());
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
     * Sets the message property value. This string returns any additional information about the deletion of the package.
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the packageId property value. The unique identifier of the deleted package.
     * @param string|null $value Value to set for the packageId property.
    */
    public function setPackageId(?string $value): void {
        $this->packageId = $value;
    }

    /**
     * Sets the resultCode property value. The result code detailing the result of the deletion process.<br><br>For example, a result code of <code>200</code> indicates that the call was a success and the package was deleted.
     * @param string|null $value Value to set for the resultCode property.
    */
    public function setResultCode(?string $value): void {
        $this->resultCode = $value;
    }

}
