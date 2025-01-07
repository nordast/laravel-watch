<section>
    <div class="flex flex-col gap-4 items-center justify-center px-4 min-h-screen py-40">

        <h1 class="font-extrabold text-5xl ">
            Learn Web Development
        </h1>

        <p class="text-xl font-medium">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </p>

        <div class="flex gap-2">
            <a href="{{ route('register') }}" class="whitespace-nowrap px-4 py-2 bg-violet-500 text-white rounded-md font-semibold hover:bg-violet-600">
                Get Started
            </a>
            <a href="{{ route('courses.index') }}" class="whitespace-nowrap px-4 py-2 bg-gray-100 rounded-md font-semibold hover:bg-gray-200">
                Explore Courses
            </a>
        </div>

    </div>
</section>
