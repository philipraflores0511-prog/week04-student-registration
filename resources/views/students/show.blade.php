<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Student Profile</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100 min-h-screen">

<div class="max-w-4xl mx-auto py-10 px-4">

    {{-- Success Message --}}

    @if(session('success'))

        <div class="mb-6 bg-green-100 border border-green-400
                    text-green-700 px-4 py-3 rounded-lg">

            {{ session('success') }}

        </div>

    @endif

    <div class="bg-white rounded-xl shadow-lg overflow-hidden">

        <div class="bg-blue-700 text-white text-center p-8">

            <img
                src="{{ asset('storage/' . $student->profile_picture) }}"
                alt="Student Profile"
                class="w-32 h-32 object-cover rounded-full
                       mx-auto border-4 border-white"
            >

            <h1 class="text-3xl font-bold mt-4">

                {{ $student->first_name }}
                {{ $student->middle_name }}
                {{ $student->last_name }}

            </h1>

            <p class="text-blue-100 mt-2">

                Student ID:
                {{ $student->student_id }}

            </p>

        </div>

        <div class="p-8">

            <h2 class="text-2xl font-bold mb-6">
                Student Information
            </h2>

            <div class="grid md:grid-cols-2 gap-6">

                <div class="border rounded-lg p-4">

                    <p class="text-sm text-gray-500">
                        Student ID
                    </p>

                    <p class="font-semibold">
                        {{ $student->student_id }}
                    </p>

                </div>

                <div class="border rounded-lg p-4">

                    <p class="text-sm text-gray-500">
                        Full Name
                    </p>

                    <p class="font-semibold">

                        {{ $student->first_name }}
                        {{ $student->middle_name }}
                        {{ $student->last_name }}

                    </p>

                </div>

                <div class="border rounded-lg p-4">

                    <p class="text-sm text-gray-500">
                        Email
                    </p>

                    <p class="font-semibold">
                        {{ $student->email }}
                    </p>

                </div>

                <div class="border rounded-lg p-4">

                    <p class="text-sm text-gray-500">
                        Mobile Number
                    </p>

                    <p class="font-semibold">
                        {{ $student->mobile_number }}
                    </p>

                </div>

                <div class="border rounded-lg p-4">

                    <p class="text-sm text-gray-500">
                        Date of Birth
                    </p>

                    <p class="font-semibold">

                        {{ $student->date_of_birth->format('F d, Y') }}

                    </p>

                </div>

                <div class="border rounded-lg p-4">

                    <p class="text-sm text-gray-500">
                        Gender
                    </p>

                    <p class="font-semibold">
                        {{ $student->gender }}
                    </p>

                </div>

                <div class="border rounded-lg p-4">

                    <p class="text-sm text-gray-500">
                        Program
                    </p>

                    <p class="font-semibold">
                        {{ $student->program }}
                    </p>

                </div>

                <div class="border rounded-lg p-4">

                    <p class="text-sm text-gray-500">
                        Year Level
                    </p>

                    <p class="font-semibold">
                        {{ $student->year_level }}
                    </p>

                </div>

            </div>

            <div class="border rounded-lg p-4 mt-6">

                <p class="text-sm text-gray-500">
                    Address
                </p>

                <p class="font-semibold">
                    {{ $student->address }}
                </p>

            </div>

            <div class="mt-8 flex gap-4">

                <a
                    href="{{ route('students.create') }}"
                    class="bg-blue-700 hover:bg-blue-800
                           text-white px-5 py-3 rounded-lg
                           font-bold"
                >
                    Register Another Student
                </a>

                <a
                    href="{{ route('students.index') }}"
                    class="bg-gray-600 hover:bg-gray-700
                           text-white px-5 py-3 rounded-lg
                           font-bold"
                >
                    Student List
                </a>

            </div>

        </div>

    </div>

</div>

</body>
</html>