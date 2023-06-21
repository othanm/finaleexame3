<h1>edit post</h1>

<form action="{{route('posts.update',$posts->id)}}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="filed" id="" value="{{$posts->filed}}">
    <input type="text" name="type" id="" value="{{$posts->type}}">
    <button type="submit">update</button>
</form>
