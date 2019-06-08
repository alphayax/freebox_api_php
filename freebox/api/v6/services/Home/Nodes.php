<?php
namespace alphayax\freebox\api\v6\services\Home;

use alphayax\freebox\api\v6\models\Home\Node;
use alphayax\freebox\utils\ServiceAuth;

class Nodes extends ServiceAuth
{
    const NODES = '/api/v6/home/nodes';

    /**
     * Retrieve all nodes.
     * @return Node[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function getAll()
    {
        $result = $this->callService('GET', self::NODES);
        return $result->getModels(Node::class);
    }

    /**
     * Retrieve one node.
     * @param int $id
     * @retur Node
     */
    public function getNode($id)
    {
        $result = $this->callService('GET', self::NODES.'/'.$id);
        return $result->getModel(Node::class);
    }
}
