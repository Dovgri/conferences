<link rel="stylesheet" href="{{mix('css/app.css')}}">
<form action="{{route('login')}}" method="POST">
    @csrf
    <div class="form-group">
        <label class="form-label" for = "title-input">Username</label>
        <input class="form-input" type="text" id="title-input" name="username" value="{{old('username')}}">
        @error('username')
        <p>{{$message}}</p>
        @enderror
    </div>
    <div class="form-group">
        <label class="form-label" for="password-input">Password</label>
        <input class="form-input" type="password" id="password-input" name="password" value="{{old('password')}}">
        @error('password')
        <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for="remember-input">Remember me</label>
        <input type="checkbox" id="remember-input" name="remember" value="1" {{old('remember')?'checked':''}}>
    </div>
    <div><input type="submit" value="Login"> </div>
</form>
