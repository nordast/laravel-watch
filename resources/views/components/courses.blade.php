<section class="w-full">
    <div class="flex flex-col gap-8 container pb-24 px-4">
        <h2 class="text-center font-bold text-4xl">
            {{ $title }}
        </h2>

        <div class="grid grid-cols-2 gap-4">

            @foreach($courses as $course)
                <x-course :$course />
            @endforeach

        </div>
    </div>
</section>
