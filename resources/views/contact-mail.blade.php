<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration Confirmed</title>
    <style>
      /* Font styles */
      body {
        font-family: Arial, sans-serif;
        font-size: 16px;
        line-height: 1.5;
        color: #333;
      }
      h1 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
      }
      p {
        margin-bottom: 10px;
      }
      a {
        color: #007bff;
        text-decoration: none;
        font-weight: bold;
      }
      a:hover {
        text-decoration: underline;
      }

      /* Container styles */
      .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 10px;
      }

      /* Button styles */
      .button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        transition: background-color 0.2s ease;
      }
      .button:hover {
        background-color: #0069d9;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>New Enquiry!</h1>
      <p>A new contact form submission has been received. Here are the details:</p>
      <p>Name : {{$contact_data->name}}</p>
      <p>Email : {{$contact_data->email}}</p>
      <p>Phone Number : {{$contact_data->phone_number}}</p>
      <p>City :{{$contact_data->city}}</p>
      <p>Message : {{$contact_data->message}}</p>
     
    </div>
  </body>
</html>