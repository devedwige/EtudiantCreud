@extends("layout.master")


@section("contenu")

  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h2 class="border-bottom pb-2 mt-4">Liste des utilisateurs </h2>
    {{-- {{ Auth::user()->firstname }} --}}
    <div class="mt-4">
      <div class="d-flex justify-content-between mb-2">
        {{ $etudiants->links() }}

      <a href="{{route('etudiant.create')}}" class="btn btn-primary">Ajouter un utilisateur </a>
      </div>
      <div class="d-flex justify-content-between mb-2">
      <form action="{{route('logout')}}" method="post">
          @csrf
          <button type="submit" class="btn btn-danger">Deconnexion</button>
      </form>
    </div>

      @if(session()->has("successDelete"))
      <div class="alert alert-success">
          <h3>{{session()->get('successDelete')}}</h3>
      </div>
      @endif

    <table class="table table-bordered table-hover mt-2">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NOM</th>
      <th scope="col">PRENOM</th>
      <th scope="col">DATE</th>
      <th scope="col">CLASSE</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($etudiants as $etudiant)

    <tr>
      <th scope="row">{{ $loop->index +1 }}</th>
      <td>{{ $etudiant->nom }}</td>
      <td>{{ $etudiant->prenom }}</td>
      <td>{{ $etudiant->date }}</td>
      <td>{{ $etudiant->classe->libelle}}</td>

      <td>
        <a href="{{ route('etudiant.edit', ['etudiant'=>$etudiant->id])}}" class="btn btn-info">Editer</a>
        <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez vous vraiment supprimer cet utilisateur?')){document.getElementById('form-{{$etudiant->id}}').submit() }">Supprimer</a>

        <form id="form-{{$etudiant->id}}" action="{{route('etudiant.supprimer',
         ['etudiant'=>$etudiant->id])}}" method="post">

            @csrf
            <input type="hidden" name="_method" value="delete">

        </form>
      </td>
    </tr>
    @endforeach
  </tbody>

</table>
    </div>
    </div>
  </div>

@endsection
