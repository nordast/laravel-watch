<x-layout>
    <x-hero/>

    <section class="w-full">
        <div class="flex flex-col gap-8 container pb-24 px-4">
            <h2 class="text-center font-bold text-4xl">
                Latest courses
            </h2>

            <div class="grid grid-cols-2 gap-4">

                @foreach($courses as $course)
                    <x-course.card :$course />
                @endforeach

            </div>

        </div>
    </section>
</x-layout>
