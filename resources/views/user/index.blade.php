<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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

    <style>
        body{
            margin-top: 20px;
        }
        .sub-proses {
            margin-left: 25px;
        }
        
        /* td {
            margin : 0px;
            padding: 10px;
            align-content: center;
        } */

    </style>
</head>
<body>

    <div class="container">
        <form action="" method="POST">
            <div class="wrapper">
                <div class="main-title">
                    <h4>Proses</h4>
                    <hr>
                </div>
                @foreach ($penilaians as $item)
                <div class="proses">
                    <div class="proses-title">
                        <h5>{{$item->nama_sub}}</h5>
                    </div>
                </div>
                <div class="sub-proses">
                    <div class="sub-title">
                        <h5>{{$item->nama_daftar}}</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="pertanyaan">
                                <p>
                                    {{$item->daftar_pertanyaan}}
                                </p>  
                            </div>
                        </div>
                            
                            {{-- <div class="col-md-3">
                                <div class="evaluasi">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Program Evaluasi</label>
                                        <textarea name="prog_evaluasi" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="keterangan">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">keterangan</label>
                                        <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1"></label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <button type="submit">Upload</button>
        </form>
        {{-- <hr> --}}
    </div>
</body>
</html>
