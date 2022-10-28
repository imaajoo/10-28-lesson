<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Home!</title>
  </head>
  <body>
   <?php include 'navbar.php';?>
   <div class="container">
       <form>
           <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Email address</label>
               <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
               <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
           </div>
           <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
           </div>
           <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
           </div>
           <button type="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>
  </body>
</html>