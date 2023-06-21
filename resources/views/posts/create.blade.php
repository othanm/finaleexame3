<h1>create new user</h1>

<form action="{{route('posts.store')}}" method="post">
@csrf
<input type="text" name="filed" id="" placeholder="put your filed">
<input type="text" name="type" id="" placeholder="put your type">
<button type="submit">submit</button>
</form>
