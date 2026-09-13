@php
    $task = $task ?? null;
@endphp

<div class="mb-3">
    <label for="title" class="form-label">Judul</label>
    <input type="text" name="title" id="title"
           class="form-control @error('title') is-invalid @enderror"
           value="{{ old('title', $task->title ?? '') }}" required>
    @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">Deskripsi</label>
    <textarea name="description" id="description" rows="4"
              class="form-control @error('description') is-invalid @enderror">{{ old('description', $task->description ?? '') }}</textarea>
    @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

@if ($task)
    <div class="mb-3 form-check">
        <input type="hidden" name="is_done" value="0">
        <input type="checkbox" name="is_done" id="is_done" value="1" class="form-check-input"
               @checked(old('is_done', $task->is_done))>
        <label for="is_done" class="form-check-label">Selesai</label>
    </div>
@endif
