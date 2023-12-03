<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Contact Us Whenever you need</h1>

    <form action="{{ route('contact') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="">Message</label>
            <textarea type="text" class="form-control" name="message"></textarea>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
