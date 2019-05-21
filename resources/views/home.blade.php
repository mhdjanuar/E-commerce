@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    @if(auth()->user()->level_id == 1)
                      <h3>Hallo Admin</h3>
                    @endif
                    @if(auth()->user()->level_id == 2)
                      <h3>Hallo User</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
