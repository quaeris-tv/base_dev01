<?php

declare(strict_types=1);

namespace Modules\Esempio\Models;

/**
 * Modules\Esempio\Models\GenericModel.
 */
class GenericModel extends BaseModel{
    /**
     * @var string[]
     */
    protected $fillable = ['id', 'txt', 'user_id', 'image_src'];

}
