&lt;!-- Basic textarea (Filled) --&gt;
&lt;x-mbc::text-field label="Description" :textarea="true" :rows="4" id="textarea-1" />

&lt;!-- Textarea (Outlined) --&gt;
&lt;x-mbc::text-field label="Comments" variant="outlined" :textarea="true" :rows="5" id="textarea-2" />

&lt;!-- Textarea with helper text --&gt;
&lt;x-mbc::text-field label="Bio" :textarea="true" :rows="6" helperText="Tell us about yourself" id="textarea-3" />

&lt;!-- Textarea with value --&gt;
&lt;x-mbc::text-field label="Message" variant="outlined" :textarea="true" :rows="4" value="This is a pre-filled message." id="textarea-4" />