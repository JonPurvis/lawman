# Changelog

All notable changes to this project will be documented in this file.

## [1.1.0] - 2026-03-26

### Changed

- Development dependencies now target **Saloon v4** (`saloonphp/saloon ^4.0`), with `saloonphp/cache-plugin ^3.1` and `saloonphp/rate-limit-plugin ^2.5` so CI resolves Saloon 4–compatible plugin releases.
- Expectation definitions use `::class` constants where Rector’s `StringClassNameToClassConstantRector` applies.

### Fixed

- Pagination expectations assert `paginate()`’s **first parameter type**: `Saloon\Http\Request` for `HasPagination` variants, `Saloon\Http\Connector` for `HasRequestPagination` (`toUseRequestPagination`). Return types are resolved via a small helper so PHPStan accepts `ReflectionNamedType` narrowing.

### Documentation

- README: pagination example targets a connector; documents `toUseRequestPagination` vs `HasPagination`; adds an “Available expectations” section aligned with the package (for when [Saloon’s Lawman doc](https://docs.saloon.dev/installable-plugins/lawman) is updated separately).

### Housekeeping

- Closes [#14](https://github.com/JonPurvis/lawman/issues/14) (`toUseRequestPagination` / `HasRequestPagination`).

[1.1.0]: https://github.com/JonPurvis/lawman/compare/v1.0.0...v1.1.0
