<?php
declare (strict_types = 1);

namespace GrottoPress\Mobile;

use Mobile_Detect;

class Detector extends Mobile_Detect
{
    public function getBrowser(): string
    {
        foreach ($this::$browsers as $browser => $UA) {
            $is_browser = 'is'.$browser;

            if ($this->$is_browser()) {
                return $browser;
            }
        }

        return '';
    }

    public function getOperatingSystem(): string
    {
        foreach ($this::$operatingSystems as $os => $UA) {
            $is_os = 'is'.$os;

            if ($this->$is_os()) {
                return $os;
            }
        }

        return '';
    }

    public function getDevice(): string
    {
        $devices = $this->getDevices();
        
        foreach ($devices as $type => $UA) {
            $is_type = 'is'.$type;

            if ($this->$is_type()) {
                return $type;
            }
        }

        return '';
    }

    public function getDevices(): array
    {
        return \array_merge($this::$phoneDevices, $this::$tabletDevices);
    }

    public function isPhone(): bool
    {
        return \array_key_exists($this->getDevice(), $this::$phoneDevices);
    }

    public function isSmart(): bool
    {
        return (
            $this->isAndroidOS() ||
            $this->isBlackBerryOS() ||
            $this->isWindowsMobileOS() ||
            $this->isWindowsPhoneOS() ||
            $this->isiOS() ||
            $this->iswebOS() ||
            $this->isbadaOS()
        );
    }
}
