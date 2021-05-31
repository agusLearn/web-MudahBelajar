@extends('adminPages.templates.master')

@section('title-pages', 'Create Article Page')

@section('content')

<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">Create Your Article with your understanding</h3>
    </div>
    <div class="panel-body">
        <form action="{{ route('createArticle') }}" method="post">
            @csrf

            <input type="hidden" name="userID" value="{{ $user }}">

            <div class="form-group">
                <label for="title">Title Article</label>
                <input type="text" class="form-control" id="title" placeholder="Crate Your title" name="title">
            </div>

            <div class="form-group">
                <label for="img-article">Image Article</label>
                <input type="file" id="img-article" name="imgArticle">
                <p class="help-block">Example block-level help text here.</p>
            </div>

            <div class="form-group">
                <label for="content">Content Article</label>
                <textarea class="form-control" rows="5" name="contentArticle"></textarea>
            </div>

            <div class="form-group">
                <label for="content">Category</label>
                <select class="form-control" name="categoryArticle">
                    <option value="">Choose Your Category</option>
                    @foreach($category as $kategory)
                    <option value="{{ $kategory->id }}">{{ $kategory->nm_category }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary mr-auto">Submit</button>
        </form>
    </div>
</div>

@endsection