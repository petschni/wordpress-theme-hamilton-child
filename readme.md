## About this project
I found the lovely wordpress themes that Anders (http://www.andersnoren.se) is creating and liked elements that are spread across different themes.

I created a child theme of the [hamilton theme](http://www.andersnoren.se/teman/hamilton-wordpress-theme/) and took e.g. the search bar element from the [hitchcock theme](http://www.andersnoren.se/teman/hitchcock-wordpress-theme/).

## How to use it
Download the hamilton and hamilton-child theme and place it in your themes folder.
In the hamilton folder you need to replace in the ```header.php```:



```
<ul class="alt-nav">
```

with

```
<ul class="alt-nav main-menu">
  <?php get_search_form(); ?>
```

Hope to find a smoother solution for this in the future.
