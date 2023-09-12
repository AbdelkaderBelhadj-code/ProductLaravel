<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <div style="border: 3px solid #000000">
    <h2>Register</h2>
    <form action="/register" method="POST">
        @csrf
        <input name="name" type="text" placeholder="name" value="{{ old('name') }}">
        @error('name')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <input name="email" type="text" placeholder="email" value="{{ old('email') }}">
        @error('email')
        <p class="text-danger">{{ $message }}</p>
        @enderror   
        <input name="password"type="password" placeholder="password"  value="{{ old('password') }}">
        @error('password')
        <p class="text-danger">{{ $message }}</p>
        @enderror  
        <button>Register</button>


    </form>
    
    </div>
</body>
</html>