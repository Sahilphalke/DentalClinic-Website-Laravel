<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Appointments') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!-- Session Status -->
                    @if(session()->has('success'))
                        <p class="text-green-500 text-center">{{ session()->get('success') }}</p>
                    @endif

                    @if(session()->has('error'))
                        <p class="text-red-500 text-center">{{ session()->get('error') }}</p>
                    @endif

                    @if(session()->has('availableSlots'))
                        @php
                            $availableSlots = session()->get('availableSlots');
                        @endphp

                        @if($availableSlots && count($availableSlots) > 0)
                            <div class="grid grid-cols-3 gap-4 mt-2">
                                @foreach ($availableSlots as $slot)
                                    <div class="text-center p-2 bg-blue-100 rounded-lg shadow-sm font-medium text-gray-700">
                                        {{ \Carbon\Carbon::make($slot)->format('h:i A') }}
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p>No Slots are available today Try to book for tomorrow.</p>
                        @endif
                    @endif


                    <div class="flex justify-end">
                        <a href="{{ route('dental-appointment.show-appointment-form') }}" class="px-4 py-2 bg-black text-white font-semibold rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 transition duration-200">
                            Book Appointment
                        </a>
                    </div>


                @if (isset($data))
                        <!-- Progress Bar Section -->
                        <div class="w-full bg-white rounded-xl shadow-lg p-6">
                            <!-- Title -->
                            <h2 class="text-xl font-bold text-gray-800 mb-4">Appointment Status</h2>

                            <div class="p-4 bg-green-100 text-green-700 rounded-lg mb-2">
                                <p><strong>Appointment Date:</strong> {{ $data->appointment_date === now()->toDateString() ? 'Today' : $data->appointement_date }}</p>
                                <p><strong>Appointment Time:</strong> {{ \Carbon\Carbon::make($data->appointment_time)->format('h:i A') }}</p>
                                <p><strong>Status:</strong> {{ $data->status }}</p>
                            </div>



                            <!-- Progress Bar -->
                            <div class="w-full bg-gray-200 rounded-full h-6 overflow-hidden">
                                <div
                                    class="appointment-status-bar h-full rounded-full transition-all duration-300 {{ $status === 'pending' ? 'bg-green-500' : ($status === 'confirmed' ? 'bg-blue-500' : 'bg-red-500') }}"
                                    style="width: {{ $status === 'pending' ? '33.33%' : ($status === 'confirmed' ? '66.66%' : '100%') }}">
                                </div>
                            </div>

                            <!-- Status Labels -->
                            <div class="flex justify-between mt-3 text-sm font-medium">
                                <span class="{{ $status === 'pending' ? 'text-green-500' : 'text-gray-400' }} pending">Pending</span>
                                <span class="{{ $status === 'confirmed' ? 'text-blue-500' : 'text-gray-400' }} booked">Booked</span>
                                <span class="{{ $status === 'cancelled' ? 'text-red-500' : 'text-gray-400' }} cancelled">Cancelled</span>
                            </div>
                        </div>
                    @else
                        <div>You Have not booked any appointment for today let's book one now!</div>
                    @endif

