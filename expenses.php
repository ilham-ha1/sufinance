<!DOCTYPE html>
<html>

<head>
    <title>Contact form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" class="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" class="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" class="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato', sans-serif;
        }

        h1 {
            margin-bottom: 40px;
            color: #00C897;
            font-weight: bold;
            font-size: 50;
            font-family: roboto;
        }

        label {
            color: #333;
        }

        .btn-send {
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            width: 80%;
            margin-left: 3px;
        }

        .help-block.with-errors {
            color: #ff5050;
            margin-top: 5px;

        }

        .card {
            margin-left: 10px;
            margin-right: 10px;
            padding: 30px 0 30px 0;
            font-family: roboto;
        }

        .message{
            position:absolute;
            font-size: small;
            font-style: italic;
        }
        .btn{
            color: #fff;
            background-color: #FFD365;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class=" text-center mt-5 ">
            <h1>New Expenses</h1>
        </div>
        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="container">
                            <form id="contact-form" role="form">
                                <div class="controls">
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="specification" class="form-control" placeholder="Specification" required="required" data-error="Specification is required.">
                                    </div>
                                    <div class="form-group">
                                        <input id="form_name" type="date" name="date" class="form-control" required="required" data-error="Please choose the date">
                                    </div>
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="initial-amount" class="form-control" placeholder="Initial Amount" required="required" data-error="Initial Amount is required.">
                                    </div>
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="source" class="form-control" placeholder="Expenses Source" required="required" data-error="Expenses source is required.">
                                    </div>
                                    <div class="form-group">
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Write a comment" rows="4" required="required" data-error="Please, leave a comment."></textarea>
                                        <div class="message">Specify The Expenses Purpose Or A Reason!</div>
                                    </div>
                                    <br>
                                    <div class="col-md-12">
                                        <input type="submit" class="btn" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
                <!-- /.8 -->

            </div>
            <!-- /.row-->

        </div>
    </div>

</body>

</html>
