<form action="{{ route('news.search') }}" method="GET" class="search-form bg-white">
    @csrf
    <div class="form-group">
        <label for="query" class="d-none"></label>
        <span class="icon icon-search"></span>
        <input type="text" class="form-control" name="query" id="query" placeholder="Type a keyword and hit enter" value="{{ request()->input('query') }}">
    </div>
</form>
