<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        @csrf
        <input type="text" placeholder="quizz name" name="quizname">
        <input type="text" placeholder="image" name="image">
        <input type="text" placeholder="description" name="description">
        <button type="submit" name="form1">add quizz</button>
    </form>


    <form method="POST">
        @csrf
        <input type="text" placeholder="question" name="question">
        <input type="text" placeholder="image" name="questionimage">
        <input type="text" placeholder="answer1" name="answer1">
        <input type="text" placeholder="answer2" name="answer2">
        <input type="text" placeholder="answer3" name="answer3">
        <input type="text" placeholder="answer4" name="answer4">
        <input type="text" placeholder="correct" name="correct">
        <input type="number" placeholder="position" name="position">
        <input type="text" placeholder="quizz name" name="quizzname">
        <button type="submit" name="form2">add</button>
    </form>
    
</body>
</html>