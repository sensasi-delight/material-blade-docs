&lt;!-- Icon-only tab bar --&gt;
&lt;x-mbc::tab-bar :tabs="['home', 'search', 'favorite', 'person']" :iconOnly="true" />

&lt;!-- With active tab --&gt;
&lt;x-mbc::tab-bar :tabs="['phone', 'favorite', 'person_pin', 'help']" :iconOnly="true" :activeTabNo="3" />