@foreach($projets_in_blade as $one_projet)
	{{$one_projet->id_user}}
	: {{$one_projet->id_projet}}
	: {{$one_projet->content}}
	: {{$one_projet->titre_projet}}

	@endforeach