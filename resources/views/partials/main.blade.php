<main>
    <!-- Sezione Comics con cards -->
    <div class="container-comics">
        <div class="label-series">CURRENT SERIES</div>
        <div class="content-dc-comics">
            @foreach ($comics as $index => $comic)
                <div class="comics-card">
                    <a href="/detail/{{ $index }}">
                        <div class="img-box">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" />
                        </div>

                        <p>{{ $comic['title'] }}</p>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="container-btn">
            <button>LOAD MORE</button>
        </div>
    </div>
</main>
