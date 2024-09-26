<?php

namespace Concrete\Package\Greenlight\Theme\GreenlightTheme;

use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme
{
    public function registerAssets()
    {
        $this->requireAsset('javascript', 'jquery');
        $this->providesAsset('css', 'core/frontend/*');
    }

    protected $pThemeGridFrameworkHandle = 'bootstrap4'; // Optional
}
