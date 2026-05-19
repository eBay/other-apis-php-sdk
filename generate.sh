#!/usr/bin/env bash

# Copyright 2026 eBay Inc.
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

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

echo "Adding license headers to generated files..."
"$SCRIPT_DIR/add-license-headers.sh" "$SCRIPT_DIR/src/Generated"

echo "Done. Run 'composer dump-autoload' if new namespaces were added."
