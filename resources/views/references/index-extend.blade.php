<li>
    {{ $reference->name }}
    @if ($reference->children->isNotEmpty())
        <ul>
            @foreach ($reference->children as $child)
                @include('references.index-extend', ['reference' => $child])
            @endforeach
        </ul>
    @endif
</li>