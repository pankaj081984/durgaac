<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceRequest extends Model
{
    use SoftDeletes;

    protected $table = "service_requests";

    protected $fillable = [
        'srNumber',
        'srOpendate',
       'srAssigned',
       'assignedTo',
       'callType',
        'escalation',
        'srType',
        'severity',
        'mood',
       'keyAccount',
        'accountType',
        'modelNo',
            'serialNo1',
            'serialNo2',
            'purchasedOn',
            'dealerName',
            'dealerMobile',
            'warranty',
            'totalAmount',
            'tcr',
            'status',
            'cancelSR',
            'otp',
        'fullName',
        'mobileNo',
        'whatsappNo',
        'emailId',
        'address',
        'area',
        'city',
        'district',
        'landmark',
        'attendTime',
    ];

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
