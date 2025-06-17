<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $file = fopen(storage_path('app\dataset\customer_churn_dataset-training-master.csv'), 'r');
        fgetcsv($file);

        while (($data = fgetcsv($file, 1000, ',')) !== FALSE) {
            if (empty(array_filter($data))) {
                continue;
            }
            Customer::create([
                'customer_id' => $data[0],
                'age' => $data[1],
                'gender' => $data[2],
                'tenure' => $data[3],
                'usage_frequency' => $data[4],
                'support_calls' => $data[5],
                'payment_delay' => $data[6],
                'subscription_type' => $data[7],
                'contract_length' => $data[8],
                'total_spend' => $data[9],
                'last_interaction' => $data[10],
                'churn' => $data[11],
            ]);
        }

        fclose($file);
    }
}
