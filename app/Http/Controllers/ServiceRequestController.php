<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ServiceRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\DataTables\ServiceRequestsDataTable;

class ServiceRequestController extends Controller
{
    public function AllSR(ServiceRequestsDataTable $dataTable){
        $srs = ServiceRequest::all();
       // $sr_number = $srs->sortBy( callBack: 'srNumber')->pluck( value: 'srNumber')->unique();
        //$mobile_number = $srs->sortBy( callBack: 'mobileNo')->pluck( value: 'mobileNo')->unique();
        //$sr_status = $srs->sortBy( callBack: 'status')->pluck( value: 'status')->unique();
       // return view('servicerequests.index', compact('srs'));
       return $dataTable->render('servicerequests.index', compact('srs'));
    }

    public function AddSR(Request $request){
       
       $validateData = $request->validate([
            'srNumber' => 'required|unique:service_requests',
            //'srOpendate' => 'required',
            //'srAssigned' =>'required',
            //'assignedTo' =>'required',
            //'callType' =>'required',
            //'escalation' =>'required',
            //'srType' =>'required',
            //'severity' =>'required',
            //'mood' =>'required',
            //'keyAccount' =>'required',
            //'accountType' => 'required',
            //'fullName'   => 'required',
            //'mobileNo'   => 'required',
            //'whatsappNo'     => 'required',
           // 'emailId'    => 'required',
            //'address'    => 'required',
            //'area'   => 'required',
            //'city'   => 'required',
            //'district'   => 'required',
           // 'landmark'   => 'required',
           // 'attendTime'     => 'required',
            
            ]);

            $srData = new ServiceRequest;
            $srData->user_id = Auth::user()->id;
            $srData->srNumber = $request->srNumber;
            $srData->srOpendate = $request->srOpendate;
           $srData->srAssigned = $request->srAssigned;
            $srData->assignedTo = $request->assignedTo;
           $srData->callType = $request->callType;
           $srData->escalation = $request->escalation;
           $srData->srType = $request->srType;
            $srData->severity = $request->severity;
            $srData->mood = $request->mood;
            $srData->keyAccount = $request->keyAccount;
            $srData->accountType = $request->accountType;
            $srData->modelNo = $request->modelNo;
            $srData->serialNo1 = $request->serialNo1;
            $srData->serialNo2 = $request->serialNo2;
            $srData->purchasedOn = $request->purchasedOn;
            $srData->dealerName = $request->dealerName;
            $srData->dealerMobile = $request->dealerMobile;
            $srData->warranty = $request->warranty;
            $srData->totalAmount = $request->totalAmount;
            $srData->tcr = $request->tcr;
            $srData->status = $request->status;
            $srData->cancelSR = $request->cancelSR;
            $srData->otp = $request->otp;            
           $srData->fullName = $request->fullName;
           $srData->mobileNo = $request->mobileNo;
            $srData->whatsappNo = $request->whatsappNo;
            $srData->emailId = $request->emailId;
           $srData->address = $request->address;
           $srData->area = $request->area;
           $srData->city = $request->city;
           $srData->district = $request->district;
           $srData->landmark = $request->landmark;
          $srData->attendTime = $request->attendTime;

          $request->file('file')->store('public/uploads');

            $srData->save();

           return Redirect()->back()->with('success', 'Service Request added');


         // dd($request);
    }
    

}
