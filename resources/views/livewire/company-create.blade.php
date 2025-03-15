<div>
    <form>
        <label for="name">Company name</label>
        <br />
        <input name="name" required />

        <br /><br />
        <label for="country_id">Country</label>
        <br />
        <select wire:model.live="country" required>
            <option value="">-- choose country --</option>
            @foreach ($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>

        <br /><br />
        <label for="city_id">City</label>
        <br />
        <select name="city_id">
            @forelse($cities as $city)
                <option value="{{ $city->id }}">{{ $city->name }}</option>
            @empty
                <option value="">-- choose country first --</option>
            @endforelse
        </select>

        <br /><br />
        <button type="submit">Save data</button>
    </form>
</div>
