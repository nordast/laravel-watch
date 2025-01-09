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
