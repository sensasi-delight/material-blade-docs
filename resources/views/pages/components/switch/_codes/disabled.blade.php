&lt;!-- Disabled Off --&gt;
&lt;x-mbc::switch disabled aria-label="Disabled switch off" />

&lt;!-- Disabled On --&gt;
&lt;x-mbc::switch :on="true" disabled aria-label="Disabled switch on" />

&lt;!-- Disabled with Icons (Off) --&gt;
&lt;x-mbc::switch 
    icon="check" 
    offIcon="close"
    disabled 
    aria-label="Disabled switch with icons off"
/>

&lt;!-- Disabled with Icons (On) --&gt;
&lt;x-mbc::switch 
    :on="true"
    icon="check" 
    offIcon="close"
    disabled 
    aria-label="Disabled switch with icons on"
/>