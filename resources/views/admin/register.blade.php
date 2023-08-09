<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <h2>Formulaire d'inscription</h2>

    <form action="{{ route('register') }}" method="post">
        @csrf
     
     <input type="text" placeholder="NOM:" name="name" required><br><br>
     
     <input type="text" placeholder="PRENOM:" name="lastname" required><br><br>
     
     <input type="number" placeholder="AGE:" name="age" required><br><br>
     
     <input type="email" placeholder="EMAIL:" name="email" required><br><br>
     
     <input type="password" placeholder="PASSWORD:" name="password" required><br><br>
     
        <input type="submit" value="enregistrer">
    </form>
    
    @foreach($users as $user)

    {{  $user->name}} &nbsp
    {{  $user->lastname}} &nbsp
    {{  $user->email}} <br>

    @endforeach


</body>
</html>