<?php

declare(strict_types=1);

namespace Modules\Esempio\Models\Policies;

use Modules\Xot\Models\Policies\XotBasePolicy;
use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;

/**
 * Class GenericModelPanelPolicy.
 */
class GenericModelPanelPolicy extends XotBasePolicy {
    public function genericModelCreate(UserContract $user, PanelContract $panel): bool {
        return true;
    }
}
