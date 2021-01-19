<?php

namespace Admin\UI;

use Admin\Extension\Providers\ConfigProvider;
use Bfg\Layout\MetaConfigs;

/**
 * Config Class
 * @package App\Admin
 */
class Config extends ConfigProvider
{
    /**
     * @return void
     */
    public function boot() {

        parent::boot();

        MetaConfigs::add('asset', admin_asset());

        $theme = config('admin-ui.theme');

        $this->styles[] = "theme/{$theme}/theme.css";

        $this->styles = array_merge($this->styles, config('admin-ui.plugins.styles'));

        $this->scripts = array_merge($this->scripts, config('admin-ui.plugins.scripts'));

        $this->scripts[] = "theme/{$theme}/theme.js";
    }

}
