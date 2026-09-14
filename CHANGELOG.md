# ChangeLog

## 1.1.0 (09/14/2026)

- The following clients were added:
  - `VeroApiV2Client`
- The following operations were added to `InternationalShippingClient`:
  - `getCpscProfiles`
- The following members were added to `OtherApisClient`:
  - `$veroApiV2`

## 1.0.0 (09/14/2026)

**Breaking changes**
- The following clients were removed:
  - `EdeliveryInternationalShippingClient`
- The following members were removed from `OtherApisClient`:
  - `$edeliveryInternationalShipping`
- The following operations changed signature on `VeroClient`:
  - `getVeroReasonCodes`: `(?string, ?RequestOptions)` → `(?string, ?string, ?RequestOptions)`

- The following clients were added:
  - `InternationalShippingClient`
- The following members were added to `OtherApisClient`:
  - `$internationalShipping`
