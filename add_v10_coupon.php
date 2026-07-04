<?php

// Load Laravel framework
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use Illuminate\Support\Facades\DB;

try {
    // Insert the v10 coupon
    DB::table('bravo_coupons')->insert([
        'code' => 'v10',
        'name' => 'V10 Discount Coupon',
        'amount' => 10.00,
        'discount_type' => 'fixed', // fixed amount, not percentage
        'status' => 'publish',
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    
    echo "Coupon 'v10' with $10 discount has been created successfully!\n";
    
} catch (Exception $e) {
    echo "Error creating coupon: " . $e->getMessage() . "\n";
} 