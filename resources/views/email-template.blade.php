<!doctype html>

    <html lang="en">
  <head>
    <title>Email from Contact Form | Weabers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-sm-12 m-auto">
                <h3> Mr/Mrs {{ $email->name }} want to discuss about <b> {{ $email->about}} </b></h3>
                <p> Hey, </p>
                <p> He/She dropped a message on our website.</p>
                <p> Who might be interested in our <b>{{ $email->service }} </b>. </p>
                <p> His/Her message <br> {{ $email->message }}</p>
                <p> I hope you will get back to him soon with proper reply. </p>
                <br/>
                <br/>
                <p>His email : {{ $email->email }}</p>
                <br/>
                <p> Best Regards</p>
                <p> Team, Weabers </p>
            </div>
        </div>
    </div>
  </body>
</html>