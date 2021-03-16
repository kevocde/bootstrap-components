<nav {{ $attributes->merge(['id' => 'navbar-' . $uuid, 'class' => 'navbar navbar-expand-lg']) }}>
    <div class="container-fluid">
        {{ $title }}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse-navbar-{{ $uuid }}" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapse-navbar-{{ $uuid }}">
            <div class="nav navbar-nav ml-auto">
                @foreach($links as $link)
                    <a class="nav-link{{ $link['active'] ? ' active' : '' }}" href="{{ $link['url'] }}">{!! $link['label'] !!}</a>
                @endforeach
            </div>
        </div>
    </div>
</nav>
