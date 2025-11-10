&lt;!-- Primary color --&gt;
&lt;x-mbc::tab-bar :tabs="['Flights', 'Hotels', 'Restaurants']" color="primary" :lightText="true" />

&lt;!-- Secondary color --&gt;
&lt;x-mbc::tab-bar :tabs="['Flights', 'Hotels', 'Restaurants']" color="secondary" :lightText="true" />

&lt;!-- Custom color (Dark Blue) --&gt;
&lt;x-mbc::tab-bar :tabs="['home' => 'Home', 'search' => 'Search', 'favorite' => 'Favorites']" color="#1976D2" :lightText="true" />

&lt;!-- Custom color (Teal) --&gt;
&lt;x-mbc::tab-bar :tabs="['home' => 'Home', 'search' => 'Search', 'favorite' => 'Favorites']" color="#009688" :lightText="true" :activeTabNo="2" />

&lt;!-- Custom color (Deep Purple) --&gt;
&lt;x-mbc::tab-bar :tabs="['phone' => 'Calls', 'forum' => 'Chats', 'settings' => 'Settings']" color="#673AB7" :lightText="true" :stacked="true" />