@switch($status)

    @case('Active')
        <span class="px-3 py-1 rounded-full text-xs bg-green-100 text-green-700">
            Active
        </span>
        @break

    @case('Pending')
        <span class="px-3 py-1 rounded-full text-xs bg-yellow-100 text-yellow-700">
            Pending
        </span>
        @break

    @case('Inactive')
        <span class="px-3 py-1 rounded-full text-xs bg-red-100 text-red-700">
            Inactive
        </span>
        @break

    @default
        <span class="px-3 py-1 rounded-full text-xs bg-gray-100 text-gray-700">
            Unknown
        </span>

@endswitch