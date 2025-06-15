<!DOCTYPE html>
<html>
<head>
    <title>Book store</title>
</head>
<body>
    <h1>Danh sách sách</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>STT</th>
            <th>Tên sách</th>
            <th>Mã sách</th>
            <th>Tác giả</th>
        </tr>
        @foreach ($books as $index => $book)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $book->bookName }}</td>
            <td>{{ $book->bookCode }}</td>
            <td>{{ $book->bookAuthor }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>