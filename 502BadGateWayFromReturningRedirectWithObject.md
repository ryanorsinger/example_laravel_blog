Title:
Description: 502 bad gateway
Tags: Laravel, nginx
Body:

'Return Redirect::action('SomeController@show')->with($someObject)'

Scenario:
Every route on http://example.dev resolves appropriately or throws a 404 except for http://example.dev/this-particular-route. Navigating to example.dev/this-particular-route thows a 502 bad gateway nginx error.


On my development VM, I visit a specific route and get a 502 bad gateway nginx error.
My first instinct is to restart my dev box since I've seen an nginx 502 bad gateway error before, and a quick restart solved the problem.
After restarting the VM, I still get a 502 bad gateway error on a specific route, but all other routes in the web app resolve appropriately.

Puzzled, I figure the next logical step is to check my nginx logs. I ssh into my VM and do the following:
~ cd /var/log/nginx/
~ sudo tail example.dev-error.log

````
http {
...
fastcgi_buffers 8 16k;
fastcgi_buffer_size 32k;

Output says



Wrinkle:

Punchline:
