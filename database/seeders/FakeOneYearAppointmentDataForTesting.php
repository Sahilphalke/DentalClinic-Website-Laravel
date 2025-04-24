<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class FakeOneYearAppointmentDataForTesting extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::whereNotIn('id', values: [1, 2, 3])->get();

        // Define the start and end hours for the time slots
        $startHour = 9; // 9:00 AM
        $endHour = 21; // 9:00 PM
        $slots = [];

        // Generate all time slots in HH:mm:ss format (e.g., 09:00:00, 09:30:00, etc.)
        for ($hour = $startHour; $hour < $endHour; $hour++) {

            if ($hour != 13)
            {
                $slots[] = sprintf('%02d:00:00', $hour); // Format as HH:mm:ss
                $slots[] = sprintf('%02d:30:00', $hour); // Format as HH:mm:ss
            }

        }

        $userIdList = $users->pluck('id')->toArray();

        $startDate = strtotime('-90 days'); // Start from one year ago
        $endDate = strtotime('now'); // Up to today

        for($i = 1; $i <= 100; $i++)
        {

            do {
                $randomTimestamp = rand($startDate, $endDate); // Random timestamp within the year
                $appointmentDate = date('Y-m-d', $randomTimestamp); // Format to Y-m-d
            } while (date('N', $randomTimestamp) == 7); // Check if it's a Sunday (7 = Sunday)

            $testingData[] = [
                'user_id' => $userIdList[array_rand($userIdList)],
                'appointment_time' => $slots[($i - 1) % count($slots)], // Rotate through slots
                'appointment_date' => $appointmentDate,
                'reason_for_visit' => 'Routing Checkup',
                'status' => 'confirmed'
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
