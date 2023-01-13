
<header>
    <div class="container">
        <div class="logo-container">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
        </div>
        <div class="list-container">
            <ul class="header-list">
            @foreach($links as $link)
            <li>{{$link}}</li>
            @endforeach
            </ul>
        </div>
    </div>
</header>