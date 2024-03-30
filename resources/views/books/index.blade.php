@extends('layouts.app')

@section('content')

    <div class="mb-4">
        <h1 class="sticky top-0 mb-2 text-2xl">books</h1>
        <form method="GET" action="{{ route('books.index') }}" class="mb-4 flex items-center space-x-2">
            <input type="text" name="title" placeholder="Search by title"
                   value="{{ request('title') }}" class="input h-10" />
            <button type="submit" class="btn h-10">Search</button>
            <a href="{{ route('books.index') }}" class="btn h-10">Clear</a>
        </form>
        <div class="filter-container mb-4 flex">
            @php
                // Define an array of filters, where the keys represent filter values
                // and the values represent filter labels.
                $filters = [
                    '' => 'Latest',
                    'popular_last_month' => 'Popular Last Month',
                    'popular_last_6months' => 'Popular Last 6 Months',
                    'highest_rated_last_month' => 'Highest Rated Last Month',
                    'highest_rated_last_6months' => 'Highest Rated Last 6 Months',
                ];
            @endphp

            {{-- Loop through each filter in the $filters array --}}
            @foreach ($filters as $key => $label)
                {{-- Generate an anchor tag for each filter --}}
                <a href="{{ route('books.index', [...request()->query(), 'filter' => $key]) }}"
                   {{-- Set the class of the anchor tag based on the current filter selection --}}
                   {{-- If the current filter matches the filter being iterated over, or if no filter is selected and it's the default filter, --}}
                   {{-- then set the class to 'filter-item-active'; otherwise, set it to 'filter-item' --}}
                   class="{{ request('filter') === $key || (request('filter') === null && $key === '') ? 'filter-item-active' : 'filter-item' }}">
                    {{-- Display the filter label --}}
                    {{ $label }}
                </a>
            @endforeach
        </div>


        <ul>

            @forelse ($books as $book)

          <li class="mb-4">
              <div class="book-item">
                  <div
                      class="flex flex-wrap items-center justify-between">
                      <div class="w-full flex-grow sm:w-auto">
                          <a href="{{ route('books.show', $book) }}" class="book-title">{{ $book->title }}</a>
                          <span class="book-author">by {{ $book->author }}</span>
                      </div>
                      <div>
                          <div class="book-rating">
                              {{ number_format($book->reviews_avg_rating, 1) }}
                          </div>
                          <div class="book-review-count">
                              out of {{ $book->reviews_count }} {{ Str::plural('review', $book->reviews_count) }}
                          </div>
                      </div>
                  </div>
              </div>
          </li>
     @empty
          <li class="mb-4">
              <div class="empty-book-item">
                  <p class="empty-text">No books found</p>
                  <a href="{{ route('books.index') }}" class="reset-link">Reset criteria</a>
              </div>
          </li>
            @endforelse
  </ul>


    {{$books->links()}}
@endsection
