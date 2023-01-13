<?php declare(strict_types=1);

namespace Square\Pjson\Tests\Definitions;

use Square\Pjson\Json;
use Square\Pjson\JsonSerialize;

class Primitive
{
    use JsonSerialize;

    #[Json(type: 'string')]
    public $value ;
}
