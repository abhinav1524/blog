@extends('layouts.app')
@section('content')
    <h1>Create Post</h1>
<form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $post->title }}" required>
    <textarea name="content" id="content" required>{{ $post->content }}</textarea>
    <select name="category_id" required>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    <input type="file" name="image" accept="image/*">
    <button type="submit">Update</button>
</form>

<script>
    CKEDITOR.replace('content'); // Initialize CKEditor
</script>
@endsection
