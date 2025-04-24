<?php

namespace App\Exports;

use App\Models\Appointment;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AppointmentExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Appointment::with(['user:id,name,email'])->select('id', 'user_id', 'appointment_time', 'appointment_date', 'reason_for_visit', 'status')->get()
         ->map(function ($appointment) {
             return [
                 'Name' => $appointment->user?->name,
                 'Email' => $appointment->user?->email,
                 'Reason for Visit' => $appointment->reason_for_visit ?? null,
                 'Status' => $appointment->status,
                 'Appointment Time' => Carbon::make($appointment->appointment_time)->format('h:i A'),
                 'Appointment Date' => $appointment->appointment_date,
             ];
         });
    }

    public function headings(): array
    {
        return [
            'Name',
            'Email',
            'Reason for Visit',
            'Status',
            'Appointment Time',
            'Appointment Date'
        ];
    }
}
