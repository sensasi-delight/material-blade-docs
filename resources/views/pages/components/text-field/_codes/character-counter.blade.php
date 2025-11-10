&lt;!-- Text field with counter --&gt;
&lt;x-mbc::text-field label="Username" maxlength="20" :characterCounter="true" id="counter-1" />

&lt;!-- Outlined with counter --&gt;
&lt;x-mbc::text-field label="Tweet" variant="outlined" maxlength="280" :characterCounter="true" id="counter-2" />

&lt;!-- Textarea with counter --&gt;
&lt;x-mbc::text-field label="Bio" :textarea="true" :rows="4" maxlength="150" :characterCounter="true" helperText="Keep it brief" id="counter-3" />

&lt;!-- With counter and helper --&gt;
&lt;x-mbc::text-field label="Description" maxlength="100" :characterCounter="true" helperText="Maximum 100 characters" :helperTextPersistent="true" id="counter-4" />