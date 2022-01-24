
<div class="logo">
    <a href="{{ route('home') }}">logo</a>
</div>
<h1>Ecco i viaggi disponibili:</h1>
<section class="travell-ctn">
    @foreach ( $viaggi as $viaggio)
        <h3>Travel name: {{ $viaggio->travel_name }}</h3>
        <p>Data di andata: {{ $viaggio->date}} |
            <span>Data di ritorno: {{ $viaggio->date_return}}</span>
        </p>
        <p>
            Prezzo totale a persona: <strong>{{$viaggio->amount}} €</strong>
        </p>
        <br>
    @endforeach
</section>