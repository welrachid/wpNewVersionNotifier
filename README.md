# wpNewVersionNotifier
PHP based cronjob project that checks for new wordpress version and if it has changed will email you.

Just input your email adress in the receiver array and give in a valid sender email address, then you are good to go.
Make sure that you have permissions to write in the same directory the script executes, since we need to store the "latest" version of WP locally.
DOES NOT require database access.

Cronjob will make a request to wordpress.org site in each run. Therefore consider if running the cronjob once a minute is a good idea or not. Once every 5-10 minutes should be enough.

Enjoy.
Let me know if you have some improvements
