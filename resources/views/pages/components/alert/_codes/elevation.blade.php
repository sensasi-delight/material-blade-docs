&lt;!-- Elevation ranges from 0 (no shadow) to 24 (maximum shadow) -->

&lt;x-mbc::alert elevation="0" variant="outlined">
    Elevation 0 - No shadow (default)
&lt;/x-mbc::alert>

&lt;x-mbc::alert elevation="4" variant="outlined">
    Elevation 4 - Subtle shadow
&lt;/x-mbc::alert>

&lt;x-mbc::alert elevation="8" variant="outlined">
    Elevation 8 - Medium shadow
&lt;/x-mbc::alert>

&lt;x-mbc::alert elevation="16" variant="outlined" severity="info">
    Elevation 16 - Deep shadow
&lt;/x-mbc::alert>

&lt;x-mbc::alert elevation="24" variant="outlined" severity="warning">
    Elevation 24 - Maximum shadow
&lt;/x-mbc::alert>

&lt;!-- Elevation can be combined with any variant, severity, or color -->
&lt;x-mbc::alert elevation="6" variant="filled" severity="error">
    Filled alert with elevation
&lt;/x-mbc::alert>

&lt;x-mbc::alert elevation="8" variant="standard" color="purple">
    Custom colored alert with elevation
&lt;/x-mbc::alert>
