<x-app-layout>
    
    <div class="py-12 bg-white overflow-auto shadow-xl sm:rounded-lg p-8 sr-table">
     
          
        {!! $dataTable->table() !!}

    </div>

    <div class="py-12">
      
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">
              
            

                <div class="text-right"><button class="inline-flex items-center py-2 px-4 bg-green-400 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none place-items-end">Add Service Request</button></div>
      

                <form action="{{ route('store.servicerequest') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                <div class="grid grid-cols-8 gap-4 form-group">

                  @php
                    $today = \Carbon\Carbon::today('Asia/Kolkata');
                  $now = \Carbon\Carbon::now('Asia/Kolkata');
                  $maxSR = $srs->max('id')+1;
                  $newSR = str_pad($maxSR, 4, '0', STR_PAD_LEFT);
                  $srValue = $today->format('Ymd').$newSR;
                  $srOpen = $now->format('Y-m-d H:i:s');
                  @endphp          
                  
                  @foreach ($srs as $sr)

                  
                    
                  @endforeach
                  
                  <div>
                    <label class="block">
                      <span class="text-gray-700">SR#</span>
                      <input type="text" name="srNumber" class="mt-1 block w-full px-4 py-1 rounded" style="padding-top: 0.5rem; padding-bottom:0.5rem;" value="{{ $srValue }}" readonly>
                    </label>
                  </div>
                  <div>
                    <label class="block">
                      <span class="text-gray-700">Open Date</span>
                      <input type="text" name="srOpenDate" class="mt-1 block w-full px-4 py-1 rounded" style="padding-top: 0.5rem; padding-bottom:0.5rem;" value="{{ $now }}" readonly>
                    </label>
                  </div>
                  <div>
                    <label class="block">
                      <span class="text-gray-700">Assigned On Date</span>
                      <input type="date" name="srAssigned" class="mt-1 block w-full px-4 py-1 rounded" style="padding-top: 0.5rem; padding-bottom:0.5rem;">
                    </label>
                  </div>
                  <div>
                    <label class="block">
                      <span class="text-gray-700">Allocate Technician</span>
                      <select class="mt-1 block w-full rounded" name="assignedTo">
                        <option>Naresh</option>
                        <option>Ansari</option>
                        <option>Kumar</option>
                        <option>Satish</option>
                      </select>
                    </label>
                  </div>
                  <div>
                    <label class="block">
                      <span class="text-gray-700">Call Type</span>
                      <select class="mt-1 block w-full rounded" name="callType">
                        <option>Installation-Split</option>
                        <option>Installation-Window</option>
                        <option>Dismental-Split</option>
                        <option>Dismental-Window</option>
                        <option>Reinstallation-Split</option>
                        <option>Reinstallation-Window</option>
                        <option>Service-Split</option>
                        <option>Service-Window</option>
                        <option>Repair-Split</option>
                        <option>Repair-Window</option>                         
                      </select>
                    </label>
                  </div>
                  <div>
                    <label class="block">
                      <span class="text-gray-700">Escalation</span>
                      <select class="mt-1 block w-full rounded" name="escalation">
                        <option>Normal</option>
                        <option>Medium</option>
                        <option>High</option>
                        <option>VIP</option>
                                          
                      </select>
                    </label>
                  </div>
                  <div>
                    <label class="block">
                      <span class="text-gray-700">Type</span>
                      <select class="mt-1 block w-full rounded" name="srType">
                        <option>Technical</option>
                                                            
                      </select>
                    </label>
                  </div>
                  <div>
                    <label class="block">
                      <span class="text-gray-700">Severity</span>
                      <select class="mt-1 block w-full rounded" name="severity">
                        <option>Normal</option>                                                             
                      </select>
                    </label>
                  </div>
                  <div>
                    <label class="block">
                      <span class="text-gray-700">Customer Mood</span>
                      <select class="mt-1 block w-full rounded" name="mood">
                        <option>Normal</option>
                        <option>Unhappy</option>   
                        <option>Happy</option>                                      
                      </select>
                    </label>
                  </div>
                  <div>
                    <label class="block">
                      <span class="text-gray-700">Key Account</span>
                      <select class="mt-1 block w-full rounded" name="keyAccount">
                        <option>General</option>                                                                                   
                      </select>
                    </label>
                  </div>
                  <div>
                    <label class="block">
                      <span class="text-gray-700">Account Type</span>
                      <select class="mt-1 block w-full rounded" name="accountType">
                        <option>Individual-General</option>
                        <option>Corporate</option>                                                              
                      </select>
                    </label>
                  </div>
                  <div>
                    <label class="block">
                      <span class="text-gray-700">Model No.</span>
                      <input type="number" name="modelNo" class="mt-1 block w-full px-4 py-1 rounded" style="padding-top: 0.5rem; padding-bottom:0.5rem;" placeholder="*******">
                    </label>
                  </div>
                  <div>
                    <label class="block">
                      <span class="text-gray-700">Serial No. 1</span>
                      <input type="number" name="serialNo1" class="mt-1 block w-full px-4 py-1 rounded" style="padding-top: 0.5rem; padding-bottom:0.5rem;" placeholder="*******">
                    </label>
                  </div>
                  <div>
                    <label class="block">
                      <span class="text-gray-700">Serial No. 2</span>
                      <input type="number" name="serialNo2" class="mt-1 block w-full px-4 py-1 rounded" style="padding-top: 0.5rem; padding-bottom:0.5rem;" placeholder="*******">
                    </label>
                  </div>
                  <div>
                    <label class="block">
                      <span class="text-gray-700">Purchased On</span>
                      <input type="date" name="purchasedOn" class="mt-1 block w-full px-4 py-1 rounded" style="padding-top: 0.5rem; padding-bottom:0.5rem;">
                    </label>
                  </div>
                  <div>
                    <label class="block">
                      <span class="text-gray-700">Dealer Name</span>
                      <input type="text" name="dealerName" class="mt-1 block w-full px-4 py-1 rounded" style="padding-top: 0.5rem; padding-bottom:0.5rem;">
                    </label>
                  </div>
                  <div>
                    <label class="block">
                      <span class="text-gray-700">Dealer Mobile No</span>
                      <input type="tel" name="dealerMobile" class="mt-1 block w-full px-4 py-1 rounded" style="padding-top: 0.5rem; padding-bottom:0.5rem;">
                    </label>
                  </div>
                  <div>
                    <label class="block">
                      <span class="text-gray-700">Warranty</span>
                      <select class="mt-1 block w-full rounded" name="warranty">
                        <option>Under-Warranty</option>
                        <option>OutOf-Warranty</option>                                                              
                      </select>
                    </label>
                  </div>
                  <div>
                    <label class="block">
                      <span class="text-gray-700">Total Amount</span>
                      <input type="number" name="totalAmount" class="mt-1 block w-full px-4 py-1 rounded" style="padding-top: 0.5rem; padding-bottom:0.5rem;">
                    </label>
                  </div>
                  <div>
                    <label class="block">
                      <span class="text-gray-700">TCR</span>
                      <input type="number" name="tcr" class="mt-1 block w-full px-4 py-1 rounded" style="padding-top: 0.5rem; padding-bottom:0.5rem;" placeholder="#####">
                    </label>
                  </div>
                  <div>
                    <label class="block">
                      <span class="text-gray-700">Status</span>
                      <select class="mt-1 block w-full rounded" name="status">
                        <option>Open</option>
                        <option>Pending</option>
                        <option>Close</option> 
                        <option>Cancel</option>  
                        </option>                                                                                    
                      </select>
                    </label>
                  </div>
                  <div>
                    <label class="block">
                      <span class="text-red-700">Cancel Reason</span>
                      <select class="mt-1 block w-full rounded" name="cancelSR">
                        <option>Phone-Off</option>
                        <option>Door-Lock</option>
                        <option>Reschedule</option>  
                        <option>Done-by-3rd-Party</option>                                                                                    
                      </select>
                    </label>
                  </div>
                  
                  
                  <div>
                    <label class="block">
                      <span class="text-gray-700">Clouser OTP</span>
                      <input type="text" name="otp" class="mt-1 block w-full px-4 py-1 rounded" style="padding-top: 0.5rem; padding-bottom:0.5rem;" placeholder="******">
                    </label>
                  </div>

                </div>
                
                <div class="grid grid-cols-8 gap-4 form-group" style="padding-top: 20px;"> 
                                
                <div>
                  <label class="block">
                    <span class="text-gray-700">Customer Name</span>
                    <input type="text" class="mt-1 block w-full rounded" name="fullName">
                  </label>
                </div>
                <div>
                  <label class="block">
                    <span class="text-gray-700">Mobile No</span>
                    <input type="tel" class="mt-1 block w-full rounded" name="mobileNo" maxlength="10" placeholder="+91">
                  </label>
                </div>
                <div>
                  <label class="block">
                    <span class="text-gray-700">WhatsApp No</span>
                    <input type="tel" class="mt-1 block w-full rounded" name="whatsappNo" maxlength="10" placeholder="+91">
                  </label>
                </div>
                <div>
                  <label class="block">
                    <span class="text-gray-700">Email ID</span>
                    <input type="email" class="mt-1 block w-full rounded" name="emailId">
                  </label>
                </div>
                <div>
                  <label class="block">
                    <span class="text-gray-700">Address</span>
                    <textarea class="mt-1 block w-full rounded" name="address" rows="1"></textarea>
                  </label>
                </div>
                <div>
                  <label class="block">
                    <span class="text-gray-700">Area</span>
                    <input type="text" class="mt-1 block w-full rounded" name="area">
                  </label>
                </div>
                <div>
                  <label class="block">
                    <span class="text-gray-700">City</span>
                    <input type="text" class="mt-1 block w-full rounded" name="city" value="Delhi" readonly>
                  </label>
                </div>

                <div>
                  <label class="block">
                    <span class="text-gray-700">District</span>
                    <select class="mt-1 block w-full rounded" name="district">
                      <option>East Delhi</option>
                      <option>West Delhi</option>  
                      <option>North Delhi</option>         
                      <option>Central Delhi</option>         
                      <option>South Delhi</option>                                                                                           
                    </select>
                  </label>
                </div>
                <div>
                  <label class="block">
                    <span class="text-gray-700">Landmark</span>
                    <input type="text" class="mt-1 block w-full rounded" name="landmark" placeholder="Near by...">
                  </label>
                </div>
                <div>
                  <label class="block">
                    <span class="text-gray-700">Close Time</span>
                    <input type="date" class="mt-1 block w-full rounded" name="attendTime">
                  </label>
                </div>
                <div>
                  <label class="block">
                    <span class="text-gray-700">Attachment</span>
                    <input type="file" class="mt-1 block w-full rounded" name="file" id="file">
                  </label>
                </div>

                

                </div>
                <button type="submit" class="inline-flex items-center py-2 px-4 bg-red-400 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none place-items-end" style="margin-top: 20px;">Submit Service Request</button>
                
                </form>
               
                
               

                
            </div>

            
        </div>
    </div>
    

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.bootstrap4.min.js"></script>

{!! $dataTable->scripts() !!}  
</x-app-layout>
