<div class="col">
    <label for="sort">Filter by College</label>
    <div class="input-group mb-3">
        <select id="filter_college_id" class="custom-select">
            @foreach($colleges as $id => $name)
                <option {{ $id == request('college_id') ? 'selected' : '' }} value = "{{ $id }}">{{ $name }}</option>
            @endforeach
        </select>
    </div>
</div>


