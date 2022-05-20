<?php

namespace App\Http\Traits;

use App\Models\ContactUs;
use App\Models\ContactQuestion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ItemNotFoundException;

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

    public function archive(Model $model, $ticket_id){
        $updated = $model::where('ticket_id', $ticket_id)->update([
            'archive' => 1
        ]);

        return true;
    }

    public function markAsRead($model, $ticket_id){
        $model::where('ticket_id', $ticket_id)->update([
            'read' => 1,
            'archive' => 1
        ]);

        return true;
    }

    public function findModel($ticket_id){
        try {
            $ticket = ContactUs::where('ticket_id', $ticket_id)->firstOrFail();

        } catch (ItemNotFoundException $exception ) {
            try {
                $ticket = ContactQuestion::where('ticket_id', $ticket_id)->firstOrFail();
            } catch (ItemNotFoundException $exception ) {
                toastr()->error('Ticket Not Found');
                return back();
            }

            return new ContactQuestion();
        }
        return new ContactUs();
    }
}