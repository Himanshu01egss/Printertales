<html>
    <head>
        <title>Issue Mailer | {{config('app.name')}}</title>
        <style>#customers{font-family:Arial,Helvetica,sans-serif;border-collapse:collapse;width:100%}#customers td,#customers th{border:1px solid #ddd;padding:8px}#customers tr:nth-child(even){background-color:#f2f2f2}#customers tr:hover{background-color:#ddd}#customers th{padding-top:12px;padding-bottom:12px;text-align:left;background-color:#0063f7;color:#fff}</style>
    </head>
    <body>
        <h2>Issue Mailer | {{config('app.name')}}</h2>
        <table id="customers">
            <tr>
                <th>Printer: </th>
                <td>{{ucwords($data['printer'])}}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{$data['fname']}}</td>
                
            </tr>
            <tr>
                <th>Email</th>
                <td>{{$data['femail']}}</td>
                
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{$data['fcode']}}-{{$data['fphone']}}</td>
            </tr>
            
        </table>
    </body>
</html>