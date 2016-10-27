# FrontendBuddy: Web developer's best friend.
## Dynamic Web Applications: Harvard Fall 2016

Kevin Burek <kev[...]@g[...].com>
Submitted as DWA (CSCI-E15) [Project 3](http://dwa15.com/Projects.../P3) 2016-10-27.

This site is published at [http://p3.dwa-e15.kb0.org/](http://p3.dwa-e15.kb0.org/)

This site is demonstrated at [https://youtu.be/RHvFrhz5u-k](https://youtu.be/RHvFrhz5u-k)

## Site content
The site provides randomized filler content appropriate for a web frontend developer to use in a
design mock-up.

The site consists of:
* A landing page, with a generated random user and lorem ipsum text.  Forms on the landing page can
be used to generate more of each.
* A page displays a number of randomly generated user profiles.
* A page displays some amount of randomly generated lorem ipsum text.

I'm really into data URIs lately, so the line-art snail in the header is inlined into the HTML.  
I know this messes up caching.  I kept it anyways. 

Backend (php/laravel) package dependencies:
  * [badcow/loremipsum](https://packagist.org/packages/badcow/lorem-ipsum) For lorem ipsum text.
  * [fzaninotto/faker](https://packagist.org/packages/fzaninotto/faker) For randomized user profile content.
  * [yzalis/identicon](https://packagist.org/packages/yzalis/identicon) For generated user profile images.
  
Others of interest, but not used:
  * [redeyeventures/geopattern](https://packagist.org/packages/redeyeventures/geopattern) Seems promising for generated imagery.

In the frontend, this site uses [bootstrap](http://getbootstrap.com/) and [jquery](http://jquery.com/).  The CSS is
all new, no templates were used.
