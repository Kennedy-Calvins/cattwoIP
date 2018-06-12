<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Installment Plan</title>
    </head>
    <body>
        <div class="container text-center">
            @if(count($fee) > 0)
            <h1>Installment Payments</h1><br>
            <table class="table">
                <thead>
                    <tr>
                        <td>Student Number</td>
                        <td>Full Name</td>
                        <td>Date of Payment</td>
                        <td>Amount</td>
                    </tr>
                </thead>
                <tbody>
                    <!-- @foreach($fee as $fee) -->
                        <tr>
                            <td>{{$fee->st_id}}</td>
                            <td>{{$fee->fname}}</td>
                            <td>{{$fee->dop}}</td>
                            <td>{{$fee->amount}}</td>
                        </tr>
                    <!-- @endforeach -->
                        <tr>
                            <td></td>
                            <td></td>
                            <td><b>Total Fees</b></td>
                            <td><b>{{$amount}}</b></td>
                            <td></td>
                        </tr>
                </tbody>
            </table>
            <!-- @else -->
            <h1>No record of any fee payment yet</h1>
            <a class="btn btn-default" href="/fees">Add a fee payment</a>
            <!-- @endif -->
            <a class="btn btn-default" href="/home">Home</a>
        </div>        
    </body>
</html>