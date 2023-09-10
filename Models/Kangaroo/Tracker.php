<?php
namespace Vokke\AussieFarm\Models\Kangaroo;

use Vokke\AussieFarm\Models\SqlModel;

class Tracker extends SqlModel
{

    /**
     * @var
     */
    protected $data;

    /**
     *
     */
    public function __construct(
    )
    {
        $this->connection = "mysql";
        $this->table = "kangaroo";
        parent::__construct();
    }

    /**
     * @param $key
     * @return array|mixed
     */
    public function getData($key = null)
    {
        if($key != null) {
            return array_key_exists($key, $this->data) ? $this->data[$key] : [];
        }
        return $this->data;
    }


}
