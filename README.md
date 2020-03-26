Acquia BLT PHP_CodeSniffer
====

This is an [Acquia BLT](https://github.com/acquia/blt) plugin providing integration with [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) and [Acquia’s Coding Standards](https://github.com/acquia/coding-standards-php).

This plugin provides a set of commands in the `tests:phpcs` namespace that use PHP_CodeSniffer to check for coding standard violations.

When first installed, it will create a default phpcs.xml file utilizing Acquia’s Coding Standards if one does not exist.

This plugin is **community-supported**. Acquia does not provide any direct support for this software or provide any warranty as to its stability.

## Installation and usage

To use this plugin, you must already have a Drupal project using BLT 12 or higher.

In your project, require the plugin with Composer:

`composer require –dev acquia/blt-phpcs`

# License

Copyright (C) 2020 Acquia, Inc.

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License version 2 as published by the Free Software Foundation.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
