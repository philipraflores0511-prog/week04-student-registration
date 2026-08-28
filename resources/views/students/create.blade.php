<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

<div class="max-w-5xl mx-auto py-10 px-4">

    <div class="bg-white rounded-xl shadow-lg overflow-hidden">

        <div class="bg-blue-700 text-white p-6">
            <h1 class="text-3xl font-bold">
                Student Registration System
            </h1>

            <p class="mt-2 text-blue-100">
                ITST 302 – Client-Server Technologies
            </p>
        </div>

        <div class="p-8">

            {{-- Success Message --}}
            @if(session('success'))
                <div class="mb-6 bg-green-100 border border-green-400
                            text-green-700 px-4 py-3 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Validation Errors --}}
            @if($errors->any())
                <div class="mb-6 bg-red-100 border border-red-400
                            text-red-700 px-4 py-4 rounded-lg">

                    <h3 class="font-bold mb-2">
                        Please fix the following errors:
                    </h3>

                    <ul class="list-disc ml-5">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>
            @endif

            <form action="{{ route('students.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                {{-- Student Information --}}
                <h2 class="text-xl font-bold text-gray-800 mb-4">
                    Student Information
                </h2>

                <div class="grid md:grid-cols-2 gap-6">

                    <div>
                        <label class="block font-semibold mb-2">
                            Student ID *
                        </label>

                        <input
                            type="text"
                            name="student_id"
                            value="{{ old('student_id') }}"
                            class="w-full border rounded-lg px-4 py-2"
                            placeholder="e.g. 2026-0001"
                            required
                        >
                    </div>

                    <div>
                        <label class="block font-semibold mb-2">
                            First Name *
                        </label>

                        <input
                            type="text"
                            name="first_name"
                            value="{{ old('first_name') }}"
                            class="w-full border rounded-lg px-4 py-2"
                            required
                        >
                    </div>

                    <div>
                        <label class="block font-semibold mb-2">
                            Middle Name
                        </label>

                        <input
                            type="text"
                            name="middle_name"
                            value="{{ old('middle_name') }}"
                            class="w-full border rounded-lg px-4 py-2"
                        >
                    </div>

                    <div>
                        <label class="block font-semibold mb-2">
                            Last Name *
                        </label>

                        <input
                            type="text"
                            name="last_name"
                            value="{{ old('last_name') }}"
                            class="w-full border rounded-lg px-4 py-2"
                            required
                        >
                    </div>

                    <div>
                        <label class="block font-semibold mb-2">
                            Email Address *
                        </label>

                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            class="w-full border rounded-lg px-4 py-2"
                            placeholder="student@example.com"
                            required
                        >
                    </div>

                    <div>
                        <label class="block font-semibold mb-2">
                            Mobile Number *
                        </label>

                        <input
                            type="text"
                            name="mobile_number"
                            value="{{ old('mobile_number') }}"
                            class="w-full border rounded-lg px-4 py-2"
                            placeholder="09123456789"
                            required
                        >
                    </div>

                    <div>
                        <label class="block font-semibold mb-2">
                            Date of Birth *
                        </label>

                        <input
                            type="date"
                            name="date_of_birth"
                            value="{{ old('date_of_birth') }}"
                            class="w-full border rounded-lg px-4 py-2"
                            required
                        >
                    </div>

                    <div>
                        <label class="block font-semibold mb-2">
                            Gender *
                        </label>

                        <select
                            name="gender"
                            class="w-full border rounded-lg px-4 py-2"
                            required
                        >
                            <option value="">Select Gender</option>
                            <option value="Male"
                                {{ old('gender') == 'Male' ? 'selected' : '' }}>
                                Male
                            </option>

                            <option value="Female"
                                {{ old('gender') == 'Female' ? 'selected' : '' }}>
                                Female
                            </option>
                        </select>
                    </div>

                    <div>
                        <label class="block font-semibold mb-2">
                            Program *
                        </label>

                        <select
                            name="program"
                            class="w-full border rounded-lg px-4 py-2"
                            required
                        >
                            <option value="">Select Program</option>

                            <option value="BS Information Technology"
                                {{ old('program') == 'BS Information Technology' ? 'selected' : '' }}>
                                BS Information Technology
                            </option>

                            <option value="BS Computer Science"
                                {{ old('program') == 'BS Computer Science' ? 'selected' : '' }}>
                                BS Computer Science
                            </option>

                            <option value="BS Information Systems"
                                {{ old('program') == 'BS Information Systems' ? 'selected' : '' }}>
                                BS Information Systems
                            </option>
                        </select>
                    </div>

                    <div>
                        <label class="block font-semibold mb-2">
                            Year Level *
                        </label>

                        <select
                            name="year_level"
                            class="w-full border rounded-lg px-4 py-2"
                            required
                        >
                            <option value="">Select Year Level</option>

                            <option value="1st Year"
                                {{ old('year_level') == '1st Year' ? 'selected' : '' }}>
                                1st Year
                            </option>

                            <option value="2nd Year"
                                {{ old('year_level') == '2nd Year' ? 'selected' : '' }}>
                                2nd Year
                            </option>

                            <option value="3rd Year"
                                {{ old('year_level') == '3rd Year' ? 'selected' : '' }}>
                                3rd Year
                            </option>

                            <option value="4th Year"
                                {{ old('year_level') == '4th Year' ? 'selected' : '' }}>
                                4th Year
                            </option>
                        </select>
                    </div>

                </div>

                {{-- Address --}}
                <div class="mt-6">

                    <label class="block font-semibold mb-2">
                        Address *
                    </label>

                    <textarea
                        name="address"
                        rows="4"
                        class="w-full border rounded-lg px-4 py-2"
                        placeholder="Complete address"
                        required
                    >{{ old('address') }}</textarea>

                </div>

                {{-- Profile Picture --}}
                <div class="mt-6">

                    <label class="block font-semibold mb-2">
                        Profile Picture *
                    </label>

                    <input
                        type="file"
                        name="profile_picture"
                        accept=".jpg,.jpeg,.png"
                        class="w-full border rounded-lg px-4 py-2"
                        required
                    >

                    <p class="text-sm text-gray-500 mt-2">
                        JPG, JPEG, or PNG only. Maximum file size: 2MB.
                    </p>

                </div>

                {{-- Buttons --}}
                <div class="mt-8 flex gap-4">

                    <button
                        type="submit"
                        class="bg-blue-700 hover:bg-blue-800
                               text-white font-bold px-6 py-3
                               rounded-lg"
                    >
                        Register Student
                    </button>

                    <a
                        href="{{ route('students.index') }}"
                        class="bg-gray-600 hover:bg-gray-700
                               text-white font-bold px-6 py-3
                               rounded-lg"
                    >
                        View Students
                    </a>

                </div>

            </form>

        </div>
    </div>
</div>

</body>
</html>