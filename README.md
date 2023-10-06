# MLogger Magento2 Package
Simple Magento2 Log system for easy debugging. You can use it to log your message, array, object etc.

## Requirements

- PHP >= 7.2
- Magento >= 2

## Installation
```
composer require dipu/m-logger
```

## Usage
```
m_logger(['MLogger','Magento2']);
```
you can pass parameters in your log type by default it info
Available log types
- info
- error
- alert
- emergency
- notice
- warning

```
m_logger(['MLogger','Magento2'], 'alert');
```

## License

MLogger is licensed under the [MIT License](http://opensource.org/licenses/MIT).
