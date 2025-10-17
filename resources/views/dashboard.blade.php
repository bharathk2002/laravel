<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f8fc;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 50px;
        }

        h1 {
            color: #333;
        }

        form {
            background: #fff;
            padding: 25px 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            width: 360px;
        }

        div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #444;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
            resize: none;
        }

        input:focus, textarea:focus {
            border-color: #007bff;
        }

        button {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            padding: 10px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .success {
            color: green;
            margin-bottom: 10px;
        }

        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <h1>Contact Us</h1>
    <h3>{{ Auth::user()->name }}</h3>
    <h3>{{ Auth::user()->email}}</h3>
        @error('firstname')
                <div class="error">{{ $message }}</div>
            @enderror

    <form action="{{ route('dashboard') }}" method="POST">
        @csrf

        <div>
            <label for="name">Your First Name</label>
            <input type="text" name="firstname" id="firstname" value="{{ old('firstname') }}" required>

        </div>
        <div>
            <label for="name">Your Last Name</label>
            <input type="text" name="lastname" id="lastname" value="{{ old('lastname') }}" required>

        </div>
        <div>
            <label for="email">Mobile Number</label>
            <input type="email" name="number" id="number" value="{{ old('number') }}" required>
        </div>
        <div>
            <label for="email">Job Role</label>
            <input type="email" name="role" id="role" value="{{ old('role') }}" required>
        </div>
        <div>
            <label for="message">Your Message</label>
            <textarea name="message" id="message" rows="5" required>{{ old('message') }}</textarea>

        </div>

        <button type="submit">Send Message</button>
    </form>

</body>
</html>

</html>
