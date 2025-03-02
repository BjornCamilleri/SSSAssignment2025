<div class="col">
    <label for="sort">Sort by Name</label>
    <select id="sort" class="form-control">
        <option value="asc" {{ request('sort') == 'asc' ? 'selected' : '' }}>Ascending</option>
        <option value="desc" {{ request('sort') == 'desc' ? 'selected' : '' }}>Descending</option>
    </select>
</div>