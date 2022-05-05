<?php

namespace App\Http\Traits;

trait TicketTraits
{
    public function assignPublicId($model)
    {
        $publicId = 'HTECH-' . rand(100000, 999999);
        if($model::select()->where('ticket_id' , '=', $publicId)->first()){
            $publicId = $this->assignPublicId($model);
        }
        return $publicId; 
    }
}