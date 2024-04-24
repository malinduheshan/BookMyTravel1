@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>

    <!-- Pending Blogs -->
    <h2>Pending Blogs</h2>
    @if ($pendingBlogs->isEmpty())
        <p>No pending blogs.</p>
    @else
        <ul>
            @foreach ($pendingBlogs as $blog)
                <li>
                    {{ $blog->title }} 
                    <form action="{{ route('admin.blogs.approve', $blog) }}" method="post">
                        @csrf
                        <button type="submit">Approve</button>
                    </form>
                    <form action="{{ route('admin.blogs.reject', $blog) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">Reject</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif

    <!-- Approved Blogs -->
    <h2>Approved Blogs</h2>
    @if ($approvedBlogs->isEmpty())
        <p>No approved blogs.</p>
    @else
        <ul>
            @foreach ($approvedBlogs as $blog)
                <li>{{ $blog->title }}</li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
