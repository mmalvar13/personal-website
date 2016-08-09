# personal-website


## PWP Milestone 1 Feedback
Excellent work on milestone 1! Your purpose, audience, goal, persona, and use case are all clear and descriptive, and your HTML adheres to our style guide well.

Your Milestone 1 Passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric). Information regarding milestone 2 can be found in the [Milestone 2 Documentation](https://bootcamp-coders.cnm.edu/projects/personal/milestone-two).

### Edits &amp; Suggestions

- Usually `<p>` and `<ol>` tags are not indented in another level from `<h*>` tags, but it does increase code legibility so I'm going to give you a pass on that.

## PWP Milestone 2&alpha; Feedback
Nice work here. I really like your simple and narrow focus for what will be your MVP/first iteration of your site.

I'm a little unclear on the navigation layout for the full-width pages based on the wireframes here. It looks like you have some specific ideas you'd like to implement. Remember that nav menus can be a bit complex, so use caution and be very clear on how you would like this part of you page to look and function. It almost looks like you have the navbar at the bottom of the page on the full-screen Home Page layout... am I seeing this correctly? (Cool idea!) You may need to show/hide more than one version of the nav for mobile and full-screen for a unique and creative header layout. Bootstrap has built-in classes for that.

It looks like this will be a very Bootstrap-friendly layout, but it may be a bit tricky HTML-wise. I strongly recommend you give the [Bootstrap Challenge](https://bootcamp-coders.cnm.edu/~rlewis37/bootstrap-practice/) exercise a shot (if you haven't already), as this will be great practice before you begin building your PWP.

There are quite a few options open to you regarding your Portfolio Gallery. Bootstrap has a built-in [Slideshow Carousel](http://getbootstrap.com/javascript/#carousel) that you can use, although its customization is a bit limited. There are also other decent jQuery driven slideshow plugins you can use too, such as [Flickity](http://flickity.metafizzy.co/) and the [Owl Carousel](http://www.owlcarousel.owlgraphic.com/). If you would like more of a "lightbox gallery" effect (not a slider, but a popup), [Swipebox](http://brutaldesign.github.io/swipebox/) provides a nice jQuery plugin as well.

It's important that your gallery or slideshow be responsive and mobile/touch friendly. A good quality plugin will feature this. I would beware of having four thumbnails side-by-side on the smallest screens - this may be too compact on very narrow devices. Perhaps two-by-two would be safer on screens less than 768px. Just something to consider. 

We are planning on covering JavaScript later this week. Some of the scroll effects you noted in your wireframes are best implemented using jQuery, which is a JavaScript library that provides a simplified syntax. Use DevTools to take a look at the custom JavaScript files on my examples, and on bootcamp-coders to get a feel for how these are built when you get to it.  For Example: [Simple Template JS](https://github.com/rlewis2892/simple-template/blob/master/public_html/js/custom-javascript.js) and [Stellar Parallax Example](https://bootcamp-coders.cnm.edu/class-materials/bootstrap/js/stellar-parallax.js) and [bootcamp-coders](https://bootcamp-coders.cnm.edu/lib/js/custom.js)

Overall, nice work here. Your site map and content strategy are well done. Additional refinement on your UI in the wireframes may help you as you begin development. Your Milestone 2&alpha; passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric) You are clear to begin development on your PWP.

### Edits &amp; Suggestions
- move your /images directory inside `/public_html`
- don't forget the `alt` attribute on your images
