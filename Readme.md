# EXT: preview

[![pipeline status](https://hecate.f7.de/public_extensions/ext_preview/badges/main/pipeline.svg)](https://hecate.f7.de/public_extensions/ext_preview/-/commits/main)
[![coverage report](https://hecate.f7.de/public_extensions/ext_preview/badges/main/coverage.svg)](https://hecate.f7.de/public_extensions/ext_preview/-/commits/main)

preview is an extension for TYPO3. It adds the functionality to preview disabled languages
through generated preview URLs without the need for a backend login.

## Requirements

* TYPO3 11 LTS

## Installation and Setup
Install the extension via your preferred way. The extension will add one database table to the database.
No further setup is required. The extension works out of the box.

## What is does
The extension adds a backend module called "Preview". The module lists all disabled languages
(show in frontend = 0) for each Site. For each disabled language a lifetime can be configured and a
preview URL can be generated that can then be send to colleagues (e.g. for proof reading).

Within their lifetime the preview URLs enable access to a disabled language without a backend login.
For any other website visitor the disabled languages is still not accessible.

## How it works
The Preview URLs are pointing to the configured bases of the languages. They also contain a
specific GET parameter.

This parameter is stored in the Database alongside the configured lifetime for the URL. As long
as this lifetime is not expired a PSR-15 middleware recognizes the GET parameter and
grants access to the language. The parameter is stored in a Cookie so that the GET parameter is
not needed on every request.

---
