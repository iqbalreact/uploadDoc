<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <form action="{{route('addPenilaian')}}" method="POST">
        <div class="form-group">
            <label for="exampleFormControlSelect2">Daftar Sub</label>
            <select class="form-control" name="daftar_sub_id" id="exampleFormControlSelect2">
                <option value=""> Pilih </option>
                @if (count($daftarsubs) != 0)
                @foreach ($daftarsubs as $daftarsub => $daftar)
                    <option value="{{$daftar->id}}">{{$daftar->nama_daftar}}</option>
                @endforeach
                @else                
                @endif
            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect2">Pertanyaan</label>
            <select class="form-control" name="pertanyaan_id" id="exampleFormControlSelect2">
                <option value=""> Pilih </option>
                @if (count($pertanyaans) != 0)
                @foreach ($pertanyaans as $pertanyaan => $daftar)
                    <option value="{{$daftar->id}}">{{$daftar->daftar_pertanyaan}}</option>
                @endforeach
                @else                
                @endif
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>

    </form>
    
</body>
</html>