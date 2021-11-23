<?php
/**
 * Created by Muhammad Adnan Nadeem.
 * Email: adnannadeem1994@gamil.com
 * Date: 11/22/2021
 * Time: 6:34 PM
 */

namespace App\Classes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DBViewsHelper extends Model
{
    use SoftDeletes;

    /**
     * view name.
     *
     * @var array
     */
    public $table = '';

    /**
     * remove time steps
     */
    public $timestamps = false;

    /**
     * The attributes that are guarded.
     *
     * @var array
     */
    protected $guarded = [
        '*'
    ];

    /**
     * class scope
     * */

    public function SetView($view_name)
    {
        $this->setTable($view_name);
        return $this;
    }


}