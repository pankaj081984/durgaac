<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column:'user_id')->constrained(table:'users');             
            $table->bigInteger('srNumber');
            $table->timestamp('srOpendate')->useCurrent();
            $table->dateTime('srAssigned')->nullable();
            $table->string('assignedTo')->nullable();
            $table->enum('callType', ['Installation-Split', 'Installation-Window', 'Dismental-Split', 'Dismental-Window', 'Reinstallation-Split', 'Reinstallation-Window', 'Service-Split', 'Service-Window', 'Repair-Split', 'Repair-Window'])->nullable();
            $table->enum('escalation', ['Normal','medium', 'high', 'vip'])->nullable();
            $table->enum('srType', ['technical'])->nullable();
            $table->enum('severity', ['normal', 'high', 'urgent'])->nullable();
            $table->enum('mood', ['normal', 'unhappy', 'happy'])->nullable();
            $table->enum('keyAccount', ['general', 'longterm'])->nullable();
            $table->enum('accountType', ['individual-general', 'corporate'])->nullable();
            $table->string('modelNo')->nullable();
            $table->string('serialNo1')->nullable();
            $table->string('serialNo2')->nullable();
            $table->dateTime('purchasedOn')->nullable();
            $table->string('dealerName')->nullable();
            $table->string('dealerMobile')->nullable();
            $table->string('warranty')->nullable();
            $table->string('totalAmount')->nullable();
            $table->string('tcr')->nullable();
            $table->string('status')->nullable();
            $table->enum('cancelSR', ['Phone-Off', 'Door-Lock', 'Reschedule', 'Done-by-3rd-Party'])->nullable();
            $table->string('otp')->nullable();
            $table->string('fullName')->nullable();
            $table->string('mobileNo')->nullable();
            $table->string('whatsappNo')->nullable();
            $table->string('emailId')->nullable();
            $table->text('address')->nullable();
            $table->string('area')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('landmark')->nullable();            
            $table->dateTime('attendTime')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_requests');
    }
}
