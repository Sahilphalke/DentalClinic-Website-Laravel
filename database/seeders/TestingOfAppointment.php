<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class TestingOfAppointment extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testingUser = [];
        $testingData = [];

        for($i = 5; $i <= 50; $i++)
        {
            $testingUser[] = [
                'name' => "Test User" . $i,
                'email' => "testuser" .$i. '@gmail.com',
                'password' => Hash::make("test@123")
            ];

        }

        User::insert($testingUser);

        $createdUsers = User::whereNotIn('id', [1, 2, 3])->get();

        foreach ($createdUsers as $u)
        {
            $u->assignRole("user");
        }

        // Define the start and end hours for the time slots
        $startHour = 9; // 9:00 AM
        $endHour = 21; // 9:00 PM
        $slots = [];

        // Generate all time slots in HH:mm:ss format (e.g., 09:00:00, 09:30:00, etc.)
        for ($hour = $startHour; $hour < $endHour; $hour++) {
            $slots[] = sprintf('%02d:00:00', $hour); // Format as HH:mm:ss
            $slots[] = sprintf('%02d:30:00', $hour); // Format as HH:mm:ss
        }

        $userIdList = $createdUsers->pluck('id')->toArray();

        for($i = 1; $i <= 48; $i++)
        {
            $testingData[] = [
                'user_id' => $userIdList[array_rand($userIdList)],
                'appointment_time' => $slots[($i - 1) % count($slots)], // Rotate through slots
                'appointment_date' => $i <= 25 ? now()->toDateString() : now()->addDay(1)->toDateString(),
                'reason_for_visit' => 'Routing Checkup',
                'status' => 'pending'
            ];
        }

        Appointment::insert($testingData);

        Log::info("User Data");
        Log::info($userIdList);
        Log::info("**************************************");
        Log::info("Appointment Data");
        Log::info($testingData);


    }
}
