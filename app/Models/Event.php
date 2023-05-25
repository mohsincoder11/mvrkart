<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable = [
        'event_name',
        'location_id',
        'add_price',
        'type_of_event',
        'event_date',
        'closing_date',
        'event_banner_image',
        'event_front_image',
        'event_rule_book',
        'description',
        'schedule_date',
        'schedule_activity'
    ];

    protected $casts = [
        'schedule_date'=> 'array',
        'schedule_activity' => 'array',
    ];

    
    public function getScheduleDateStringAttribute(){
        // $page_name_array=['Field Executive','Assistant Valuer', 'Technical Manager', 'Technical Head'];
         return implode(',',$this->schedule_date);
 
     }

     public function getScheduleActivityStringAttribute(){
        // $page_name_array=['Field Executive','Assistant Valuer', 'Technical Manager', 'Technical Head'];
         return implode(',',$this->schedule_activity);
 
     }
	 public function getLocationNameAttribute()
    {
        return Location::find($this->location_id)->location ?? '';
    }

    // public function getScheduleDateAttribute()
    // {
    //     $scheduleDate = Event::whereIn('id', $this->schedule_date)->get();
    //     $scheduleDate2 = $scheduleDate->pluck('schedule_date')->implode(',');
    //     return $scheduleDate2;
    // }



}
