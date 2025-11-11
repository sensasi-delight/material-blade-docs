&lt;div style="display: flex; gap: 2rem; align-items: center; padding: 2rem; flex-wrap: wrap;">
    &lt;x-mbc::tooltip>
        &lt;x-mbc::icon-button icon="info" />

        &lt;x-slot:title>Rich Tooltip Title&lt;/x-slot:title>
        &lt;x-slot:body>
            This is a rich tooltip with more detailed information. It can contain multiple lines of text.
        &lt;/x-slot:body>
        &lt;x-slot:action>
            &lt;x-mbc::button label="Learn More" variant="text" />
        &lt;/x-slot:action>
    &lt;/x-mbc::tooltip>

    &lt;x-mbc::tooltip>
        &lt;x-mbc::button label="Help" variant="outlined" />

        &lt;x-slot:title>Need Help?&lt;/x-slot:title>
        &lt;x-slot:body>
            Click the button below to access our comprehensive help documentation.
        &lt;/x-slot:body>
        &lt;x-slot:action>
            &lt;x-mbc::button label="Open Docs" variant="text" />
        &lt;/x-slot:action>
    &lt;/x-mbc::tooltip>
&lt;/div>