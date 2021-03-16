<div {{ $attributes->merge(['id' => 'alert-' . $uuid, 'class' => 'alert alert-' . $type, 'role' => 'alert']) }}>
    {!! $content !!}
    @if($isDismissed())
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    @endif
</div>
