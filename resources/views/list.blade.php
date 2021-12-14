@extends('layout')

@section('content')
    <div class="bg-dark text-light">
        <ul style="list-style:none;">
            @forelse($list as $listItem)
            <?php  

            $idCancion = substr($listItem->link, 31, -19) . "utm_source=generator";
            $baseEmbed = substr($listItem->link, 0, 25) . "embed/track/";
            $enlaceEmbed = $baseEmbed . $idCancion;

            ?>
            <li class="p-2">{{ $listItem->song }} <a href="{{ $listItem->link }}" target="_blank">
                <span class="badge bg-primary rounded-pill text-light">Canción Completa</span>
                </a><br><small>Artista: {{ $listItem->name }}</small>
                <p>Escucha un estracto de la canción:</p>
                <iframe src=<?php echo $enlaceEmbed ?> width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                @auth
                <form action="{{ route('destroy', $listItem->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger"><i class="fa fa-times">Eliminar Canción</i></button>
                </form>
                @endauth
            </li>
            
            @empty
                <li>No hay canciones</li>
            @endforelse
        </ul>
    </div>
    
@endsection