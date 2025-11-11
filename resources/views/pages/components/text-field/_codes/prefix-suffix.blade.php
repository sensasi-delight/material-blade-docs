&lt;!-- Prefix (Currency) --&gt;
&lt;x-mbc::text-field label="Amount" prefix="$" type="number" id="prefix-1" />

&lt;!-- Suffix (Unit) --&gt;
&lt;x-mbc::text-field label="Weight" suffix="kg" type="number" variant="outlined" id="prefix-2" />

&lt;!-- Both prefix and suffix --&gt;
&lt;x-mbc::text-field label="Price" prefix="$" suffix="USD" type="number" id="prefix-3" />

&lt;!-- With icon and prefix --&gt;
&lt;x-mbc::text-field label="Website" leadingIcon="language" prefix="https://" variant="outlined" id="prefix-4" />

&lt;!-- With suffix and helper --&gt;
&lt;x-mbc::text-field label="Distance" suffix="miles" type="number" helperText="Enter the distance in miles" id="prefix-5" />