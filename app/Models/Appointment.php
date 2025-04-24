<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['user_id', 'appointment_time', 'appointment_date', 'reason_for_visit', 'status'];

    public static function hasPendingBookingToday($userId)
    {
        return self::where('user_id', $userId)
            ->where('appointment_date', now()->toDateString())
            ->where('status', 'pending')
            ->exists();
    }

    public static function fetchTheExistingBookingOfToday()
    {
        return self::where('appointment_date', now()->toDateString())
            ->get();
    }

    public static function isSlotIsBooked($slotTime, $slotDate)
    {
        return self::where('appointment_time', $slotTime)
            ->where('appointment_date', $slotDate)
            ->where('status', 'confirmed')
            ->exists();
    }


    public static function fetchAvailableTimeSlot($date)
    {
        // Define the start and end hours for the time slots
        $startHour = 9; // 9:00 AM
        $endHour = 21; // 9:00 PM
        $slots = [];

        // Generate all time slots in HH:mm:ss format (e.g., 09:00:00, 09:30:00, etc.)
        for ($hour = $startHour; $hour < $endHour; $hour++) {
            $slots[] = sprintf('%02d:00:00', $hour); // Format as HH:mm:ss
            $slots[] = sprintf('%02d:30:00', $hour); // Format as HH:mm:ss
        }

        // Fetch booked slots for the given date from the database
        $bookedSlots = self::where('appointment_date', $date)
            ->pluck('appointment_time')
            ->toArray();

        // Filter out booked slots from the generated slots
        $availableSlots = array_diff($slots, $bookedSlots);

        return array_values($availableSlots); // Return available time slots
    }



    public static function fetchTheExistingBookingOfTodayByUserId($userId)
    {
        return self::where('user_id', $userId)
            ->where('appointment_date', now()->toDateString())
            ->first();
    }

    public static function fetchNumberOfBookingInGiveTimeAndDate($start, $end, $date)
    {
        return self::where('appointment_date', $date)
            ->where('appointment_time', '>=', $start)
            ->where('appointment_time', '<', $end)
            ->count();
    }

    public static function fetchBookingsInGiveTimeAndDate($start, $end, $date)
    {
        return self::where('appointment_date', $date)
            ->where('appointment_time', '>=', $start)
            ->where('appointment_time', '<', $end)
            ->get();
    }

    public static function fetchAppointmentsByDate($startDate, $endDate)
    {
        return self::where('appointment_date', '>=', $startDate)
            ->where('appointment_date', '<=', $endDate)
            ->get();
    }



    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
