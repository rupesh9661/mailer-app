<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mailer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
          <div class="card col-md-6 p-4 m-4 row" style=" background-image: url('https://images.pexels.com/photos/4041750/pexels-photo-4041750.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
              {{ session()->get('success') }}
          </div>
            @endif
            <h1 class="text-center text-primary mb-4"><u>Mailer : Import Csv And Shoot Mail</u></h1>
  
              <a href="{{ asset('sample.csv') }}" class="btn btn-info my-4">Download Csv File</a>
              <form action="{{ route('shoot-mail') }}" class="row" enctype="multipart/form-data" method="POST">
                  @csrf
                  <div class="col-md-12 mb-4">
                      <label for="" class="text-light">Import File</label>
                      <input type="file" name="mail_list" required class="form-control" accept=".csv">
                  </div>
                  <div class="col-md-12 mb-4">
                      <input type="submit" value="Shoot" class="btn btn-primary form-control">
                  </div>
              </form>
          </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
