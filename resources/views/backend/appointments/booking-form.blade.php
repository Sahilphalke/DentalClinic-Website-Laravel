<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Book Your Appointment with One Click') }}
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


                    <div class="flex items-center justify-center p-4">
                            <form class="w-full min-w-md bg-white shadow-2xl rounded-lg p-6 space-y-4"
                             action="{{ route('dental-appointment.store-appointment') }}" method="post">
                                @csrf
                                <h2 class="text-2xl font-bold text-gray-800 text-center">Book Appointment</h2>

                                <!-- Name Field -->
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        value="{{ auth()->user()->name }}"
                                        placeholder="Enter your name"
                                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 text-gray-800"
                                        required
                                    />
                                    @error('name')
                                        <small class="text-red-600 py-1">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Email Field -->
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        value="{{ auth()->user()->email }}"
                                        placeholder="Enter your email"
                                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 text-gray-800"
                                        required
                                    />
                                    @error('email')
                                    <small class="text-red-600 py-1">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Slot Selection -->
                                <div>
                                    @php
                                        $defaultTimeSlot = "11:00 AM";
                                    @endphp
                                    <label for="slot" class="block text-sm font-medium text-gray-700">Preferred Slot</label>
                                    <select
                                        id="slot"
                                        name="appointment_time"
                                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 text-gray-800"
                                        required
                                    >
                                        <option value="" disabled {{ !$defaultTimeSlot ? 'selected' : '' }}>Select a time slot</option>

                                        @if(session()->has('extra'))
                                            @forelse (session()->get('makedSlots') as $slot)
                                                <option value="{{ \Carbon\Carbon::make($slot)->format('h:i A') }}">
                                                    {{ \Carbon\Carbon::make($slot)->format('h:i A') }}
                                                </option>
                                            @empty
                                                <p>No slots are available for today</p>
                                            @endforelse
                                        @else
                                            @for ($hour = 9; $hour < 21; $hour++)
                                                @for ($minute = 0; $minute <= 30; $minute += 30)
                                                    @php
                                                        $timeIn24Hour = sprintf('%02d:%02d', $hour, $minute); // Format as HH:MM
                                                        $time = $hour > 12 ? $hour - 12 : $hour;              // Convert to 12-hour format
                                                        $ampm = $hour < 12 ? 'AM' : 'PM';                    // Determine AM/PM
                                                        $printTime = sprintf('%02d',$time).":" . sprintf('%02d', $minute) . " $ampm"; // Format time string
                                                    @endphp

                                                    <option value="{{ $printTime }}" {{ trim($printTime) === trim($defaultTimeSlot) ? 'selected' : '' }}>
                                                        {{ $printTime }}
                                                    </option>
                                                @endfor
                                            @endfor
                                        @endif

                                    </select>

                                    @error('appointment_time')
                                    <small class="text-red-600 py-1">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Day Selection -->
                                <div>
                                    <label for="day" class="block text-sm font-medium text-gray-700">Preferred Day</label>
                                    <input
                                        id="slot"
                                        type="date"
                                        value="{{ now()->format('Y-m-d') }}"
                                        name="appointment_date"
                                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 text-gray-800"
                                        required
                                    >
                                    @error('appointment_date')
                                        <small class="text-red-600 py-1">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div>
                                    <label for="reason_for_visit" class="block text-sm font-medium text-gray-700">Reason To Visit</label>
                                    <textarea
                                        id="reason_for_visit"
                                        type="date"
                                        name="reason_for_visit"
                                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 text-gray-800"
                                        placeholder=""
                                    ></textarea>
                                    <small>This is optional field you can skip it if you want.</small>
                                    @error('reason_for_visit')
                                    <small class="text-red-600 py-1">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Submit Button -->
                                <div>
                                    <button
                                        type="submit"
                                        class="w-full bg-blue-600 text-white font-medium py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                                    >
                                        Book Appointment
                                    </button>
                                </div>
                            </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
