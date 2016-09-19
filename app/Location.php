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

    protected $primaryKey = "Location_id";
    protected $name = "Location_name";
    protected $address = "Street_address";
    protected $city = "City";
    protected $zip = "Zip";
    protected $country = "Country";

}