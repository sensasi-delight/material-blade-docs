&lt;!-- Switch with both icons --&gt;
&lt;x-mbc::switch 
    icon="check" 
    offIcon="close"
    aria-label="Toggle with icons"
/>

&lt;!-- Switch with both icons (on state) --&gt;
&lt;x-mbc::switch 
    :on="true"
    icon="check" 
    offIcon="close"
    aria-label="Toggle with icons on"
/>

&lt;!-- Switch with only ON icon --&gt;
&lt;x-mbc::switch 
    icon="done" 
    aria-label="Toggle with single icon"
/>

&lt;!-- Switch with only ON icon (on state) --&gt;
&lt;x-mbc::switch 
    :on="true"
    icon="done" 
    aria-label="Toggle with single icon on"
/>