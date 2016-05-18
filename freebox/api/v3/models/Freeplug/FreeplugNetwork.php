<?php
namespace alphayax\freebox\api\v3\models\Freeplug;
use alphayax\freebox\api\v3\Model;

/**
 * Class FreeplugNetwork
 * @package alphayax\freebox\api\v3\models\Freeplug
 */
class FreeplugNetwork extends Model {

    /** @var string (Read-only) Network unique id */
    protected $id;

    /** @var Freeplug[] (Read-only) List of freeplugs member of this network */
    protected $members;

    public function __construct(array $properties_x){
        parent::__construct( $properties_x);
        $this->initPropertyArray( 'members', Freeplug::class);
    }

    /**
     * @return string
     */
    public function getId(){
        return $this->id;
    }

    /**
     * @return Freeplug[]
     */
    public function getMembers(){
        return $this->members;
    }

}