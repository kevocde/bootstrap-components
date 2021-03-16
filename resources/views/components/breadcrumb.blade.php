<nav {{ $attributes->merge(['id' => 'breadcrumb-' . $uuid, 'aria-label' => 'breadcrumb']) }}>
    <ol class="breadcrumb">
        @foreach($getLinkeableItems() as $link)
            <li
                class="breadcrumb-item @if($link['active']) active @endif"
                @if($link['active']) aria-current="page" @endif
            >
                @if($loop->last)
                    {!! $link['label'] !!}
                @else
                    <a href="{{ $link['url'] }}">{!! $link['label'] !!}</a>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
