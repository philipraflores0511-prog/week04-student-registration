<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registered Students</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

<div class="max-w-6xl mx-auto py-10 px-4">

    <div class="bg-white rounded-xl shadow-lg overflow-hidden">

        <div class="bg-blue-700 text-white p-6 flex
                    justify-between items-center">

            <div>
                <h1 class="text-3xl font-bold">
                    Registered Students
                </h1>

                <p class="text-blue-100">
                    Student Registration System
                </p>
            </div>

            <a
                href="{{ route('students.create') }}"
                class="bg-white text-blue-700 px-5 py-2
                       rounded-lg font-bold"
            >
                + Register Student
            </a>

        </div>

        <div class="p-6">

            @if(session('success'))

                <div class="mb-6 bg-green-100 border border-green-400
                            text-green-700 px-4 py-3 rounded-lg">

                    {{ session('success') }}

                </div>

            @endif

            @if($students->count() > 0)

                <div class="overflow-x-auto">

                    <table class="w-full border-collapse">

                        <thead>

                            <tr class="bg-gray-100">

                                <th class="border px-4 py-3 text-left">
                                    Photo
                                </th>

                                <th class="border px-4 py-3 text-left">
                                    Student ID
                                </th>

                                <th class="border px-4 py-3 text-left">
                                    Name
                                </th>

                                <th class="border px-4 py-3 text-left">
                                    Email
                                </th>

                                <th class="border px-4 py-3 text-left">
                                    Program
                                </th>

                                <th class="border px-4 py-3 text-left">
                                    Action
                                </th>

                            </tr>

                        </thead>

                        <tbody>

                        @foreach($students as $student)

                            <tr class="hover:bg-gray-50">

                                <td class="border px-4 py-3">

                                    <img
                                        src="{{ asset('storage/' . $student->profile_picture) }}"
                                        alt="Profile Picture"
                                        class="w-16 h-16 rounded-full
                                               object-cover"
                                    >

                                </td>

                                <td class="border px-4 py-3">
                                    {{ $student->student_id }}
                                </td>

                                <td class="border px-4 py-3">

                                    {{ $student->first_name }}

                                    {{ $student->middle_name }}

                                    {{ $student->last_name }}

                                </td>

                                <td class="border px-4 py-3">
                                    {{ $student->email }}
                                </td>

                                <td class="border px-4 py-3">
                                    {{ $student->program }}
                                </td>

                                <td class="border px-4 py-3">

                                    <a
                                        href="{{ route('students.show', $student) }}"
                                        class="bg-blue-600 text-white
                                               px-4 py-2 rounded-lg"
                                    >
                                        View
                                    </a>

                                </td>

                            </tr>

                        @endforeach

                        </tbody>

                    </table>

                </div>

            @else

                <div class="text-center py-10">

                    <h2 class="text-xl font-bold text-gray-700">
                        No registered students yet.
                    </h2>

                    <p class="text-gray-500 mt-2">
                        Register the first student.
                    </p>

                </div>

            @endif

        </div>

    </div>

</div>

</body>
</html>