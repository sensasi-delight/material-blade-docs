&lt;!-- No elevation (default) --&gt;
&lt;x-mbc::tab-bar :tabs="['Flights', 'Hotels', 'Restaurants']" />

&lt;!-- Elevation 4 --&gt;
&lt;x-mbc::tab-bar :tabs="['Flights', 'Hotels', 'Restaurants']" :elevation="4" />

&lt;!-- Elevation 8 --&gt;
&lt;x-mbc::tab-bar :tabs="['Flights', 'Hotels', 'Restaurants']" :elevation="8" />

&lt;!-- Elevation 16 --&gt;
&lt;x-mbc::tab-bar :tabs="['home' => 'Home', 'search' => 'Search', 'favorite' => 'Favorites', 'settings' => 'Settings']" :elevation="16" :activeTabNo="3" />