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
            <h3>User Problems</h3>
            <p>Manage your user problems</p>
        </div>
        <div class="add align-self-center">
           <a href="/add"><button class="add-problems">add problems</button></a> 
        </div>
    </header>

     <main class="content container">
      <section class="p-3">        
        <div class="information d-flex flex-column gap-5">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="row">ID</th>
                <th scope="row">Name</th>
                <th scope="row">Email</th>
                <th scope="row">Problems</th>
                <th scope="row">Handle</th>
              </tr>
            </thead>
            <tbody>
              @foreach($hostings as $data)
                <tr>
                  <th scope="row">
                      {{$data['id']}}
                  </th>
                  <td>
                      {{$data['name']}}
                  </td>
                  <td>
                      {{$data['email']}}
                  </td>
                  <td>
                      {{$data['problem']}}
                  </td>
                  <td class="whitespace-no-wrap row-action--icon">
                    <a role="button" href="/edit/{{ $data->id }}" class="mr-3"><button>edit</button></a>
                    <a role="button" x-on:click.prevent="deleteItem" href="/delete/{{ $data->id }}"><button>delete</button></a>
                  </td>
                </tr>
                @endforeach                
            </tbody>            
          </table>
        </div>
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