@extends("layout")

@section("content")

    <form class="navbar-form" role="search" method="post">
        <div class="form-group">
            <input type="hidden" name="_method" value="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="query" class="form-control" placeholder="Dokąd chcesz się wybrać? Wpisz miasto.">
        </div>
        <button type="submit" class="btn btn-default">Szukaj</button>
    </form>

    @if(isset($data))
        <table class="table">
            <tr>
                <th>
                    Nazwa oferty
                </th>
                <th>
                    Państwo
                </th>
                <th>
                    Miasto
                </th>
                <th>
                    Cena
                </th>
                <th>
                    PRZEJDZ DO OFERTY
                </th>
            </tr>
            @foreach($data as $offer)
                <tr>
                    <td>
                        {{ isset($offer['o_name']) ? $offer['o_name'] : '' }}
                    </td>
                    <td>
                        {{ isset($offer['o_country']) ? $offer['o_country'] : '' }}
                    </td>
                    <td>
                        {{ isset($offer['o_city']) ? $offer['o_city'] : '' }}
                    </td>
                    <td>
                        {{ isset($offer['o_bprice']) ? $offer['o_bprice'] : '' }}
                    </td>
                    <td>
                        @if(isset($offer['o_link']))
                            <a href="/index.php/travel/page/{{$offer['o_link']}}/{{$offer['id']}}">OTWORZ!</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    @endif

@endsection