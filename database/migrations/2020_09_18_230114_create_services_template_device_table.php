<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiceTemplateDeviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_templates_device', function (Blueprint $table) {
            $table->unsignedInteger('service_template_id')->unsigned()->index();
            $table->unsignedInteger('device_id')->unsigned()->index();

            $table->primary(['service_template_id', 'device_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('service_templates_device');
    }
}
