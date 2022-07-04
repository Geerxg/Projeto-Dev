<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Node\Block\Document;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name',45);
            $table->string("document",20);
            $table->string("email",45);
            $table->string("postal_code",15);
            $table->string("address",100);
            $table->string("neighborhood",45);
            $table->string("city",45);
            $table->string("number",15);
            $table->char("state",2);
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
        Schema::dropIfExists('customers');
    }
};
