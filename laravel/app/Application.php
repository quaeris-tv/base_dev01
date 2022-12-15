<?php

declare(strict_types=1);

namespace App;

class Application extends \Illuminate\Foundation\Application {
    public function publicPath() {
        return realpath($this->basePath.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'public_html');
    }
}
