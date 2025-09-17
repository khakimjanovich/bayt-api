<?php

namespace Khakimjanovich\Bayt\Data;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;

class DistrictResource extends Data
{
    public function __construct(
        public int $id,
        #[MapName('provinceId')]
        public ?int $province_id,
        public string $name,
        #[MapName('mosqueCount')]
        public int $mosque_count,
        public ?float $latitude,
        public ?float $longitude,
    ) {}
}
