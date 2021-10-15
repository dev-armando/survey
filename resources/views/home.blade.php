@extends('layouts.app')

@section('content')

<div class="container container-login"  >

    <div class="row justify-content-center align-items-center minh" style="height: 100% " >
        <div class="col-md-12" >
           
            <div id=app class="col-md-12"  >
				

            	<router-view></router-view></div>
            </div>
             
        </div>
    </div>
</div>


@endsection
