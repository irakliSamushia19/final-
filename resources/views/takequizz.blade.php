<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>


    <div class="card text-center">
        <div class="card-header">
          are you ready???????
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $quiz->quizname }}</h5>
            <p class="card-text">{{ $quiz->description }}</p>
            <p class="p">number of questions: </p>
            <p>{{ $quiz->author }}</p>
            <a href="" class="btn btn-primary start" id="st">Start Quizz</a>
        </div>
        <div class="card-footer text-muted">
            {{ $quiz->created_at }}
            
        </div>
        @foreach ($questions as $item)
            
        @endforeach
        <main style="display:flex; justify-content:center;">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text"></p>
                </div>
                
            </div>
        </main>
        
        <script src="https://unpkg.com/axios/dist/axios.min.js">


            
            
        </script>
        <script>
            
            window.onload = function() {
                fetch('http://127.0.0.1:8000/api/started/1')
                .then(response =>{
                    console.log()
                    return response.json();
                })
                .then(data =>{
                    
                    console.log(data.questions)
                    document.querySelector('.p').innerHTML += data.questions.length
                    
                    document.querySelector('.card-text').innerHTML = data.questions[1].question
                        
                    
                })
            }



        </script>

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>