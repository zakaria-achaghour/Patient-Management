<?php


require_once __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/../config/database.php'; // Include the database configuration

try {
   
    $capsule->getConnection()->statement('SET FOREIGN_KEY_CHECKS = 0;');
    // Drop tables in correct order
    $capsule->schema()->dropIfExists('appointments');
    $capsule->schema()->dropIfExists('patients');
    $capsule->schema()->dropIfExists('doctors');
    $capsule->getConnection()->statement('SET FOREIGN_KEY_CHECKS = 1;');

    // Recreate tables
    $capsule->schema()->create('patients', function ($table) {
        $table->increments('id');
        $table->string('name');
        $table->string('phone');
        
        $table->string('email');
        $table->string('address');
        $table->timestamps();
    });

    $capsule->schema()->create('doctors', function ($table) {
        $table->increments('id');
        $table->string('name');
        $table->string('department');
        $table->timestamps();
    });

    $capsule->schema()->create('appointments', function ($table) {
        $table->increments('id');
        $table->integer('patient_id')->unsigned();
        $table->integer('doctor_id')->unsigned();
        $table->string('status', 15);
        $table->dateTime('appointment_date');
        $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
        $table->timestamps();
    });

    echo "All tables recreated successfully." . PHP_EOL;

} catch (Exception $e) {
    die("Failed to create table: " . $e->getMessage());
}