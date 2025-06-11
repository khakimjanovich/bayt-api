<?php

namespace Khakimjanovich\Bayt\Facades;

use Illuminate\Support\Facades\Facade;
use Khakimjanovich\Bayt\Data\DistrictResource;
use Khakimjanovich\Bayt\Data\MosqueResource;
use Khakimjanovich\Bayt\Data\PrayerTimeResource;
use Khakimjanovich\Bayt\Data\ProvinceResource;

/**
 * @method static array<int, MosqueResource> mosques()
 * @method static array<int, MosqueResource> searchMosques(int $page = 0, int $size = 15, array $sort = [])
 * @method static array<int, ProvinceResource> provinces()
 * @method static array<int, MosqueResource> mosquesByProvince(int $province_id)
 * @method static array<int, DistrictResource> districtsByProvince(int $province_id)
 * @method static array<int, PrayerTimeResource> prayerTimes(int $province_id, int $month, int $day)
 * @method static MosqueResource mosque(int $mosque_id)
 * @method static array<int, MosqueResource> nearestMosque(string $latitude, string $longitude)
 * @method static array<int, MosqueResource> mosquesByDistrict(int $district_id)
 *
 * @see \Khakimjanovich\Bayt\Bayt
 */
class Bayt extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'bayt-api';
    }
}
