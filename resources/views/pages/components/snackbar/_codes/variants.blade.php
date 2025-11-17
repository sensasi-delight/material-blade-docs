&lt;!-- Default Variant -->
&lt;x-mbc::snackbar variant="default" message="Default layout">
    @slot('action')
        &lt;x-mbc::button label="Action" />
    @endslot
&lt;/x-mbc::snackbar>

&lt;!-- Leading Variant -->
&lt;x-mbc::snackbar variant="leading" message="Leading layout (action on left)">
    @slot('action')
        &lt;x-mbc::button label="Action" />
    @endslot
&lt;/x-mbc::snackbar>

&lt;!-- Stacked Variant -->
&lt;x-mbc::snackbar variant="stacked" message="Stacked layout (action below message)">
    @slot('action')
        &lt;x-mbc::button label="Action" />
    @endslot
&lt;/x-mbc::snackbar>
