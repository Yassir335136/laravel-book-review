@extends('layouts.app')

@section('content')
    <h1 class="mb-10 text-2xl">Add Review for {{ $book->title }}</h1>

    <form method="POST" action="{{ route('books.reviews.store', $book) }}">
        @csrf

        <label for="review">Review</label>
        <textarea name="review" id="review" class="input">{{ old('review') }}</textarea>

        @error('review')
            <p class="text-red-700 mb-4">{{ $message }}</p>
        @enderror

        <label for="rating"Rating></label>

        <select name="rating" id="rating" class="input" >
            <option value="">Select a rating</option>
            @for($i = 1; $i <= 5; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>

        @error('rating')
             <p class="text-red-700 mb-4 mt-2">{{ $message }}</p>
        @enderror

        <button type="submit" class="btn">Add Review</button>
    </form>
@endsection
