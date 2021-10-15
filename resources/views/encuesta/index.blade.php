@extends('layouts.app')

@section("content")
 <section>
 	<div>
 		<h3> Series </h3>
 	</div>
 </section>



@endsection




@section('scripts')

<script>
	function goLink(id ){
		

		var url = '/serie/' + id;

		window.location.href = url; 
		

	//axios({ method: 'POST', url:url ,  headers: {'Access-Control-Allow-Origin': '*'} }
		//) .then((r) => { console.log(r); }).catch((error) => { console.log(error);  }); 


	}
</script>


@endsection