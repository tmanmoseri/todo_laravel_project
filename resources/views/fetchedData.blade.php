<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
        
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            
          
          
        <a class="d-flex justify-content-center" href="create">Add todo item</a>
      <table class="table d-flex justify-content-center">
          <tr><th>Cities</th></tr>
        <tr>
              
              <td>Cod</td>
              <td>Name</td>
              <td>Created At</td>
              <td>updated_at</td>
              <td>Action</td>
          </tr>
          @foreach ($TodoArr as $todo)
          <tr>
            <td>{{$todo->id}}</td>
            <td>{{$todo->name}}</td>
            <td>{{$todo->created_at}}</td>
            <td>{{$todo->updated_at}}</td>
            <td><a href="edit/{{$todo->id}}">Edit</a> | <a href="delete/{{$todo->id}}">Delete</a></td>
        </tr>   
          @endforeach
         
      </table>
      <div class="pagination d-flex justify-content-center">
       
         {{ $TodoArr->links() }}
    </div>
      
    <a class="d-flex justify-content-center" href="/logout">Logout</a>
</div>
 </body>
</html>
