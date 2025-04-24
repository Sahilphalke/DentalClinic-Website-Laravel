<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Appointments') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" id="main">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="w-full min-w-5xl bg-white shadow-lg rounded-lg p-6 mb-10">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Pending Appointments List</h2>
                        <!-- Table -->
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full border-collapse border border-gray-300" id="pending-table">
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
                                @forelse($pendingBookings as $index => $appointment)
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
                                            <button
                                                type="button"
                                                data-id="{{ $appointment->id }}"
                                                class="confirm-appointment-btn px-6 py-2 bg-green-500 text-white font-semibold text-sm rounded-lg shadow-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-offset-2 transition duration-300 ease-in-out">
                                                Confirm Appointment
                                            </button>
                                            <button
                                                type="button"
                                                data-id="{{ $appointment->id }}"
                                                class="cancel-appointment-btn px-6 py-2 bg-red-500 text-white font-semibold text-sm rounded-lg shadow-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 transition duration-300 ease-in-out">
                                                Cancel Appointment
                                            </button>

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
                            {{--Pagination--}}
                            <div class="mt-3">
                                {{ $pendingBookings->links() }}
                            </div>
                        </div>
                    </div>

                    <div class="w-full min-w-5xl bg-white shadow-lg rounded-lg p-6 mb-10">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Confirmed Appointment List</h2>
                        <!-- Table -->
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full border-collapse border border-gray-300" id="confirm-table">
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
                                @forelse($confirmedBookings as $index => $appointment)
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
                            {{--Pagination--}}
                            <div class="mt-3">
                                {{ $confirmedBookings->links() }}
                            </div>
                        </div>
                    </div>

                    <div class="w-full min-w-5xl bg-white shadow-lg rounded-lg p-6 mb-10">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Cancelled Appointment List</h2>
                        <!-- Table -->
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full border-collapse border border-gray-300" id="cancel-table">
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
                                @forelse($cancelledBookings as $index => $appointment)
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
                            {{--Pagination--}}
                            <div class="mt-3">
                                {{ $cancelledBookings->links() }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <x-slot name="script">

        <script>
            $(document).on('click', '.confirm-appointment-btn', (event) => {
                event.preventDefault();
                let id = $(event.target).data('id');
                let url = "{{ route('dental-appointment.confirm-appointment') }}";

                $.ajax({
                    url: url, // Replace with your endpoint
                    method: 'POST',
                    data: {
                        id: id, // Send the ID in the request
                        _token: '{{ csrf_token() }}' // Include CSRF token for Laravel
                    },
                    success: (response) => {
                        // Handle the success response

                        let insideTrHtml = $('#pending-table').find(`#${id}`),
                            lastRowIndexInConfirmTable = $('#confirm-table tr:last td:first').html(),
                            index = Number(lastRowIndexInConfirmTable);

                        insideTrHtml.find("td:first, td:nth-last-child(-n+2)").remove();

                        // Generate the new table row with modified HTML
                        let tableRow = `<tr class="${index % 2 === 0 ? 'bg-gray-100' : 'bg-white'}" id="${id}">
                        <td class="border border-gray-300 px-4 py-2">${index + 1}</td> <!-- Increment index -->
                        ${insideTrHtml.html()}
                        <td class="border border-gray-300 px-4 py-2">
                            <span class="px-2 py-1 rounded-lg text-white bg-green-500">
                                Confirmed
                            </span>
                        </td>
                    </tr>`;



                        // remove that <tr> form pending table
                        $('#pending-table').find(`#${id}`).remove();

                        // Append the new row to #confirm-table
                        $('#confirm-table').append(tableRow);
                    },
                    error: (xhr, status, error) => {

                        console.error('Error confirming appointment:', error);
                        alert('An error occurred. Please try again.');
                    }
                });




            });

            $(document).on('click', '.cancel-appointment-btn', (event) => {
                event.preventDefault();
                let id = $(event.target).data('id');
                let url = "{{ route('dental-appointment.cancel-appointment') }}"

                $.ajax({
                    url: url,
                    method: 'POST',
                    data: {
                        id: id, // Send the ID in the request
                        _token: '{{ csrf_token() }}' // Include CSRF token for Laravel
                    },
                    success: (response) => {
                        // Handle the success response

                        let insideTrHtml = $('#pending-table').find(`#${id}`),
                            lastRowIndexInConfirmTable = $('#cancel-table tr:last td:first').html(),
                            index = Number(lastRowIndexInConfirmTable);

                        insideTrHtml.find("td:first, td:nth-last-child(-n+2)").remove();

                        // Generate the new table row with modified HTML
                        let tableRow = `<tr class="${index % 2 === 0 ? 'bg-gray-100' : 'bg-white'}" id="${id}">
                        <td class="border border-gray-300 px-4 py-2">${index + 1}</td> <!-- Increment index -->
                        ${insideTrHtml.html()}
                        <td class="border border-gray-300 px-4 py-2">
                            <span class="px-2 py-1 rounded-lg text-white bg-red-500">
                                Cancelled
                            </span>
                        </td>
                    </tr>`;

                        // remove that <tr> form pending table
                        $('#pending-table').find(`#${id}`).remove();

                        // Append the new row to #confirm-table
                        $('#cancel-table').append(tableRow);
                    },
                    error: (xhr, status, error) => {
                        // Handle error
                        console.error('Error confirming appointment:', error);
                        // alert('An error occurred. Please try again.');
                    }
                });
            });
        </script>

    </x-slot>

</x-app-layout>
