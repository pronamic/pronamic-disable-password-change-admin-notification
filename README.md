# Pronamic Disable Password Change Admin Notification

Prevents WordPress from sending email notifications to the site admin when a user changes their password.

## WordPress email documentation `johnbillion/wp_mail`

<table>
	<tr>
		<th scope="row" valign="top" align="left">To</th>
		<td>Site admin</td>
	</tr>
	<tr>
		<th scope="row" valign="top" align="left">From</th>
		<td>WordPress &lt;wordpress@host&gt;</td>
	</tr>
	<tr>
		<th scope="row" valign="top" align="left">Subject</th>
		<td>[%s] Password Changed</td>
	</tr>
	<tr>
		<th scope="row" valign="top" align="left">Function</th>
		<td><a href="https://developer.wordpress.org/reference/functions/wp_password_change_notification/"><code>wp_password_change_notification()</code></a></td>
	</tr>
	<tr>
		<th scope="row" valign="top" align="left">Pluggable</th>
		<td>Yes</td>
	</tr>
	<tr>
		<th scope="row" valign="top" align="left">Filters</th>
		<td>
			<a href="https://developer.wordpress.org/reference/hooks/wp_password_change_notification_email/"><code>wp_password_change_notification_email</code></a>
		</td>
	</tr>
	<tr>
		<th scope="row" valign="top" align="left">Disable</th>
		<td>
			- Remove <a href="https://developer.wordpress.org/reference/functions/wp_password_change_notification/"><code>wp_password_change_notification</code></a> action from the <a href="https://developer.wordpress.org/reference/hooks/after_password_reset/"><code>after_password_reset</code></a> hook<br>
			- Overwrite the pluggable <a href="https://developer.wordpress.org/reference/functions/wp_password_change_notification/"><code>wp_password_change_notification()</code></a> function<br>
		</td>
	</tr>
</table>

https://github.com/johnbillion/wp_mail?tab=readme-ov-file#change-of-user-email-or-password

## Links

- https://github.com/pronamic/gravitysmtp/issues/1
- https://github.com/johnbillion/wp_mail?tab=readme-ov-file#change-of-user-email-or-password
- https://wordpress.org/plugins/disable-user-password-reset-emails/
- https://developer.wordpress.org/reference/functions/wp_password_change_notification/