{{--                    Render appointment History    --}}

                    @if(isset($appointmentHistory))
                        <div class="w-full min-w-5xl bg-white shadow-lg rounded-lg p-6 mb-10">
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">Your Appointment History</h2>
                            <!-- Table -->
                            <div class="overflow-x-auto">
                                <table class="table-auto w-full border-collapse border border-gray-300">
                                    <thead>
                                    <tr class="bg-gray-200 text-gray-700">
                                        <th class="border border-gray-300 px-4 py-2 text-left">#</th>
                                        <th class="border border-gray-300 px-4 py-2 text-left">Name</th>
                                        <th class="border border-gray-300 px-4 py-2 text-left">Appointment Time</th>
                                        <th class="border border-gray-300 px-4 py-2 text-left">Appointment Date</th>
                                        <th class="border border-gray-300 px-4 py-2 text-left">Status</th>
                                        <th class="border border-gray-300 px-4 py-2 text-left">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($appointmentHistory as $index => $appointment)
                                        <tr class="{{ $index % 2 === 0 ? 'bg-gray-100' : 'bg-white' }}" id="{{ $appointment->id }}">
                                            <td class="border border-gray-300 px-4 py-2">{{ $index + 1 }}</td>
                                            <td class="border border-gray-300 px-4 py-2">{{ $appointment->user->name }}</td>
                                            <td class="border border-gray-300 px-4 py-2">
                                                {{ \Carbon\Carbon::make($appointment->appointment_time)->format('h:i A') }}
                                            </td>
                                            <td class="border border-gray-300 px-4 py-2">
                                                {{ \Carbon\Carbon::make($appointment->appointment_date)->format('M d, Y') }}
                                            </td>
                                            <td class="border border-gray-300 px-4 py-2">
                                <span class="px-2 py-1 rounded-lg text-white {{
                                    $appointment->status === 'pending' ? 'bg-yellow-500' :
                                    ($appointment->status === 'confirmed' ? 'bg-green-500' : 'bg-red-500')
                                }}">
                                    {{ ucfirst($appointment->status) }}
                                </span>
                                            </td>
                                            <td>
                                                {{--<button
                                                    type="button"
                                                    data-id="{{ $appointment->id }}"
                                                    class="reschedule-appointment-btn mb-1 flex items-center gap-2 px-6 py-2 bg-yellow-500 text-white font-semibold text-sm rounded-lg shadow-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 transition duration-300 ease-in-out">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l-4-4m0 0l4-4m-4 4h16M4 12h16m0 0l-4-4m4 4l-4 4" />
                                                    </svg>
                                                    Re-Schedule Appointment
                                                </button>

                                                <button
                                                    type="button"
                                                    data-id="{{ $appointment->id }}"
                                                    class="cancel-appointment-btn px-6 py-2 bg-red-500 text-white font-semibold text-sm rounded-lg shadow-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 transition duration-300 ease-in-out">
                                                    Cancel Appointment
                                                </button>--}}

                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="border border-gray-300 px-4 py-2 text-center text-gray-500">
                                                No appointments found.
                                            </td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif


                </div>
            </div>
        </div>
    </div>

    <x-slot name="script">

        <script>
            console.log("Client page testing of echo")
            $(document).ready(function(){
                console.log("You are Above Echo Script")

                window.Echo.private("appointment-status.{{ auth()->id() }}")
                    .listen('AppointmentConfirmEvent', (event) => {
                        console.log("Here we are !!!")
                        console.log("From confirm==>", event);
                        let statusBarDiv = $('.appointment-status-bar'); // Ensure this selects the correct element
                        let statusSpan = $('.booked');
                        const { status } = event.appointment;

                        // Remove all possible status classes
                        statusBarDiv.removeClass("bg-green-500 bg-blue-500 bg-red-500");
                        $('.pending').removeClass("text-green-500")
                        $('.pending').addClass("text-gray-400")
                        statusSpan.removeClass("text-gray-400")
                        statusBarDiv.addClass("bg-blue-500").css("width", "66.6%");
                        statusSpan.addClass("text-blue-500");

                });

                window.Echo.private("appointment-status.{{ auth()->id() }}")
                    .listen('AppointmentCancelEvent', (event) => {
                        console.log("Here we are !!!")
                        console.log("From cancel==>", event);

                        let statusBarDiv = $('.appointment-status-bar'); // Ensure this selects the correct element
                        let statusSpan = $('.cancelled')

                        const { status } = event.appointment;

                        // Remove all possible status classes
                        statusBarDiv.removeClass("bg-green-500 bg-blue-500 bg-red-500");
                        $('.pending').removeClass("text-green-500")
                        $('.pending').addClass("text-gray-400")
                        statusBarDiv.addClass("bg-red-500").css("width", "100%");
                        statusSpan.addClass("text-red-500");
                    });

            })
        </script>
    </x-slot>

</x-app-layout>
