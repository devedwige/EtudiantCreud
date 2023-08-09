@extends("layout.master")


@section("contenu")

        @if(session()->has("success"))

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
        <form style="width:65%;" method="post" action="{{route('etudiant.ajouter')}}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NOM</label>
                <input type="text" class="form-control" name="nom">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">PRENOM</label>
                <input type="text" class="form-control" name="prenom">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">DATE</label>
                <input type="date" class="form-control" name="date">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">CLASSE</label>
                <select class="form-control" name="classe_id">
                    <option value=""></option>
                    @foreach ($classes as $classe)
                    <option value="{{$classe->id}}">{{ $classe->libelle }}</option>
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
