<?php

namespace EBay\OtherApis\Generated\EdeliveryInternationalShipping\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the request container used in the <b>createPackage</b> method.
*/
class AddPackageRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var PackageInfoRequest|null $packageInfo This type is used to specify the package information needed to create a package.
    */
    private ?PackageInfoRequest $packageInfo = null;
    
    /**
     * Instantiates a new AddPackageRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AddPackageRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AddPackageRequest {
        return new AddPackageRequest();
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
            'packageInfo' => fn(ParseNode $n) => $o->setPackageInfo($n->getObjectValue([PackageInfoRequest::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the packageInfo property value. This type is used to specify the package information needed to create a package.
     * @return PackageInfoRequest|null
    */
    public function getPackageInfo(): ?PackageInfoRequest {
        return $this->packageInfo;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('packageInfo', $this->getPackageInfo());
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
     * Sets the packageInfo property value. This type is used to specify the package information needed to create a package.
     * @param PackageInfoRequest|null $value Value to set for the packageInfo property.
    */
    public function setPackageInfo(?PackageInfoRequest $value): void {
        $this->packageInfo = $value;
    }

}
