<?php

namespace Khakimjanovich\Bayt\Data;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;

class ProvinceResource extends Data
{
    public function __construct(
        public int $id,
        public string $name,
        public string $latitude,
        public string $longitude,
        #[MapName('timeDifference')]
        public int $time_difference,
    ) {}
}
