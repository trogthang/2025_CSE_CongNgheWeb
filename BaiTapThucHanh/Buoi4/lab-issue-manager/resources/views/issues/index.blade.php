@extends('layouts.app')

@section('content')
<h2>Danh sách sự cố</h2>

<a href="{{ route('issues.create') }}" class="btn btn-primary mb-3">Thêm vấn đề</a>

<table class="table table-bordered">
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

    @foreach($issues as $issue)
    <tr>
        <td>{{ $issue->id }}</td>
        <td>{{ $issue->computer_name }}</td>
        <td>{{ $issue->version }}</td>
        <td>{{ $issue->reporter }}</td>
        <td>{{ $issue->reported_at }}</td>
        <td>{{ $issue->severity }}</td>
        <td>{{ $issue->status }}</td>
        <td>
            <a href="{{ route('issues.edit', $issue->id) }}" class="btn btn-warning btn-sm">Sửa</a>
            <form action="{{ route('issues.destroy', $issue->id) }}" method="POST" style="display:inline"
                  onsubmit="return confirm('Bạn chắc chắn muốn xóa?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Xóa</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{{ $issues->links() }}
@endsection
