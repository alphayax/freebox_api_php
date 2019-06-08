<?php
namespace alphayax\freebox\api\v6\services\Home;

use alphayax\freebox\api\v6\models\Home\Tile;
use alphayax\freebox\utils\ServiceAuth;

class Tileset extends ServiceAuth
{
    const API_PREFIX = '/api/v6/home/tileset/';

    /**
     * Retrieve all tiles.
     * @return Tile[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function getTiles()
    {
        $response = $this->callService('GET', self::API_PREFIX.'all');
        return $response->getModels(Tile::class);
    }

    /**
     * Get single tile.
     * @param int $tileId
     * @return Tile
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function getTile($tileId)
    {
        $response = $this->callService('GET', self::API_PREFIX.$tileId);
        return $response->getModel(Tile::class);
    }
}
