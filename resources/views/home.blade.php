@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- <div class="col-md-10 col-md-offset-2"> -->
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="col-md-12">
               
               
                        <!-- Chiamo l'elemento Vue--> 
                        <mappa></mappa>

                    </div>

                </div>
            </div>
        </div>
           {{--  <div class="col-md-6" col-md-offset-2>
                You are logged in!
            <mappa></mappa>
            </div> --}}

         

    </div>
</div>
@endsection
