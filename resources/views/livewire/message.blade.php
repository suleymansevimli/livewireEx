<div>
    @foreach($allUsers as $user)
        <p> isim  : {{$user->name}}</p>
        <p> email : {{$user->email}}</p>
        <p> şifre : {{$user->password}}</p>
    @endforeach
</div>
