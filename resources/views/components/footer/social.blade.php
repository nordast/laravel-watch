<ul class="flex gap-4">
    @foreach(config('project.social_networks') as $name => $link)
        <li>
            <a href="{{ $link }}" target="_blank">
                <x-icon :$name class="size-8 fill-white hover:fill-purple-200" />
            </a>
        </li>
    @endforeach
</ul>
