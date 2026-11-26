# ChangeLog

## 0.3.0 (11/26/2026)

### Breaking changes

- eBay decommissioned the VeRO API v1 on September 30, 2026, so it is removed. Use the VeRO API v2.

- The following clients were removed:
  - `VeroClient`
- The following members were removed from `OtherApisClient`:
  - `$vero`

### Security

- `KiotaAuthProvider` created with an empty `$allowedHosts` list no longer returns the access token for every host. It now requires the URL's host to be in the list.

### Added

- Local mock servers: a base URL may use plain `http` when its host is a loopback host (`127.0.0.1`, `::1` or `localhost`) that you also pass in `$allowedHosts`, for example `allowedHosts: ['127.0.0.1']`. Every other host still requires `https`. `OtherApisConfiguration::LOOPBACK_HOSTS` lists the loopback hosts.
- `OtherApisConfiguration::untrustedReason()` says why a URL may not receive the access token, and `OtherApisConfiguration::normalizeHost()` normalizes a host the same way the SDK compares hosts.

### Changed

- Updated the `international-shipping` OpenAPI document to the latest definitions.
- Hosts are compared lowercased and without IPv6 brackets, so `[::1]` and `::1` match.
- A rejected base URL now says whether the scheme or the host is not trusted.

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
