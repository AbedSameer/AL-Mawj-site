<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <title>My Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
    </head>

   
<body>
<div id="postsList">
    @foreach($posts as $name)
        <div id="postInList">
            <form  method="post" action="{{route('AdminPostEdit')}}">
                {{ csrf_field() }}
                {{ method_field('POST') }}
                <?php $name=explode('.',$name)[0]?>
                    <div class="postTitle"> {{$name}} </div>
                    <button type="submit" name="editPost" id="editPost" value="{{$name}}" >تعديل</button>

            </form>

            <form action=" {{route('DeletePost')}} " method="post" style="display: inline-block;">
                <button type="submit" name="deletePost" id="deletePost" value="{{$name}}">حذف</button>
            </form>
        </div>
    @endforeach

</div>
</body>
</html>
