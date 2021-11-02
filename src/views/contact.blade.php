<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <title>Contact Us</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1 style="text-align: center;">Contact Us Any Time</h1>
            <form action="{{ route('contact.send') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" placeholder="Name" name="name">
                </div>
                <div class="form-group">
                    <label for="name">Phone:</label>
                    <input type="text" class="form-control" placeholder="Phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" class="form-control" placeholder="Emad" name="email">
                </div>
                <br>
                <div class="form-group text-center">
                    <label for="name">Message:</label>
                    <textarea placeholder="Message" name="message" rows="4" cols="50"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Send</button>
            </form>
        </div>
    </div>
</body>
</html>
