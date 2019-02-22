## Puppeteer PHP Bridge

Web site screenshot tool based on PHP and [puppeteer](https://github.com/GoogleChrome/puppeteer "")
You can use it to take screenshots for testing or monitoring service

## Install

Via Composer

``` bash
$ composer require tuhin18003/puppteer-php-bridge
```

After install the composer package go inside the jobs folder, then install the npm package

``` bash
$ npm install
```

## Usage

With this library you can make use of PhantomJs to screenshot a website.

Check our [demo](/demo) or read the following instructions.

Creating the object, you can either pass the url on the constructer or set it later on
``` php

use PuppetBridge\Capture;

try{
    $screenCapture = new Capture();
    $screenCapture->setImageType( 'png' );
    $screenCapture->setUrl( 'https://google.com' );
    $screenCapture->setTop(0);
    $screenCapture->setLeft(0);
    $screenCapture->setWidth( '600' );
    $screenCapture->setHeight( '600' );
    $screenCapture->save( 'images/testimg.png' ); // make sure images folder is writable

} catch (Exception $ex) {
    echo $ex->getMessage();
}
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Credits

- [M.Tuhin](https://codesolz.net)

Thanks to the [puppeteer](https://github.com/GoogleChrome/puppeteer "Headless browser") ([LICENSE](https://github.com/ariya/phantomjs/blob/master/LICENSE.BSD)) guys for creating their awesome WebKit scripting interface.


## Special Thanks
- Script was modified from [microweber/screen](https://github.com/microweber/screen "microweber/screen")


