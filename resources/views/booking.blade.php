@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-8">
            <div class="card my-5" style="border: 2px solid #7e179a">
                <div class="card-header bg-primary text-secondary text-center font-weight-bolder">{{ __('Выбор даты и времени') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                    <form class="form" method="POST" action="/addbooking">
                        {{ csrf_field() }}

                        <div class="row ">

                            <div class="form-group col-md-12 ui-widget d-flex justify-content-center align-items-center">
                                <label for="datepicker" class="mb-0">Дата: </label>
                                <input type="text" id="datepicker" name="datepicker" />
                            </div>

                            <div class="form-group col-md-12 d-flex justify-content-center align-items-center">
                                <fieldset>
                                    <label for="timebegin">Время начала:</label>
                                    <select name="timebegin" id="timebegin">
                                        <option>04:00</option>
                                        <option>05:00</option>
                                        <option disabled>06:00</option>
                                        <option>07:00</option>
                                        <option>08:00</option>
                                        <option>09:00</option>
                                        <option>10:00</option>
                                        <option>11:00</option>
                                        <option>12:00</option>
                                        <option>13:00</option>
                                        <option>14:00</option>
                                        <option>15:00</option>
                                        <option>16:00</option>
                                        <option>17:00</option>
                                        <option>18:00</option>
                                        <option>19:00</option>
                                        <option>20:00</option>
                                    </select>
                                </fieldset>
                            </div>

                            <div class="form-group col-md-12 d-flex justify-content-center align-items-center">
                                <fieldset>
                                    <label for="timeend">Время окончания:</label>
                                    <select name="timeend" id="timeend">
                                        <option>05:00</option>
                                        <option>6:00</option>
                                        <option>07:00</option>
                                        <option>08:00</option>
                                        <option>09:00</option>
                                        <option>10:00</option>
                                        <option>11:00</option>
                                        <option>12:00</option>
                                        <option>13:00</option>
                                        <option>14:00</option>
                                        <option>15:00</option>
                                        <option>16:00</option>
                                        <option>17:00</option>
                                        <option>18:00</option>
                                        <option>19:00</option>
                                        <option>20:00</option>
                                        <option>21:00</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mt-3">
                            <button type="submit" class="btn btn-secondary font-weight-bolder lobster text-primary">Бронировать</button>
                        </div>


                    </form>

                    <!-- <div class="col-md-12 col-lg-6 d-flex justify-content-center">
                            <div id="datepicker"></div>
                        </div> -->
                    <!-- <div class="col-md-12 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                        <div>

                        </div>
                        <div>

                        </div>
                    </div> -->


                    <!-- {{ __('You are logged in!') }} -->


                </div>
            </div>
        </div>
    </div>
</div>
@endsection