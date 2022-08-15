<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-store</title>
</head>
<body>
<form method="post" action="{{ route('purchase') }}" id="userForm">
    @csrf
    <div>
        <label for="userId">ID:</label>
        <input readonly name="userId" id="userId" value="{{ $user->getId() }}"><br>
        <span class="userName">{{ $user->getName() }} {{ $user->getSurname() }}</span><br>
        <span class="userEmail">{{ $user->getEmail() }}</span>
    </div>
    @foreach ($items as $item)
        <div>
            <label for="itemId">ID:</label>
            <input readonly name="itemId" id="itemId" value="{{ $item->getId() }}">
            <span class="itemName">{{ $item->getName() }}</span>
            <span class="itemPrice">{{ $item->getPrice() }}</span>
            <button type="submit" >Purchase</button>
        </div>
    @endforeach
</form>
</body>
</html>
