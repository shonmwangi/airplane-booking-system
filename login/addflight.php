<nav class="admin-nav">
  <ul>
    <li><a href="#available-flights">Available Flights</a></li>
    <li><a href="#booked-flights">Booked Flights</a></li>
    <li><a href="#canceled-flights">Canceled Flights</a></li>
    <li><a href="#add-flight">Add Flight</a></li>
  </ul>
</nav>

<div id="available-flights">
  <!-- Display available flights here -->
</div>

<div id="booked-flights">
  <!-- Display booked flights here -->
</div>

<div id="canceled-flights">
  <!-- Display canceled flights here -->
</div>

<div id="add-flight">
  <!-- Add flight form here -->
</div>
CSS:

css
Copy code
.admin-nav {
  background-color: #f2f2f2;
  padding: 10px;
}

.admin-nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
}

.admin-nav li {
  margin-right: 20px;
}

.admin-nav a {
  text-decoration: none;
  color: #333;
  font-weight: bold;
}

.admin-nav a:hover {
  color: #666;
}
You can then use JavaScript or jQuery to add smooth scrolling to the navigation links, so that when the user clicks on a link, the page smoothly scrolls to the corresponding section.





