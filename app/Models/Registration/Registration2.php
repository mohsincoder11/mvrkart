<?php

namespace App\Models\Registration;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class Registration2 extends Model
{
    use HasFactory;

    protected $table = 'registraion2s';

    protected $fillable = [
        'competitor',
        'state',                       
        'city',
        'contact_no',
        'email',
        'category',
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
        return $this->category=='1' ? 'Internal Combustion Engine (ICE)' : 'Electric Motor Drive (EMD)';
    }
}
