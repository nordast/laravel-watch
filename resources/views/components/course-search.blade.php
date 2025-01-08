<form action="{{ route('courses.index')  }}">
    <div class="flex gap-2">
        <div class="flex-grow">
            <input
                name="search"
                value="{{ request('search') }}"
                type="search"
                placeholder="Search for courses"
                class="w-full rounded-md border-gray-300 focus:border-violet-300 focus:ring-violet-200 focus:ring-opacity-50">
        </div>

        <button class="rounded-md px-4 bg-violet-500 hover:bg-violet-600">
            <x-icon name="search" class="size-6 fill-white" />
        </button>
    </div>
</form>
