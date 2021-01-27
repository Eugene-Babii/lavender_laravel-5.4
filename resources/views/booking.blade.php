@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-8">
            <div class="card my-5">
                <div class="card-header bg-primary text-white text-center font-weight-bolder">{{ __('Выбор даты и времени') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="row">
                        <form>
                            <div class="ui-widget">
                                <label for="datepicker">Дата: </label><input type="text" id="datepicker"></input>
                            </div>
                        </form>

                        <!-- <div class="col-md-12 col-lg-6 d-flex justify-content-center">
                            <div id="datepicker"></div>
                        </div> -->
                        <div class="col-md-12 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                            <div>
                                <fieldset>
                                    <label for="timebegin">Время начала:</label>
                                    <select name="timebegin" id="timebegin">
                                        <option>4-00</option>
                                        <option>5-00</option>
                                        <option>6-00</option>
                                        <option>7-00</option>
                                        <option>8-00</option>
                                        <option>9-00</option>
                                        <option>10-00</option>
                                        <option>11-00</option>
                                        <option>12-00</option>
                                        <option>13-00</option>
                                        <option>14-00</option>
                                        <option>15-00</option>
                                        <option>16-00</option>
                                        <option>17-00</option>
                                        <option>18-00</option>
                                        <option>19-00</option>
                                        <option>20-00</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div>
                                <fieldset>
                                    <label for="timeend">Время окончания:</label>
                                    <select name="timeend" id="timeend">
                                        <option>5-00</option>
                                        <option>6-00</option>
                                        <option>7-00</option>
                                        <option>8-00</option>
                                        <option>9-00</option>
                                        <option>10-00</option>
                                        <option>11-00</option>
                                        <option>12-00</option>
                                        <option>13-00</option>
                                        <option>14-00</option>
                                        <option>15-00</option>
                                        <option>16-00</option>
                                        <option>17-00</option>
                                        <option>18-00</option>
                                        <option>19-00</option>
                                        <option>20-00</option>
                                        <option>21-00</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <!-- {{ __('You are logged in!') }} -->

                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" class="btn btn-secondary font-weight-bolder">Оплатить</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection