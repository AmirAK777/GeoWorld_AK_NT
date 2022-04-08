<form>
    <label for="country">Select a country:</label>
    <select name="country" id="country">
        <option>Select Country</option>
    </select>
    <button id="dataButton">Add more data</button>
</form>

<div id="map"  style="width: 600px; height: 400px"></div>
<div id="colorScale">Color Scale: </div>

<div id="country">

    <div id="details"></div>
    <div id="products"></div>
</div>
<button id="allCountries">List All</button>
<label for="countryFilter">Filter Countries:</label>        
<select id="countryFilter" name="countryFilter"></select>

<table border="1">
    <thead>
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Flag</th>
            <th>path</th>
        </tr>
    </thead>
    <tbody id="countryTableBody"></tbody>
</table>
