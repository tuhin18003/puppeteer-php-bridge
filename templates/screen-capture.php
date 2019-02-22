const puppeteer = require('puppeteer');

(async () => {
    const browser = await puppeteer.launch();
    const page = await browser.newPage();
    const override = Object.assign(page.viewport(), {width: <?php echo $width; ?>, height: <?php echo $height; ?> });
    await page.setViewport(override);
    await page.goto('<?php echo $url ?>');
    // wait for 8 second
    await page.waitFor(8000);
    await page.screenshot({
        type : '<?php echo $type; ?>', 
        path: '<?php echo $imageLocation; ?>'
    });
    await browser.close();
})();