p2-child-theme
==============

This is a child theme for the p2 theme from Automattic. The changes are mostly stylistic; I added another menu, changed the prompt on the front-end post form, and made some CSS changes. This is my first attempt at a child theme and so I'm sure it can be improved upon significantly!

This child theme includes:

.htaccess – allow only logged-in users to view files that were uploaded
footer.php – credits
functions.php – Add a secondary menu, redirect users to front page after login
header.php – Call the secondary menu
post-form.php – Removes “Status Update,” “Quote” and “Link” options, and retitles “Blog Post” to “New Discussion.”
style.css – Widens and fancifies the theme

In CSS, I created a class called "summary" that I use when I have posted something really long and detailed and I want to sum it up at the end. Basically like blockquote but...different.
