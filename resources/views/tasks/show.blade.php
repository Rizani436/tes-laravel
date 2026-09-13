@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">{{ $task->title }}</h1>
        @if ($task->is_done)
            <span class="badge bg-success">Selesai</span>
        @else
            <span class="badge bg-secondary">Belum</span>
        @endif
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <p class="card-text">{{ $task->description ?: 'Tidak ada deskripsi.' }}</p>
            <p class="text-muted small mb-0">Dibuat: {{ $task->created_at->format('d M Y H:i') }}</p>
            <p class="text-muted small mb-0">Diperbarui: {{ $task->updated_at->format('d M Y H:i') }}</p>
        </div>
    </div>

    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-outline-secondary">Edit</a>
    <a href="{{ route('tasks.index') }}" class="btn btn-link">Kembali</a>
@endsection
