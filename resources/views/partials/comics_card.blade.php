<div class="jumbotron"></div>
<div class="container-single-card">
    <div class="line-card">
        <img class="card" src="{{ $comic['thumb'] }}" alt="">
    </div>
    <div class="bar-blue"></div>
    <div class="detail-card">
        <h2 class="title-comic">{{ $comic['title'] }}</h2>
        <div class="status-general">
            <div class="price-availability">
                <span>U.S Price: <span class="price">{{ $comic['price'] }}</span></span>
                <span>AVAILABLE</span>
            </div>
            <div class="label-check">
                <span class="check-status">Check Availability &#9662;</span>
            </div>
        </div>
        <p class="description">{{ $comic['description'] }}</p>
        <div class="adv">
            <h5>ADVERTISEMENT</h5>
            <img src="/images/adv.jpg" alt="advertisement">
        </div>
    </div>


</div>
