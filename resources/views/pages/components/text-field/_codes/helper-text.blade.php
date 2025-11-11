&lt;!-- Basic helper text --&gt;
&lt;x-mbc::text-field label="Username" helperText="Choose a unique username" id="helper-1" />

&lt;!-- Persistent helper text --&gt;
&lt;x-mbc::text-field label="Password" type="password" helperText="Must be at least 8 characters" :helperTextPersistent="true" id="helper-2" />

&lt;!-- Validation message --&gt;
&lt;x-mbc::text-field label="Email" type="email" helperText="Please enter a valid email address" :helperTextValidation="true" :helperTextPersistent="true" id="helper-3" />

&lt;!-- Outlined with helper text --&gt;
&lt;x-mbc::text-field label="Phone Number" variant="outlined" helperText="Format: +1 234 567 8900" :helperTextPersistent="true" id="helper-4" />