<a href="{{ route('courses.show', $course->id) }}" class="rounded-md bg-gray-100 hover:bg-gray-200 p-4">
    <article class="p-4 h-full flex flex-col">
        <header>
            <h3 class="font-semibold text-xl">
                {{ $course->title }}
            </h3>
        </header>
        <p class="font-normal mb-8 mt-2">
            {{ $course->description }}
        </p>
        <footer class="flex gap-2 justify-between text-sm font-semibold mt-auto">
            <div class="flex items-center gap-2">
                <x-icon name="film" class="size-4" />
                <span>{{ $course->lessons()->count() }} lessons</span>
            </div>
            <div class="flex items-center gap-2">
                <x-icon name="clock" class="size-4" />
                <span>{{ $course->length }}</span>
            </div>
        </footer>
    </article>
</a>
