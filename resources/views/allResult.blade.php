@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form class="" action="" method="post">
                {{ csrf_field() }}

                @foreach ($users as $user)
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $user->id }}) {{ $user->name }}</div>
                        <div class="panel-body">
                            <p>Mendapatkan Nilai {{ $user->result->score }}</p>
                            <br>
                        </div>
                    </div>
                @endforeach
            </form>
        </div>
    </div>
</div>
@endsection
