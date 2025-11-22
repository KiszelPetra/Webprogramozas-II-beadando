@extends('front.layout.pages-layout2')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Parkok listája')
@section('content')

<!--One --><section id="One" class="wrapper style3" ><div class="inner">
					<header class="align-center">
                        <p>Tanösvény adatbázis</p>
						<h2>Adatok</h2>
					</header>
                </div>
            </section>

    @php
    $minHossz = $adatok->min('hossz');
    $maxHossz = $adatok->max('hossz');
@endphp

<div class="row" style="margin-bottom: 30px; display:flex; align-items:center;">

    <!-- Kereső bal oldalon -->
    <div class="col-6 col-12-small" style="padding-right: 15px;">
        <input 
            type="text" 
            id="searchInput"
            placeholder="Keresés név, település vagy nemzeti park szerint..."
            style="width:120%; padding: 24px; border-radius: 12px;"
        >
    </div>

    <!-- Csúszka jobb oldalon -->
    <div class="col-6 col-12-small" style="text-align:right; padding-left: 60%;">
        
        <label for="rangeInput" style="display:block; font-weight:bold;">
            Hossz (km): <span id="rangeValue">{{ $maxHossz }}</span> km
        </label>

        <input 
            type="range" 
            id="rangeInput"
            min="{{ $minHossz }}"
            max="{{ $maxHossz }}"
            value="{{ $maxHossz }}"
            step="0.1"
            style="width:100%;"
        >
    </div>

</div>



            <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Tanösvény neve</th>
                        <th>Hossz (km)</th>
                        <th>Állomások</th>
                        <th>Idő (óra)</th>
                        <th>Idegenvezetés</th>
                        <th>Település</th>
                        <th>Nemzeti park</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($adatok as $sor)
                    <tr>
                        <td>{{ $sor->ut_nev }}</td>
                        <td>{{ $sor->hossz }}</td>
                        <td>{{ $sor->allomas }}</td>
                        <td>{{ $sor->ido }}</td>
                        <td>
                            @if($sor->vezetes == 0)
                                Van
                            @else
                                Nincs
                            @endif
                        </td>
                        <td>{{ $sor->telepules_nev }}</td>
                        <td>{{ $sor->np_nev }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <script>
document.addEventListener('DOMContentLoaded', () => {
    const rows = document.querySelectorAll('table tbody tr');
    const searchInput = document.getElementById('searchInput');
    const rangeInput = document.getElementById('rangeInput');
    const rangeValue = document.getElementById('rangeValue');

    function filter() {
        const search = searchInput.value.toLowerCase();
        const maxHossz = parseFloat(rangeInput.value);

        rows.forEach(row => {
            const nev = row.children[0].textContent.toLowerCase();
            const hossz = parseFloat(row.children[1].textContent);
            const telepules = row.children[5].textContent.toLowerCase();
            const np = row.children[6].textContent.toLowerCase();

            const matchesSearch =
                nev.includes(search) ||
                telepules.includes(search) ||
                np.includes(search);

            const matchesRange = hossz <= maxHossz;

            row.style.display = (matchesSearch && matchesRange) ? '' : 'none';
        });
    }

    searchInput.addEventListener('input', filter);

    rangeInput.addEventListener('input', () => {
        rangeValue.textContent = rangeInput.value;
        filter();
    });
});
</script>


@endsection