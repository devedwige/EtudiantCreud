@extends("layout.master")
@section("contenu")
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h1 class="border-bottom pb-2 mt-4">Edition d'un utilisateur</h1>
    <div class="mt-4">

        @if(session()->has("success"))
        <div class="alert alert-success">
            <h3>{{session()->get('success')}}</h3>
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form style="width:65%;" method="post" action="{{route('etudiant.update', ['etudiant'=>$etudiant->id])}}">
            @csrf

            <input type="hidden" name="_method" value="put">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NOM</label>
                <input type="text" class="form-control" name="nom" value="{{$etudiant->nom}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">PRENOM</label>
                <input type="text" class="form-control" name="prenom" value="{{$etudiant->prenom}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">DATE</label>
                <input type="date" class="form-control" name="date" value="{{$etudiant->date}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">CLASSE</label>
                <select class="form-control" name="classe_id">
                    <option value=""></option>
                    @foreach ($classes as $classe)

                    @if($classe->id == $etudiant->classe_id)
                    <option value="{{$classe->id}}" selected>{{ $classe->libelle }}</option>
                    @else
                    <option value="{{$classe->id}}">{{ $classe->libelle }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="{{route('etudiant')}}" class="btn btn-danger">Annuler</a>
        </form>

      </div>

    </div>
    </div>
  </div>

@endsection
