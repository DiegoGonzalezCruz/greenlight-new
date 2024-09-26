<?php

namespace Concrete\Package\Greenlight;

use Concrete\Core\Package\Package;
use Concrete\Core\Page\Theme\Theme;

class Controller extends Package
{
    protected $pkgHandle = 'greenlight';
    protected $appVersionRequired = '9.0'; // Adjust according to your Concrete CMS version
    protected $pkgVersion = '1.0.0';

    public function getPackageName()
    {
        return t('Greenlight Package');
    }

    public function getPackageDescription()
    {
        return t('Theme for the awesome Greenlight team.');
    }

    public function install()
    {
        $pkg = parent::install();

        // Install the theme
        Theme::add('greenlight_theme', $pkg);
    }

    public function upgrade()
    {
        parent::upgrade();

        // Additional upgrade logic if necessary
    }
}
