<!DOCTYPE html><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<html lang="en">
<head>
    <title>E-store</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>name</th>
        <th>surname</th>
        <th>email</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <div>
            <tr onclick="window.location='/users/{{ $user->getId() }}'">
                <td>{{ $user->getId() }}</td>
                <td>{{ $user->getName() }} {{ $user->getSurname() }}</td>
                <td>{{ $user->getEmail() }}</td>
            </tr>
        </div>
    @endforeach
    </tbody>
</table>
</body>
</html>
