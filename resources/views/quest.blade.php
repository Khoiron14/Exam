@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form class="" action="" method="post">
                {{ csrf_field() }}

                @foreach ($quest as $id => $quest)
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $id+1 }}. {{ $quest->question }}</div>
                        <div class="panel-body">
                            <input type="radio" name="answer{{ $quest->id }}" value="a" required> {{ $quest->a }}<br>
                            <input type="radio" name="answer{{ $quest->id }}" value="b" > {{ $quest->b }}<br>
                            <input type="radio" name="answer{{ $quest->id }}" value="c" > {{ $quest->c }}<br>
                            <br>
                        </div>
                    </div>
                @endforeach
                <div class="form-group">
                    <input type="submit" class="btn btn-sm btn-primary" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
