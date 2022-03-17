<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
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


         <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
            <form action="{{url('Flight/store')}}" id="role_form" enctype="multipart/form-data" class="form-horizontal" method="post">
                {{ csrf_field() }}
                <div class="row">

                    <div class="col-md-12">

                        <div class="col-md-4 form-group{{ $errors->has('from') ? ' has-error' : '' }}">
                            <div class="col-md-2">
                                <label for="" class="control-label"><b>From</b><span class="required">*</span></label>
                            </div>

                            <div class="col-md-3">
                                <select id="from" type="text" name="from" class="pulsate form-control from" value="" required>
                                    <option value="">FROM</option>
                                    <option value="Hyderabad">Hyderabad</option>
                                    <option value="Chennai">Chennai</option>
                                    <option value="Bangalore">Bangalore</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Mumbai">Mumbai</option>
                                </select>
                            </div>
                        </div>



                        <div class="col-md-4 form-group{{ $errors->has('to') ? ' has-error' : '' }}">
                            <div class="col-md-2">
                                <label for="" class="control-label"><b>To</b><span class="required">*</span></label>
                            </div>

                            <div class="col-md-3">
                                <select id="to" type="text" name="to" class="pulsate form-control to" value="" required>
                                    <option value="">TO</option>
                                    <option value="London">London</option>
                                    <option value="France">France</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Sydny">Sydny</option>
                                    <option value="Florida">Florida</option>
                                </select>
                            </div>
                        </div>

                            <div class="col-md-4 form-group{{ $errors->has('search_date') ? ' has-error' : '' }}">
                                <div class="col-md-3">
                                    <label for="" class="control-label"><b>Date:</b><span class="required">*</span></label>
                                </div>
                                <div class="col-md-4">

                                    <input type="date" id="search_date" name="search_date" required>
                                </div>
                            </div>







                        <div class="form-group">
                            <div class="col-md-5">
                            </div>
                            <div class="col-md-6">
                                <button type="submit" id ="create_followup_submit" class="btn btn-primary">Submit</button>
                                <a href="{{ url('welcome')}}"><button type="button" class="btn default">Cancel</button></a>
                            </div>
                        </div>
                    </div>



                </div>
            </form>


            </div>
            <div class="col-md-2"></div>


        </div>
    </body>
</html>
