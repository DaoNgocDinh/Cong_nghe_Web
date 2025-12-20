<h2>Thêm sự cố</h2>

<form method="POST" action="{{ route('issues.store') }}">
@csrf

<select name="computer_id">
    @foreach ($computers as $computer)
        <option value="{{ $computer->id }}">
            {{ $computer->computer_name }}
        </option>
    @endforeach
</select>

<input type="text" name="reported_by" placeholder="Người báo cáo">

<textarea name="description"></textarea>

<select name="urgency">
    <option>Low</option>
    <option>Medium</option>
    <option>High</option>
</select>

<select name="status">
    <option>Open</option>
    <option>In Progress</option>
    <option>Resolved</option>
</select>

<button type="submit">Lưu</button>
</form>
