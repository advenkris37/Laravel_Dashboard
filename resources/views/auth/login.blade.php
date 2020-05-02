<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">

    <table width="300" border="0" align="center">
    <tbody>
      <tr>
        <td>
          <div class="d-flex justify-content-center mt-1 mb-0 form_container" style="padding:10px !important;background-color: rgba(0,0,0,0);">
            <form action="http://kickoff.pentasinergi.com/login.php" method="post" onSubmit="return validasi()" class="form-signin" style="padding:10px !important; margin:0px !important;">
              <label for="username" class="sr-only">Initial Name</label>
              <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
              <div class="checkbox mb-3">
              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
              <p class="mt-4 mb-0 small text-center" style="color:#fff; font-size: 1.1em"><strong>Team Work Makes The Dream Work</strong></p>
          </div>
        </td>
      </tr>

    </tbody>
  </table>

    </container>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>