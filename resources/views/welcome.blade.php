@extends('navbar')

@section('content')

            <div class="container">
            <h2>Stacked form</h2>
            <form action="login" method="post">
                @csrf
                <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="/register" role="button">Registration</a>
            </form>
            </div>

@endsection
</body>
</html>