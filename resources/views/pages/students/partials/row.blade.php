<tr class="border-t border-gray-100 hover:bg-gray-50 transition">

    <td class="px-6 py-4 text-sm text-gray-700">
        {{ $loop->iteration }}
    </td>

    <td class="px-6 py-4 text-sm font-medium text-gray-800">
        {{ $student['name'] }}
    </td>

    <td class="px-6 py-4 text-sm text-gray-700">
        {{ $student['email'] }}
    </td>

    <td class="px-6 py-4 text-sm text-gray-700">
        {{ $student['gender'] }}
    </td>

    <td class="px-6 py-4 text-sm text-gray-700">
        {{ $student['class'] }}
    </td>

    <td class="px-6 py-4 text-sm">
        @include('pages.students.partials.status', [
            'status' => $student['status']
        ])
    </td>

    <td class="px-6 py-4 text-center">
        <a href="{{ route('students.show', $student['id']) }}"
           class="text-primary hover:text-secondary font-medium">
            Detail
        </a>
    </td>

</tr>