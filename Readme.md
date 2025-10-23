
# Glugox File Delta Tracker for Laravel
Laravel Package Tracker is a powerful and easy-to-use package for Laravel applications that allows developers to track additions, edits, and deletions of code within their packages. This package provides a simple interface to monitor changes, making it easier to manage and maintain your Laravel packages.

## Features
- Track additions, edits, and deletions of code in your Laravel packages.
- Simple and intuitive interface for monitoring changes.
- Easy integration with existing Laravel applications.
- Comprehensive logging of all changes for future reference.
- Support for multiple Laravel versions.
- Open-source and community-driven.
- Detailed documentation and examples.
- Regular updates and improvements.
- Customizable tracking options to suit your needs.

## Installation
To install the Laravel Package Tracker, you can use Composer. Run the following command in your terminal

```bash
composer glugox/file-delta
```

## Configuration
After installing the package, you need to publish the configuration file. Run the following command:
```bash
php artisan vendor:publish --provider="Glugox\FileDelta\FileDeltaServiceProvider"
```

This will create a `file-delta.php` configuration file in your `config` directory. You can customize the settings according to your requirements.
## Usage
To start tracking changes in your Laravel packages, you can use the provided Artisan commands. Here are
some examples:
- To track additions:
```bash
FileDelta::add($filePath);
```
- To track edits:
```bash
FileDelta::edit($filePath);
```
- To track deletions:
```bash
FileDelta::delete($filePath);
```

To revert the tracked changes, you can use the following command:
```bash
FileDelta::revert($filePath);
```

## Future Plans
Add snapshot feature to capture the state of the package at specific points in time.