<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal Pertama_Raja Pasha</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
</head>
<body>

    <header class="header container d-flex justify-content-between pt-4">
        <div class="header-content">
            <h3>Add Problems</h3>
        </div>
    </header>

     <main class="content container">
      <section class="p-3">        
        <form action="{{route('hosting.store')}}" method="post" enctype="multipart/form-data">
        @csrf
          @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
            <div class="form-group">
                    <label for="text" style="font-weight: bold; ">Name</label>
                    <input type="text" class="form-control" id="Name" name="name" placeholder="Enter your Name">
                </div>
              <div class="form-group">
                    <label for="text" style="font-weight: bold; ">Email</label>
                    <input type="text" class="form-control" id="Email" name="email" placeholder="Enter your Email">
                </div>
                <div class="form-group">
                    <label for="text" style="font-weight: bold; ">Problem</label>
                    <input type="text" class="form-control" id="Problems" name="problem" placeholder="Enter your Problem">
                </div>
              <button type="submit" class="primary-btn mb-2 mt-4" style="width: 100%;">Submit</button>
        </form>
      </section>
    </main>

    <!-- Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
        
    </body>