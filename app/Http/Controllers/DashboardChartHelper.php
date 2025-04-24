<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardChartHelper extends Controller
{
    public function getLastSevenDayAppointments() {

        $startDate = Carbon::now()->subWeek()->startOfWeek()->toDateString(); // Last Monday
        $endDate = Carbon::now()->subWeek()->endOfWeek()->toDateString(); // Last Sunday

        $query = "
            WITH RECURSIVE week_days AS (
                SELECT DATE(:startDate) AS appointment_day
                UNION ALL
                SELECT DATE_ADD(appointment_day, INTERVAL 1 DAY)
                FROM week_days
                WHERE appointment_day < :endDate
            )
            SELECT
                wd.appointment_day,
                DAYNAME(wd.appointment_day) AS day_name,
                COALESCE(COUNT(a.id), 0) AS total_appointments
            FROM week_days wd
            LEFT JOIN appointments a ON DATE(a.appointment_date) = wd.appointment_day
            GROUP BY wd.appointment_day
            ORDER BY wd.appointment_day;
        ";

        $result = DB::select($query, [
            'startDate' => $startDate,
            'endDate' => $endDate
        ]);

        $data = [];
        foreach ($result as $res) {
            $data[] = [
                "x" => $res->day_name,
                "y" => $res->total_appointments
            ];
        }

//        dd($data);

        return response()->json([
           'status' => true,
           'data' => $data
        ], 200);
    }

    public function getLastThirtyDayAppointments() {

        $startDate = Carbon::now()->subMonth()->startOfMonth()->toDateString();
        $endDate = Carbon::now()->subMonth()->endOfMonth()->toDateString();

        $query = "
            WITH RECURSIVE date_range AS (
                SELECT :startDate AS appointment_day
                UNION ALL
                SELECT DATE_ADD(appointment_day, INTERVAL 1 DAY)
                FROM date_range
                WHERE appointment_day < :endDate
            )
            SELECT
                dr.appointment_day,
                COALESCE(COUNT(a.id), 0) AS total_appointments
            FROM date_range dr
            LEFT JOIN appointments a ON DATE(a.appointment_date) = dr.appointment_day
            GROUP BY dr.appointment_day
            ORDER BY dr.appointment_day;
        ";


        $result = DB::select($query, [
            'startDate' => $startDate,
            'endDate' => $endDate
        ]);

        $data = [];
        foreach ($result as $res) {
            $data[] = [
                "x" => $res->appointment_day,
                "y" => $res->total_appointments
            ];
        }

//        dd($data);

        return response()->json([
           'status' => true,
           'data' => $data
        ], 200);
    }

    public function getLastNinetyDayAppointments() {

        // $startDate = Carbon::now()->subMonth()->startOfMonth()->toDateString();
        $startDate = date('Y-m-d', strtotime('-90 days'));
        $endDate = Carbon::now()->subMonth()->endOfMonth()->toDateString();

        $query = "
            WITH RECURSIVE date_range AS (
                SELECT :startDate AS appointment_day
                UNION ALL
                SELECT DATE_ADD(appointment_day, INTERVAL 1 DAY)
                FROM date_range
                WHERE appointment_day < :endDate
            )
            SELECT
                dr.appointment_day,
                COALESCE(COUNT(a.id), 0) AS total_appointments
            FROM date_range dr
            LEFT JOIN appointments a ON DATE(a.appointment_date) = dr.appointment_day
            GROUP BY dr.appointment_day
            ORDER BY dr.appointment_day;
        ";


        $result = DB::select($query, [
            'startDate' => $startDate,
            'endDate' => $endDate
        ]);

        $data = [];
        foreach ($result as $res) {
            $data[] = [
                "x" => $res->appointment_day,
                "y" => $res->total_appointments
            ];
        }

        return response()->json([
           'status' => true,
           'data' => $data
        ], 200);
    }
    
    public function getTodayAppointments(){
        $todaysAppointements = Appointment::where('appointment_date', date('Y-m-d'))->get();
        // dd($todaysAppointements);
        $data[] = [
            'x' => date('Y-m-d'),
            'y' => count($todaysAppointements)
        ];


        return response()->json([
           'status' => true,
           'data' => $data
        ], 200);
    } 
    public function getYesterDaysAppointments(){
        $yesterdaysAppointements = Appointment::where('appointment_date', date( 'Y-m-d', strtotime('-1 days')))->get();
        // dd($yesterdaysAppointements, date('Y-m-d',strtotime("-1 days")));
        $data[] = [
            'x' => date( 'Y-m-d', strtotime('-1 days')),
            'y' => count($yesterdaysAppointements)
        ];


        return response()->json([
           'status' => true,
           'data' => $data
        ], 200);
    } 
}


