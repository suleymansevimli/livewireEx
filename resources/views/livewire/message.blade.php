<div>
    <table border="1" style="margin:0 auto">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
        </tr>
        @foreach($allUsers as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['email']}}</td>
            </tr>
        @endforeach
    </table>
</div>
