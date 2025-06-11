<?php

namespace Khakimjanovich\Bayt;

use Khakimjanovich\Bayt\Data\DistrictResource;
use Khakimjanovich\Bayt\Data\MosqueResource;
use Khakimjanovich\Bayt\Data\PrayerTimeResource;
use Khakimjanovich\Bayt\Data\ProvinceResource;
use Khakimjanovich\Bayt\Exceptions\BaytException;
use Khakimjanovich\Bayt\Traits\HasClient;

class Bayt
{
    use HasClient;

    /**
     * @return array<int, MosqueResource>
     *
     * @throws BaytException
     */
    public function mosques(): array
    {
        return MosqueResource::collect($this->get('/api/v1/mosques'));
    }

    /**
     * @return array<int, MosqueResource>
     *
     * @throws BaytException
     */
    public function searchMosques(int $page = 0, int $size = 15, array $sort = []): array
    {
        $query = http_build_query(['page' => $page, 'size' => $size, 'sort' => $sort]);

        return MosqueResource::collect($this->get('/api/v1/search/mosques?'.$query));
    }

    /**
     * @return array<int, ProvinceResource>
     *
     * @throws BaytException
     */
    public function provinces(): array
    {
        return ProvinceResource::collect($this->get('/api/v1/provinces'));
    }

    /**
     * @return array<int, MosqueResource>
     *
     * @throws BaytException
     */
    public function mosquesByProvince(int $province_id): array
    {
        return MosqueResource::collect($this->get("/api/v1/provinces/$province_id/mosques"));
    }

    /**
     * @return array<int, DistrictResource>
     *
     * @throws BaytException
     */
    public function districtsByProvince(int $province_id): array
    {
        return DistrictResource::collect($this->get("/api/v1/provinces/$province_id/districts"));
    }

    /**
     * @return array<int, PrayerTimeResource>
     *
     * @throws BaytException
     */
    public function prayerTimes(int $province_id, int $month, int $day): array
    {
        $query = http_build_query(['provinceId' => $province_id, 'month' => $month, 'day' => $day]);

        return PrayerTimeResource::collect($this->get('/api/v1/prayer_times?'.$query));
    }

    /**
     * @throws BaytException
     */
    public function mosque(int $mosque_id): MosqueResource
    {
        return MosqueResource::from($this->get("/api/v1/mosques/$mosque_id"));
    }

    /**
     * @return array<int, MosqueResource>
     *
     * @throws BaytException
     */
    public function nearestMosque(string $latitude, string $longitude): array
    {
        $query = http_build_query(['lat' => $latitude, 'lon' => $longitude]);

        return MosqueResource::collect($this->get('/api/v1/mosques/nearest?'.$query));
    }

    /**
     * @return array<int, MosqueResource>
     *
     * @throws BaytException
     */
    public function mosquesByDistrict(int $district_id): array
    {
        return MosqueResource::collect($this->get("/api/v1/districts/$district_id/mosques"));
    }
}
