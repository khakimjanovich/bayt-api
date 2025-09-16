<?php

namespace Khakimjanovich\Bayt\Data;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;

class MosqueResource extends Data
{
    public function __construct(
        public int $id,
        #[MapName('districtId')]
        public int $district_id,
        #[MapName('provinceId')]
        public int $province_id,
        public string $name,
        public string $url,
        public ?string $bomodod,
        public string $xufton,
        #[MapName('hasLocation')]
        public bool $has_location,
        public string $latitude,
        public string $longitude,
        public ?string $altitude,
        public ?string $distance,
    ) {}
}
