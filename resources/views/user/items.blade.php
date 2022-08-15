<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-store</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
<form method="post" action="{{ route('purchase') }}" id="userForm">
{{--    <div>--}}
{{--        <span class="userId">ID: {{ $user->getId() }}</span><br>--}}
{{--        <span class="userName">{{ $user->getName() }} {{ $user->getSurname() }}</span><br>--}}
{{--        <span class="userEmail">{{ $user->getEmail() }}</span>--}}
{{--    </div>--}}
    @foreach ($items as $item)
        <div>
            <span class="itemId">{{ $item->getId() }}</span>
            <span class="itemName">{{ $item->getName() }}</span>
            <span class="itemPrice">{{ $item->getPrice() }}</span>
            <button type="submit">Purchase</button>
        </div>
    @endforeach
</form>
</body>
<script>

    $("#userForm").submit(function (e) {
        e.preventDefault();

        let data = {
            'userId': $(".userId").val(),
            'userName': $(".userName").val(),
            'userEmail': $(".userEmail").val(),
            'itemId': $(".itemId").val(),
            'itemName': $(".itemName").val(),
            'itemPrice': $(".itemPrice").val(),
        };
        console.log(data);
        $.ajax({
            type: "POST",
            url: "{{ route('purchase') }}",
            data: data,
            success: function () {
                console.log("Data sent");
            },
            error: function () {
                console.log("Error");
            }
        });
    });
</script>

</html>
