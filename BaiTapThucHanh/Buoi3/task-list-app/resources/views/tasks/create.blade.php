@extends('layouts.app')

@section('content')
<h1>Thêm Task</h1>

<form method="POST" action="{{ route('tasks.store') }}">
    @csrf

    <div class="mb-3">
        <label class="form-label">Tiêu đề</label>
        <input type="text" name="title" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Mô tả</label>
        <textarea name="description" class="form-control" required></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Mô tả chi tiết</label>
        <textarea name="long_description" class="form-control"></textarea>
    </div>

    <div class="form-check mb-3">
        <input type="checkbox" name="completed" class="form-check-input">
        <label class="form-check-label">Hoàn thành</label>
    </div>

    <button class="btn btn-primary">Lưu</button>
</form>
@endsection
    