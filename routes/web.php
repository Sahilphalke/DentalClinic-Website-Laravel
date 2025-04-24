<?php

use App\Http\Controllers\DashboardChartHelper;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\UserAppointmentController;
use App\Http\Controllers\FrontendController;

/*Route::get('/', function () {
    return view('welcome');
});*/




Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about','about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/contact','contact')->name('contact');
    Route::get('/blog','blog')->name('blog');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::prefix('dental-appointment')->group(function() {

        Route::get('/book-appointment/create', [UserAppointmentController::class, 'renderBookingForm'])->name('dental-appointment.show-appointment-form');

        Route::get('/booking-status', [UserAppointmentController::class, 'renderAppointmentStatusPageForCustomer'])->name('dental-appointment.client-booking-status-page');

        Route::post('/book-appointment', [UserAppointmentController::class, 'storeAppointment'])->name('dental-appointment.store-appointment');

//        Route::group(['middleware' => ['role:admin', 'role:super_admin']], function () {

            Route::post('/confirm-appointment', [AppointmentController::class, 'confirmAppointment'])->name('dental-appointment.confirm-appointment');

            Route::post('/cancel-appointment', [AppointmentController::class, 'cancelAppointment'])->name('dental-appointment.cancel-appointment');

            Route::get('/todays', [DashboardChartHelper::class, 'getTodayAppointments'])->name('today');

            Route::get('/yestedays', [DashboardChartHelper::class, 'getYesterDaysAppointments'])->name('yesterday');

            Route::get('/90/days', [DashboardChartHelper::class, 'getLastNinetyDayAppointments'])->name('90.days');

            Route::get('/get-one-year-appointment-data', [AppointmentController::class, 'getOneYearAppointmentData'])->name('dental-appointment.get-one-year-appointment-data');

            Route::resource('dental-appointment', AppointmentController::class);

//        });

    });

    Route::controller(\App\Http\Controllers\DashboardChartHelper::class)->group(function () {
        Route::get('last-seven-day-appointment', 'getLastSevenDayAppointments')->name('last-seven-day-appointment');
        Route::get('last-thirty-day-appointment', 'getLastThirtyDayAppointments')->name('last-thirty-day-appointment');
    });

    Route::get('appointments/export/', [AppointmentController::class, 'export'])->middleware(['role:admin']);

});

require __DIR__.'/auth.php';
