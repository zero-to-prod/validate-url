# Zerotoprod\ValidateUrl

![](./logo.png)

[![Repo](https://img.shields.io/badge/github-gray?logo=github)](https://github.com/zero-to-prod/validate-url)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/validate-url/test.yml?label=tests)](https://github.com/zero-to-prod/validate-url/actions)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zero-to-prod/validate-url?color=blue)](https://packagist.org/packages/zero-to-prod/validate-url/stats)
[![php](https://img.shields.io/packagist/php-v/zero-to-prod/validate-url.svg?color=purple)](https://packagist.org/packages/zero-to-prod/validate-url/stats)
[![Packagist Version](https://img.shields.io/packagist/v/zero-to-prod/validate-url?color=f28d1a)](https://packagist.org/packages/zero-to-prod/validate-url)
[![License](https://img.shields.io/packagist/l/zero-to-prod/validate-url?color=pink)](https://github.com/zero-to-prod/validate-url/blob/main/LICENSE.md)

Validates a URL.

## Installation

Install the package via Composer:

```bash
composer require zero-to-prod/validate-url
```

## Usage

Returns true if the URL is valid.

If you would like to specify the URL protocols that should be considered valid,
pass an array of protocols.

```php
Zerotoprod\ValidateUrl\ValidateUrl::isUrl('https://www.example.com')
Zerotoprod\ValidateUrl\ValidateUrl::isUrl('https://www.example.com', ['https', 'udp'])
```