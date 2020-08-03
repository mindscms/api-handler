@extends('layouts.theme')
@section('content')
    <div class="sidebar-box" dir="rtl">
        <div class="row">
            <div>
                <div>
                    <h2>تعديل الفترة</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('timeslotsowners.index') }}"> الخلف</a>
                </div>
            </div>
        </div>

    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="sidebar-box" dir="rtl">
        {!! Form::model($timeslot, ['route' => ['timeslotsowners.update', $timeslot->id], 'method' => 'PATCH']) !!}
        <div class="row">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>الوقت من  </strong>
                        {!! Form::time('reservation_time_start', old('reservation_time_start', $timeslot->reservation_time_start),['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>إلى</strong>
                        {!! Form::time('reservation_time_end',old('reservation_time_end', $timeslot->reservation_time_end),['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>السعر</strong>
                        {!! Form::text('price', old('price', $timeslot->price), array('placeholder' => 'price','class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">إرسال</button>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
@endsection
