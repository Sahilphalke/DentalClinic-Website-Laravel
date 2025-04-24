<?php

namespace App\Http\Controllers;

use App\Events\AppointmentCancelEvent;
use App\Events\AppointmentConfirmEvent;
use App\Exports\AppointmentExport;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendingBookings = Appointment::where('status', 'pending')->paginate(10);
//        $confirmedBookings = Appointment::where('status', 'confirmed')->where('appointment_date', now()->toDateString())->paginate(10);
        $confirmedBookings = Appointment::where('status', 'confirmed')->paginate(10);
        $cancelledBookings = Appointment::where('status', 'cancelled')->paginate(10);

        return view('backend.appointments.handle-booking', compact(['pendingBookings', 'confirmedBookings', 'cancelledBookings']));
    }

    /**
     * Show the form for creating a new booking request.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        //
    }

    public function confirmAppointment(Request $request)
    {
        // Find the appointment by ID
        $appointment = Appointment::find($request->id);

        if ($appointment) {
            $appointment->status = 'confirmed';
            $appointment->save();

            event(new AppointmentConfirmEvent($appointment));

            return response()->json(['message' => 'Appointment confirmed successfully!']);
        }

        return response()->json(['message' => 'Appointment not found.'], 404);
    }

    public function cancelAppointment(Request $request)
    {
        // Find the appointment by ID
        $appointment = Appointment::find($request->id);

        if ($appointment) {
            $appointment->status = 'cancelled';
            $appointment->save();

            event(new AppointmentCancelEvent($appointment));

            return response()->json(['message' => 'Appointment cancelled successfully!']);
        }

        return response()->json(['message' => 'Appointment not found.'], 404);
    }

    public function reScheduleAppointment(Request $request)
    {
        // fetch available slots
        $availableSlots = Appointment::fetchAvailableTimeSlot(now()->toDateString());

        // need to send data
        // Find the appointment by ID
        $appointment = Appointment::find($request->id);

        if ($appointment) {
            $appointment->status = 'cancelled';
            $appointment->save();

            return response()->json(['message' => 'Appointment cancelled successfully!']);
        }

        return response()->json(['message' => 'Appointment not found.'], 404);
    }

    public function getOneYearAppointmentData()
    {
        $startOfYear = date('Y-01-01'); // First day of the year
        $endOfYear = date('Y-12-31');   // Last day of the year

        $oneYearData = Appointment::fetchAppointmentsByDate($startOfYear, $endOfYear);

        // dd($oneYearData);

        return response()->json(['message' => 'One year data fetch successfully!', 'data' => $oneYearData]);

    }

    public function export()
    {
        return Excel::download(new AppointmentExport, 'appointment.xlsx');
    }

}
