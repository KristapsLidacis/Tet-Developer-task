<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-store</title>
</head>
<body>
<div>
    <span>ID: {{ $user->getId() }}</span><br>
    <span>First name: {{ $user->getName() }}</span><br>
    <span>Last name:{{ $user->getSurname() }}</span><br>
    <span>Email: {{ $user->getEmail() }}</span>
</div>
   <button><a href="/items">Get Items</a></button>
</body>
</html>
