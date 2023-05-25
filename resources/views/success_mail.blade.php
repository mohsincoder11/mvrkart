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
      <h1>Success!</h1>
      <p>Dear {{$registration_data->team_name}},</p>
      <p>We are happy to inform you that your registration towards <b>{{$registration_data->event_info->event_name}}</b> dated <b>{{date('d M Y',strtotime($registration_data->event_info->event_date))}}</b> for <b>{{$registration_data->event_info->location_name}}</b> has been confirmed. We will keep you updated from time to time.</p>
      <p>For any queries, you may contact us on <a href="mailto:info@mvrmotorsports.com">info@mvrmotorsports.com</a> or call us on <a href="tel:+918484968646">84849 68646</a>.</p>
      <p>Regards,</p>

		<p> Motorsports</p>
    </div>
  </body>
</html>