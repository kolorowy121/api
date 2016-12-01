@extends("layout")

@section("content")

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