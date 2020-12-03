<?php exit; ?>
[2020-12-03 16:44:33] ERROR: Form 13 > Mailchimp API error: 400 Bad Request. Invalid Resource. test@te**.com looks fake or invalid, please enter a real email address.

Request: 
POST https://us7.api.mailchimp.com/3.0/lists/29edd2302f/members

{"status":"pending","email_address":"test@te**.com","interests":{},"merge_fields":{},"email_type":"html","ip_signup":"::1","tags":[]}

Response: 
400 Bad Request
{"type":"http://developer.mailchimp.com/documentation/mailchimp/guides/error-glossary/","title":"Invalid Resource","status":400,"detail":"test@te**.com looks fake or invalid, please enter a real email address.","instance":"a5800ab4-7ba3-41b4-b194-2390c301b89f"}
