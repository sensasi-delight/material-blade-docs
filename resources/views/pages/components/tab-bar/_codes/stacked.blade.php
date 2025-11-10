&lt;!-- Stacked tabs --&gt;
&lt;x-mbc::tab-bar :tabs="['home' => 'Home', 'search' => 'Search', 'favorite' => 'Favorites']" :stacked="true" />

&lt;!-- Stacked with active tab --&gt;
&lt;x-mbc::tab-bar :tabs="['phone' => 'Calls', 'forum' => 'Chats', 'notifications' => 'Alerts', 'settings' => 'Settings']" :stacked="true" :activeTabNo="2" />