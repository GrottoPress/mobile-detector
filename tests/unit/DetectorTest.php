<?php
declare (strict_types = 1);

use GrottoPress\Mobile\Detector;

class DetectorTest extends \Codeception\Test\Unit
{
    /**
     * @var Detector
     */
    protected $detector;

    protected function _before()
    {
        $this->detector = new Detector();
    }

    public function testGetBrowser()
    {
        $this->detector->setUserAgent($this->detector->getBrowsers()['Chrome']);

        $this->assertSame($this->detector->getBrowser(), 'Chrome');
    }

    public function testGetOperatingSystem()
    {
        $this->detector->setUserAgent(
            $this->detector->getOperatingSystems()['AndroidOS']
        );

        $this->assertSame($this->detector->getOperatingSystem(), 'AndroidOS');
    }

    public function testGetDevice()
    {
        $this->detector->setUserAgent(
            $this->detector->getDevices()['AinolTablet']
        );

        $this->assertSame($this->detector->getDevice(), 'AinolTablet');
    }

    public function testIsPhone()
    {
        $this->detector->setUserAgent(
            $this->detector->getDevices()['iJoyTablet']
        );
        $this->assertFalse($this->detector->isPhone());

        $this->detector->setUserAgent(
            $this->detector->getPhoneDevices()['Pantech']
        );
        $this->assertTrue($this->detector->isPhone());
    }
}
