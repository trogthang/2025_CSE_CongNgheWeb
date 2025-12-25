@extends('layouts.app')

@section('content')
<h1>Danh sách Task</h1>

<a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Thêm mới Task</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tiêu đề</th>
            <th>Mô tả</th>
            <th>Trạng thái</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tasks as $task)
        <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->title }}</td>
            <td>{{ $task->description }}</td>
            <td>{{ $task->completed ? 'Hoàn thành' : 'Chưa hoàn thành' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
