<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Danh sách sự cố</title>
</head>
<body>

<h2>Danh sách sự cố</h2>

<a href="{{ route('issues.create') }}">➕ Thêm sự cố</a>

<table border="1" cellpadding="5">
    <tr>
        <th>Mã</th>
        <th>Tên máy</th>
        <th>Phiên bản</th>
        <th>Người báo cáo</th>
        <th>Thời gian</th>
        <th>Mức độ</th>
        <th>Trạng thái</th>
        <th>Hành động</th>
    </tr>

    @foreach ($issues as $issue)
    <tr>
        <td>{{ $issue->id }}</td>
        <td>{{ $issue->computer->computer_name }}</td>
        <td>{{ $issue->computer->model }}</td>
        <td>{{ $issue->reported_by }}</td>
        <td>{{ $issue->reported_date }}</td>
        <td>{{ $issue->urgency }}</td>
        <td>{{ $issue->status }}</td>
        <td>
            <a href="{{ route('issues.edit', $issue->id) }}">✏️</a>

            <form action="{{ route('issues.destroy', $issue->id) }}"
                  method="POST"
                  style="display:inline"
                  onsubmit="return confirm('Bạn có chắc muốn xóa?')">
                @csrf
                @method('DELETE')
                <button type="submit">❌</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<br>
{{ $issues->links() }}

</body>
</html>
