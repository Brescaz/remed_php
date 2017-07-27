@foreach($projets_in_blade as $one_projet)
<div class="content">
                <div class="title m-b-md">
                    {{$one_projet->titre_projet}}
                </div>

                <div class="links">
                    
                    {{$one_projet->id_user}}
                    {{$one_projet->id_projet}}
					{{$one_projet->content}}
					
                    
                </div>
            </div>
	
	
	<br>

@endforeach

	