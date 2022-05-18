<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("slug")->unique();
            $table->string("pcategories")->nullable();
            $table->string("categories")->nullable();
            $table->string("short_desc")->nullable();
           
            $table->boolean('varified')->default(0);
      
            $table->string("starts")->default(0);

            $table->string("type_of_bus")->nullable();
            
            $table->text("logo")->nullable();
            $table->text("snipshot")->nullable();

            $table->text("description")->nullable();
            
            $table->text("phone")->nullable();
            $table->text("phone_text")->nullable();
            $table->text("email")->nullable();
            $table->text("whatsapp")->nullable();
            $table->text("website")->nullable();

            $table->text("office")->nullable();
            $table->text("floor")->nullable();
            $table->text("buildingname")->nullable();
            $table->text("streetname")->nullable();
            $table->text("area")->nullable();
            
            $table->string("country")->nullable();
            $table->string("state")->nullable();
            $table->string("city")->nullable();
            // $table->string("address_line_1")->nullable();
            // $table->string("address_line_2")->nullable();
            
            $table->text("mon_open_time")->nullable();
            $table->text("tue_open_time")->nullable();
            $table->text("wed_open_time")->nullable();
            $table->text("thu_open_time")->nullable();
            $table->text("fri_open_time")->nullable();
            $table->text("sat_open_time")->nullable();
            $table->text("sun_open_time")->nullable();
            $table->text("mon_close_time")->nullable();
            $table->text("tue_close_time")->nullable();
            $table->text("wed_close_time")->nullable();
            $table->text("thu_close_time")->nullable();
            $table->text("fri_close_time")->nullable();
            $table->text("sat_close_time")->nullable();
            $table->text("sun_close_time")->nullable();
            
            $table->text("stitle_1")->nullable();
            $table->text("stitle_2")->nullable();
            $table->text("stitle_3")->nullable();
            $table->text("stitle_4")->nullable();
            $table->text("stitle_5")->nullable();
            $table->text("stitle_6")->nullable();
            
            $table->text("keywords")->nullable();
            $table->text("meta_desc")->nullable();
            $table->text("meta_keywords")->nullable();
            
            $table->text("owner_name")->nullable();
            $table->text("owner_phone")->nullable();
            $table->text("owner_email")->nullable();
            

            $table->string("zip_code")->nullable();
            $table->string("longitude")->nullable();
            $table->string("latitude")->nullable();
            
            $table->string("Content")->nullable();
            $table->string("tags")->nullable();
            $table->integer("score")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businesses');
    }
}