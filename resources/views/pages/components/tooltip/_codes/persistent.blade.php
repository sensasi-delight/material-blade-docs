&lt;div style="display: flex; gap: 2rem; align-items: center; padding: 2rem;">
    &lt;x-mbc::tooltip :persistent="true">
        &lt;x-mbc::button label="Show Persistent Tooltip" variant="raised" />

        &lt;x-slot:title>Persistent Information&lt;/x-slot:title>
        &lt;x-slot:body>
            This tooltip stays open until you click outside or press Escape. It's useful for important information that users need to acknowledge.
        &lt;/x-slot:body>
        &lt;x-slot:action>
            &lt;x-mbc::button label="Got It" variant="text" />
        &lt;/x-slot:action>
    &lt;/x-mbc::tooltip>
&lt;/div>