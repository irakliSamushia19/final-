<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="/change" method="POST"></form>
        @csrf
        <input type="number" placeholder="which question" name="which">
        <input type="text" placeholder="question" name="question">
        <input type="text" placeholder="questionimage" name="questionimage">
        <input type="text" placeholder="answer1" name="answer1">
        <input type="text" placeholder="answer2" name="answer2">
        <input type="text" placeholder="answer3" name="answer3">
        <input type="text" placeholder="answer4" name="answer4">
        <input type="text" placeholder="correct" name="correct">
        <input type="number" placeholder="position" name="postition">
        <input type="text" placeholder="quizzname" placeholder="quizzname">
        <button>change</button>
</body>
</html>