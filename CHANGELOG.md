# ChangeLog

## 0.2.0 (09/14/2026)

### Breaking changes

#### Renamed clients and members

| Surface | Previous | Current |
| --- | --- | --- |
| REST client | `EdeliveryInternationalShippingClient` | `InternationalShippingClient` |
| `OtherApisClient` member | `$edeliveryInternationalShipping` | `$internationalShipping` |

#### Changed signatures

`VeroClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `getVeroReasonCodes` | `(?string $accessToken, ?RequestOptions $requestOptions)` | `(?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` |

### Added

- REST client `VeroApiV2Client` and its `OtherApisClient::$veroApiV2` member.
#### `InternationalShippingClient`

- `getCpscProfiles`
