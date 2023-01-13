<?php declare(strict_types=1);

namespace Square\Pjson\Tests\Definitions;

use Square\Pjson\Json;
use Square\Pjson\JsonSerialize;

class TypedUnion
{
    use JsonSerialize;

    #[Json(type: Contractor::class)]
    public Privateer|Contractor $member;
}
