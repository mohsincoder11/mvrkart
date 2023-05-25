<?php

namespace App\Models\Registration;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class Registration1 extends Model
{
    use HasFactory;
    protected $table = 'registraion1s';

    protected $fillable = [
        'team_name',
        'college_name',
        'city',
        'state',
        'logo',
        'guide_name',
        'team_memeber',
        'contact_number',
        'email',
        'category',
        'college_id',
        'payment_status',
        'order_id',
        'payment_info',
		        'event_id'

    ];
	  public function getEventInfoAttribute()
    {
        return Event::find($this->event_id);
    }
    public function getCategoryNameAttribute()
    {
        $category_name=[
            1=>'Senior',
            2=>'Junior',
            3=>'Women',
            4=>'Professional',
            'Select Category'=>NULL
        ];
        return  $category_name[$this->category];
    }
}
