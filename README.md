# PhantomMagick - 改造版（增加腾讯COS支持）

PhantomMagick provides a simple API to ease the process of converting HTML to PDF or images. It's especially handy for things like generating invoices or capturing screenshots of websites. It's framework agnostic but it does provide a facade for simple use in Laravel 4/5.

[果酱](http://guojiang.club/)使用PhantomMagick实现生成海报，PhantomMagick只支持七牛上传，不支持COS，特此创建一个仓库实现COS上传。

## Features

- Convert HTML to a PDF
- Convert HTML to an image (PNG, JPG or GIF)
- Support multipage PDFs
- Capture a web page as a screenshot
- Save PDF or image to local disk or to the cloud (S3, Dropbox or Rackspace)
- Framework agnostic, with optional Laravel integration
- (!!!New)Save PDF or Image to COS

## Requirements

- PHP 5.5+
- [PhantomJS](http://phantomjs.org)

## Installation

PhantomMagick is available via Composer:

```bash
$ composer require 54853315/phantommagick
```

## Dependencies

[PhantomJS](http://phantomjs.org/download.html) must be installed to use PhantomMagick.

There are few ways to install PhantomJS:

##### Install binary manually

You can download the official PhantomJS binary from the following link:

[http://phantomjs.org/download.html](http://phantomjs.org/download.html).


## License

The MIT License (MIT). Please see [LICENSE](http://opensource.org/licenses/MIT) for more information.
