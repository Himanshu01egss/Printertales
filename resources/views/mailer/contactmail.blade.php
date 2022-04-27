<html>
    <head>
        <title>Contact Us Mailer | {{config('app.name')}}</title>
    </head>
    <body>
        <h2>Contact Us Mailer | {{config('app.name')}}</h2>
        <table>
            <tr>
                <th>Name</th>
                <td>{{$data['name']}}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{$data['email']}}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{$data['phone']}}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{$data['date']}}</td>
            </tr>
        </table>
    </body>
</html>