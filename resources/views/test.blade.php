<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEST</title>
</head>
<body>
    
    {{-- <h1>About Me: {{ $name}}</h1> --}}
    <h1>Выбор времени:</h1>
    {{-- <select name="timebegin" id="timebegin" class="custom-select" >
        @foreach ($rents as $data)
            <option value="{{ $data['time_begin']}}">{{ $data['time_begin']}}</option>
            
        @endforeach
    </select> --}}
    <div class="form-group col-md-12 d-flex justify-content-center align-items-center">
        <fieldset >
            <label for="timebegin">Время начала:</label>
            <select name="timebegin" id="timebegin" class="custom-select" >
                @php
                    $dt = "7:00:00";
                @endphp

                @foreach ($rents as $data)
                    <option  value="{{ $data['time_begin']}}" @if( $data['time_begin'] == $dt) selected @endif>{{ $data['time_begin']}}</option>  
                @endforeach
            </select>
            <label for="timebegin">Зарезервировано:
                <span style="display: inline;">
                    @foreach ($rents as $data)
                        <option disabled value="{{ $data['time_begin']}}">{{ $data['time_begin']}}</option>  
                    @endforeach
                </span>
            </label>

        </fieldset>
        
    </div>
    <div class="form-group col-md-12 d-flex justify-content-center align-items-center">
        <fieldset>
            <label for="timeend">Время окончания:</label>
            <select name="timeend" id="timeend">
                @foreach ($rents as $data)
                    <option value="{{ $data['time_end']}}">{{ $data['time_end']}}</option>  
                @endforeach
            </select>
        </fieldset>
        {{-- @php
            dd($rents);
        @endphp --}}
        {{-- @php
            dd($u);
        @endphp --}}
        @php

        foreach ($users as $user)
            {
                var_dump($user->email);
            }        
        @endphp
                {{-- {{$users}} --}}
    </div>
</body>
</html>