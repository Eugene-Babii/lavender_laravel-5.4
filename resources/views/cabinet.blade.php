@extends('layouts.layout')

@section('content')
<div class="bg-primary">
    <h1 class="text-center font-weight-bold text-secondary py-3">Мои бронирования</h1>
    <!-- <ul>
        @foreach ($rents as $rent)
        <li>{{ date("d.m.Y",strtotime($rent->date))}}</li>
        @endforeach
    </ul> -->

    <table class="table table-striped">
        <thead class="secondary">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Email</th>
                <th scope="col">Дата</th>
                <th scope="col">Время начала</th>
                <th scope="col">Время окончания</th>
                <th scope="col">Оплачено</th>
                <th scope="col">Сумма</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rents as $rent)
            <tr>
                <th scope="row">{{$loop->index+1}}</th>
                <td>{{$rent->name}}</td>
                <td>{{$rent->email}}</td>
                <td>{{$rent->date}}</td>
                <td>{{$rent->time_begin}}</td>
                <td>{{$rent->time_end}}</td>
                <td>{{$rent->is_paid}}</td>
                <td>{{$rent->sum}}</td>
                <td>

                    <button type="submit" class="btn btn-danger btn-sm delete-btn">
                        <a href='delete/{{$rent->rent_id}}'>
                            <!-- <i class="fas fa-trash"></i> -->
                            Удалить
                        </a>

                    </button>

                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection