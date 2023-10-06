<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eloquent Relationships : Relasi One to One & Many To Many</title>

</head>

<body>

    <table>
        <thead>
            <tr>
                <th>Nama User</th>
                <th>Roles</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>
                        @foreach ($user->roles()->get() as $role)
                            <button>{{ $role->name }}</button>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
