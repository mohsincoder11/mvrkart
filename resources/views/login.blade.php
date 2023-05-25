<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .login-form {
  width: 360px;
  margin: 50px auto;
  font-size: 15px;
  border-radius: 10px;
  background-color: #fff;
  box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
  padding: 40px;
}

.login-form h2 {
  margin-bottom: 30px;
  font-weight: bold;
  color: #222;
}

.form-group {
  margin-bottom: 20px;
  text-align: center;
}

.form-control {
  display: block;
  width: 100%;
  padding: 10px;
  font-size: 15px;
  line-height: 1.42857143;
  color: #555;
  background-color: #f8f8f8;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}

.btn-primary {
  display: block;
  width: 100%;
  padding: 10px;
  font-size: 15px;
  line-height: 1.42857143;
  color: #ffffff;
  background-color: #a93b3b;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;

}

.btn-primary:hover {
  background-color: #a93b3b;
  border-color: #a93b3b;
}

.btn-primary:focus {
  background-color: #a93b3b;
  border-color: #a93b3b;
  box-shadow: 0 0 0 0.2rem #a93b3b;
}

.btn-primary:active {
  background-color: #a93b3b;
  border-color: #a93b3b;
}

.btn-primary:active:focus {
  box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
}

.text-center {
  text-align: center;
}

.text-center a {
  color: #a93b3b;
  text-decoration: none;
  font-weight: bold;
}

.text-center a:hover {
  color: #a93b3b;
}

    </style>
</head>
<body>
  <div class="login-form">
    <form action="{{route('post-login')}}" method="post">
      @csrf
      <h2 class="text-center mb-4">Log in</h2>
      <div class="form-group">
        <input type="text" class="form-control" name="email" placeholder="Email" required="required">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Log in</button>
      </div>
    </form>
  
  </div>
  
      
</body>
</html>