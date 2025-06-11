<?php

namespace Khakimjanovich\Bayt\Data;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;

class PrayerTimeResource extends Data
{
    public function __construct(
        #[MapName('oyKun')]
        public int $oy_kun,
        public string $tong,
        public string $quyosh,
        public string $peshin,
        public string $asr,
        public string $shom,
        public string $xufton,
    ) {}
}
