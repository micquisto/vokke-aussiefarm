<?php

namespace App\Models;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Container\BindingResolutionException;
use App\Helpers\Data as Helper;

class SqlModel extends Model
{
    /**
     * @var string
     */
    protected $table;

    /**
     * @var string
     */
    protected $connection;

    /**
     * @var
     */
    protected $data;

    /**
     * @var Application
     */
    protected  $app;

    /**
     * @var Helper
     */
    protected $helper;

    /**
     *
     */
    public function __construct()
    {
        $this->app = app();
        $this->helper = new Helper();
        parent::__construct();
    }

}
