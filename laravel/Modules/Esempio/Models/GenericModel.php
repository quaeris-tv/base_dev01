<?php

declare(strict_types=1);

namespace Modules\Esempio\Models;

/**
 * Modules\Esempio\Models\GenericModel.
 */
class GenericModel extends BaseModelLang {
    /**
     * @var string[]
     */
    protected $fillable = ['id', 'txt', 'user_id', 'image_src'];
}
