<h1>show all the users</h1>

<table>
    <th>id</th>
    <th>filed</th>
    <th>type</th>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->filed}}</td>
            <td>{{$post->type}}</td>
            <td>
            <td>
                <a href="{{route('posts.edit',$post->id)}}">edite</a>
                <form action="{{route('posts.destroy',$post->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button value="delete">delete</button>
                </form>
            </td>
        </tr>
    @endforeach

</table>
