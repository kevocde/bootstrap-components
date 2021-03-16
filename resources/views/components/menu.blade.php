<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        {{ $logo }}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar{{ $uuid }}" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar{{ $uuid }}">
            <div class="nav navbar-nav ml-auto">
                @foreach($items as $item)
                    <a class="nav-link{{ $item['active'] ? ' active' : '' }}" href="{{ $item['url'] }}">{!! $item['label'] !!}</a>
                @endforeach
            </div>
        </div>
    </div>
</nav>
