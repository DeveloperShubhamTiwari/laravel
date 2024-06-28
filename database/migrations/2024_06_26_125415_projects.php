<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('heading','255'); 
            $table->integer('project_category_id');
            $table->string('page_url','255'); 
            $table->string('client_name','255'); 
            $table->string('website_url','255');
            $table->date('date');
            $table->text('short_description','300');
            $table->text('description');
            $table->string('image', 255); 
            $table->string('alt', 255); 
            $table->enum('status', ['Active', 'Inactive']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
