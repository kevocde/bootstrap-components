<div {{ $attributes->merge(['class' => 'card']) }}>
    @if(isset($header)) <div class="card-header">{!! $header !!}</div> @endif
    @if(isset($image)) {!! $image !!} @endif
    <div class="card-body">
        @if(isset($title)) <h5 class="card-title">{!! $title !!}</h5> @endif
        @if(isset($subtitle)) <h6 class="card-subtitle mb-2 text-muted">{!! $subtitle !!}</h6> @endif
        @if(isset($image))
            <p class="card-text">{!! $content !!}</p>
        @else
            {!! $content !!}
        @endif
    </div>
    @if(isset($footer)) <div class="card-footer">{!! $footer !!}</div> @endif
</div>
