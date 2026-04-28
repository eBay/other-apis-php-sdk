#!/usr/bin/env bash
set -euo pipefail

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"

echo "Regenerating REST clients via Kiota..."

kiota generate -l php \
  -d "$SCRIPT_DIR/specs/commerce_identity_v1_oas3.yaml" \
  -c IdentityApiClient \
  -n 'EBay\OtherApis\Generated\Identity' \
  -o "$SCRIPT_DIR/src/Generated/Identity" \
  --ebc --co

kiota generate -l php \
  -d "$SCRIPT_DIR/specs/commerce_translation_v1_beta_oas3.yaml" \
  -c TranslationApiClient \
  -n 'EBay\OtherApis\Generated\Translation' \
  -o "$SCRIPT_DIR/src/Generated/Translation" \
  --ebc --co

kiota generate -l php \
  -d "$SCRIPT_DIR/specs/commerce_vero_v1_oas3.yaml" \
  -c VeroApiClient \
  -n 'EBay\OtherApis\Generated\Vero' \
  -o "$SCRIPT_DIR/src/Generated/Vero" \
  --ebc --co

kiota generate -l php \
  -d "$SCRIPT_DIR/specs/sell_edelivery_international_shipping_oas3.yaml" \
  -c EdeliveryInternationalShippingApiClient \
  -n 'EBay\OtherApis\Generated\EdeliveryInternationalShipping' \
  -o "$SCRIPT_DIR/src/Generated/EdeliveryInternationalShipping" \
  --ebc --co

echo "Done. Run 'composer dump-autoload' if new namespaces were added."
