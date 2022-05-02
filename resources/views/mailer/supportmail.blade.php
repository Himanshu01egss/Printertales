<html>
    <head>
        <title>Support Mailer | {{config('app.name')}}</title>
        <style>#customers{font-family:Arial,Helvetica,sans-serif;border-collapse:collapse;width:100%}#customers td,#customers th{border:1px solid #ddd;padding:8px}#customers tr:nth-child(even){background-color:#f2f2f2}#customers tr:hover{background-color:#ddd}#customers th{padding-top:12px;padding-bottom:12px;text-align:left;background-color:#0063f7;color:#fff}</style>
    </head>
    <body>
        <h2>Support Mailer | {{config('app.name')}}</h2>
        <table id="customers">
            <tr>
                <th>Brand Of Printer: </th>
                <td>{{ucwords($data['brand'])}}</td>
            </tr>
            <tr>
                <th>Issue?</th>
                <td>{{$data['issue']}}</td>
                
            </tr>
            @if($data['otherissue'])
            <tr>
                <th>Other Issue?</th>
                <td>{{$data['otherissue']}}</td>
            </tr>
            @endif
            <tr>
                <th>Faced The Issue Before?</th>
                <td>@if($data['before']==1) {{"Yes"}} @else {{"No"}} @endif</td>
            </tr>
            <tr>
                <th>Email Address: </th>
                <td>{{$data['email']}}</td>
            </tr>
            <tr>
                <th>Phone Number: </th>
                <td>{{$data['phone']}}</td>
            </tr>
        </table>
    </body>
</html>