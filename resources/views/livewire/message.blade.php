<div>
    <table border="1" style="margin:0 auto">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
        </tr>
        @foreach($allUsers as $user)
            <tr wire:poll.750ms wire:click="delete({{$user->id}})">
                <td>{{$user['id']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['email']}}</td>
            </tr>
        @endforeach
    </table>
    {{$status}}
    @push('scripts')
        <script>
            @if($status == 'deleteOk')
                alert('test')
            @endif
        </script>
    @endpush
</div>
