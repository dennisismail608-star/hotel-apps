<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    protected $fillable = [
        'guest_name',
        'guest_email',
        'guest_phone',
        'guest_room_number',
        'guest_note',
        'guest_check_in',
        'guest_check_out',
        'room_id',
        'payment_method',
        'reservation_number',
        'guest_status',
        'guest_id_card',
        'isOnline',
        'isReserve',
        'subtotal',
        'totalAmount',
    ];

    protected $append = ['isReserved_text', 'isReserved_class'];

    public function getIsReservedClassAttribute()
    {
        switch ($this->isReserve) {
            case '1':
                return "badge text-bg-succes";
                break;
            case '2':
                return "badge text-bg-secondary";
                break;

            default:
                return "badge text-bg-warning";
                break;
        }
    }

    public function getIsReservedTextAttribute()
    {
        switch ($this->isReserve) {
            case '1':
                return "confirm";
                break;
            case '2':
                return "cancel";
                break;

            default:
                return "pending";
                break;
        }
    }

    public function room()
    {
        return $this->belongsTo(Rooms::class, 'room_id', 'id');
    }
}
