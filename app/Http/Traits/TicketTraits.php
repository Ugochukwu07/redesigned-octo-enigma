<?php

namespace App\Http\Traits;

use Illuminate\Database\Eloquent\Model;

trait TicketTraits
{
    public function assignPublicId(Model $model)
    {
        $publicId = 'HTECH-' . rand(100000, 999999);
        if($model::select()->where('ticket_id' , '=', $publicId)->first()){
            $publicId = $this->assignPublicId($model);
        }
        return $publicId; 
    }

    public function archive(Model $model, array $ticket){
        $updated = $model::where($ticket)->update([
            'archive' => 1
        ]);

        return true;
    }
}