&lt;!-- Default sliding underline --&gt;
&lt;x-mbc::tab-bar :tabs="['Flights', 'Hotels', 'Restaurants']" />

&lt;!-- Fade indicator --&gt;
&lt;x-mbc::tab-bar :tabs="['Flights', 'Hotels', 'Restaurants']" :fadeIndicator="true" :activeTabNo="2" />

&lt;!-- Icon indicator (star) --&gt;
&lt;x-mbc::tab-bar :tabs="['Flights', 'Hotels', 'Restaurants']" indicatorIcon="star" />

&lt;!-- Icon indicator with icons tabs --&gt;
&lt;x-mbc::tab-bar :tabs="['home' => 'Home', 'search' => 'Search', 'favorite' => 'Favorites']" indicatorIcon="check_circle" :activeTabNo="3" />