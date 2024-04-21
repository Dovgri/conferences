<div class="article">
    <div class="tile">
        <div class="tile-icon">
            <div class="example-tile-icon">
                <i class="icon icon-file centered"></i>
            </div>
        </div>
        <div class="tile-content">
            <p class="tile-title">{{$article['title']}}</p>
            <p class="tile-subtitle">{{$article['content']}}</p>
        </div>
        @auth
            <div class="tile-action">
                <a href="{{route('articles.edit',['article'=>$article['id']])}}"><button class="btn btn-primary" >{{__('Edit')}}</button></a>
                <form action="{{route('articles.destroy', ['article'=>$article['id']])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-primary" type="submit">{{__('Delete')}}</button>
                </form>
            </div>
        @endauth
    </div>
</div>

