
<header>
    <div class="container">
        <div class="logo-container">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
        </div>
        <div class="list-container">
            <ul>
                @foreach($headerLinks as $headerLink)
                <li>{{$headerLink}}</li>
                @endforeach
            </ul>
        </div>
    </div>
</header>