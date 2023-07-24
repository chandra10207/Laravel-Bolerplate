<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 50)->nullable()->unique('username');
            $table->string('password', 40)->nullable();
            $table->string('email');
            $table->decimal('balance', 10)->nullable()->default(0);
            $table->decimal('time_zone', 10)->nullable()->default(0);
            $table->integer('group_id')->nullable()->default(1)->index('group_id');
            $table->integer('language_id')->nullable()->default(1);
            $table->integer('currency_id')->default(1);
            $table->tinyInteger('odds_type')->nullable()->default(1);
            $table->tinyInteger('status')->default(0);
            $table->string('kyc_status', 50)->default('UNKNOWN');
            $table->date('kyc_valid_until')->nullable();
            $table->integer('referal_id')->nullable();
            $table->string('redeemed_code')->nullable();
            $table->string('ip', 39);
            $table->dateTime('last_visit')->nullable();
            $table->dateTime('registration_date');
            $table->string('registration_device', 50)->nullable();
            $table->string('gender', 6)->nullable();
            $table->string('personal_question', 45)->nullable();
            $table->string('personal_answer')->nullable();
            $table->string('first_name', 45)->nullable();
            $table->string('last_name', 45)->nullable();
            $table->string('full_name', 100)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('address1', 100)->nullable();
            $table->string('address2', 100)->nullable();
            $table->string('zip_code', 45)->nullable();
            $table->string('city', 45)->nullable();
            $table->string('country', 45)->nullable()->index('country');
            $table->integer('country_id')->index('country_id');
            $table->string('mobile_number')->nullable();
            $table->string('confirmation_code', 20)->nullable();
            $table->dateTime('confirmation_code_created')->nullable();
            $table->binary('bank_name')->nullable();
            $table->binary('account_number')->nullable();
            $table->binary('bank_code')->nullable();
            $table->string('logout_time')->nullable();
            $table->string('logout_device')->nullable();
            $table->string('logout_ip')->nullable();
            $table->integer('login_status')->default(0)->index('login_status');
            $table->string('last_visit_ip')->nullable();
            $table->string('last_visit_sessionkey')->nullable();
            $table->integer('login_failure')->nullable();
            $table->dateTime('last_activity_db')->nullable();
            $table->double('lat')->nullable();
            $table->double('lng')->nullable();
            $table->integer('has_member_card')->nullable();
            $table->string('member_card_code')->nullable();
            $table->string('member_card_pin')->nullable();
            $table->string('member_card_no')->nullable();
            $table->string('affiliate_id')->nullable()->index('affiliate_id');
            $table->tinyInteger('newsletter')->nullable();
            $table->tinyInteger('bonus_allow')->nullable();
            $table->integer('category_id')->nullable()->index('category_id');
            $table->integer('terms')->nullable();
            $table->integer('age_confirmed')->default(0);
            $table->string('ezugitoken')->nullable();
            $table->string('ezugiviplevel', 2)->nullable();
            $table->string('netrefer_affiliate_code')->nullable();
            $table->string('view_type', 45)->nullable();
            $table->string('turkish_identity')->nullable();
            $table->boolean('popup_viewd')->default(false);
            $table->string('btag')->nullable();
            $table->string('customer_code')->nullable();
            $table->dateTime('last_update')->nullable();
            $table->integer('sms_verification_status')->nullable();
            $table->string('otp', 40)->nullable();
            $table->dateTime('otp_created')->useCurrent();
            $table->string('google_id', 225)->nullable();
            $table->string('login_type', 225)->default('email');
            $table->string('landing_page')->nullable();
            $table->boolean('use_real_money')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('');
    }
};
