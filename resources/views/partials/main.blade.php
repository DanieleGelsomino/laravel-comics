<main>
    <div class="container-comics">
        <div class="content-dc-comics">
                @foreach ($comics as $comic)
                    <div class="comics-card">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" />
                        <p>{{ $comic['title'] }}</p>
                    </div>
                @endforeach
            </div>
            <div class="container-btn">
                <button>LOAD MORE</button>
            </div>
    </div>
</main>
