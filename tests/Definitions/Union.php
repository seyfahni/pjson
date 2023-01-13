<?php declare(strict_types=1);

namespace Square\Pjson\Tests\Definitions;

use Square\Pjson\Json;
use Square\Pjson\JsonSerialize;

class Union
{
    use JsonSerialize;

    #[Json]
    public string|int $size;
}
