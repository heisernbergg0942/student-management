<div class="grid grid-cols-1 md:grid-cols-2 gap-5">

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
            Full Name
        </label>

        <input type="text"
               name="name"
               placeholder="Enter student name"
               class="w-full border border-gray-300 rounded-lg px-4 py-3">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
            Email
        </label>

        <input type="email"
               name="email"
               placeholder="Enter student email"
               class="w-full border border-gray-300 rounded-lg px-4 py-3">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
            Gender
        </label>

        <select name="gender"
                class="w-full border border-gray-300 rounded-lg px-4 py-3">
            <option value="">Select Gender</option>

            @foreach ($genders as $gender)
                <option value="{{ $gender['name'] }}">
                    {{ $gender['name'] }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
            Class
        </label>

        <input type="text"
               name="class"
               placeholder="Example: Laravel A"
               class="w-full border border-gray-300 rounded-lg px-4 py-3">
    </div>

</div>