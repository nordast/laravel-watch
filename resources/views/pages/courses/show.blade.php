<x-layout>
    <section class="pt-32 px-10">
        <div class="flex flex-col items-center gap-8 container pb-24">
            <h1 class="text-center font-extrabold text-5xl">{{ $course->title  }}</h1>

            <div class="flex gap-6">
                <div class="">
                    <article class="flex flex-col gap-4 sticky top-24">
                        <header>
                            <h2 class="text-lg font-semibold">
                                Last Updated: {{ $course->updated_at->format('M d, Y') }}
                            </h2>
                        </header>

                        <p>{{ $course->description }}</p>

                        <footer class="flex gap-2">
                            <a href="#" class="grow text-center whitespace-nowrap rounded-md font-semibold px-4 py-2 bg-violet-500 text-white hover:bg-violet-600">
                                Start Watch
                            </a>
                            <a href="#" class="grow text-center whitespace-nowrap rounded-md font-semibold px-4 py-2 bg-gray-100  hover:bg-gray-200">
                                Source Code
                            </a>
                        </footer>
                    </article>
                </div>

                <div class="flex grow flex-col gap-4 ">
                    <h3 class="text-lg font-semibold text-right">
                        18 lessons &middot; 12h 25min
                    </h3>

                    <div class="flex flex-col gap-4">
                        @foreach (range(1, 18) as $i)
                            <a href="#" class="flex flex-col gap-2 p-4 rounded-md bg-gray-100 hover:bg-gray-200">
                                <div class="flex gap-2 justify-between font-mono">
                                    <span class="text-sm">{{ $i }}</span>
                                    <span class="text-sm text-gray-600">5m 30sec</span>
                                </div>

                                <h3 class="font-semibold">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, voluptas?
                                </h3>
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
