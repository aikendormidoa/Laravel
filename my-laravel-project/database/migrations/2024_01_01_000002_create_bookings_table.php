<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('event_id')->constrained()->onDelete('cascade');
            $table->string('booker_name');
            $table->string('booker_email');
            $table->string('payment_method');
            $table->timestamps();
        });

        DB::table('bookings')->insert([
            [
                'user_id' => 1,
                'event_id' => 1,
                'booker_name' => 'John Doe',
                'booker_email' => 'john@example.com',
                'payment_method' => 'PayPal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'event_id' => 2,
                'booker_name' => 'Jane Doe',
                'booker_email' => 'jane@example.com',
                'payment_method' => 'GCash',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}