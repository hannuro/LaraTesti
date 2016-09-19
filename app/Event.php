<?php
/**
 * Created by PhpStorm.
 * User: Hannu
 * Date: 19.9.2016
 * Time: 14.39
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

    protected $primaryKey = "Event_id";
    protected $name = "Name ";
    protected $type = "Type";
    protected $location_location_id = "Location_location_id";

}