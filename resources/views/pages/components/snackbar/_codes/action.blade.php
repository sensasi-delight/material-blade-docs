&lt;x-mbc::snackbar message="Item deleted">
    @slot('action')
        &lt;x-mbc::button label="Undo" />
    @endslot
&lt;/x-mbc::snackbar>

&lt;x-mbc::snackbar message="Photo archived">
    @slot('action')
        &lt;x-mbc::button label="View" />
    @endslot
&lt;/x-mbc::snackbar>

&lt;x-mbc::snackbar message="Connection timeout">
    @slot('action')
        &lt;x-mbc::button label="Retry" />
    @endslot
&lt;/x-mbc::snackbar>
