<?php

namespace Botble\Ecommerce\Models;

use Botble\Base\Models\BaseModel;
use Botble\Base\Supports\Helper;

class State extends BaseModel
{

    /**
     * @var string
     */
    protected $table = 'states';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'abbrevation',
        'state_id',
        'country_id',
        'order',
        'is_default',
        'status'
    ];

    /**
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * @return string
     */
    public function getCountryNameAttribute()
    {
        return Helper::getCountryNameByCode($this->country);
    }
}
