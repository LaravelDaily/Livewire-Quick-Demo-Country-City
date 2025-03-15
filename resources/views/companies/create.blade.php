<html>
<body>
<form>
    <label for="name">Company name</label>
    <br />
    <input name="name" required />

    <br /><br />
    <label for="country_id">Country</label>
    <br />
    <select name="country_id" required>
        <option value="">-- choose country --</option>
        @foreach ($countries as $country)
            <option value="{{ $country->id }}">{{ $country->name }}</option>
        @endforeach
    </select>

    <br /><br />
    <label for="city_id">City</label>
    <br />
    <select name="city_id">
        <option value="">-- choose country first --</option>
    </select>

    <br /><br />
    <button type="submit">Save data</button>
</form>

</body>
</html>
