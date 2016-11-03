# Redesigned SCCS Website

A Jekyll-based redesign of the unfortunately sparse 
[Swarthmore College Computer Society](https://www.sccs.swarthmore.edu/) website.

## How-to
See the [Jekyll website](https://jekyllrb.com/docs/home/) for tutorials, etc.

### Setup
`bundle install`

### Development
To run a dev server: `bundle exec jekyll server`

### Deploying
`bundle exec jekyll build` (builds into the `destination` specified in
`config.yml`)

### What is all this stuff??
- `_config.yml` contains settings for the site
- `_layouts/` contains `default.html`, the default template for the site
- `_includes/` contains various parts of the website which are used often/which
would otherwise clutter `_layouts/default`
- `_scss/` contains all the CSS/SCSS files
- `_posts/` contains all the posts that appear on the homepage, in .md format
- `index.html` is the body of the homepage
- `about/` and `faqs` contain the content of those respective pages


## Todos
- [x] Have links to services and information about those services (Cygnet, GUTS,
  RSD)
- [x] FAQs: how to reset password? how to reactivate account due to inactivity?
- [ ] Have information about how to create an account
- [ ] Look awesome
- [ ] Add more to history (and potentially make history a separate page)
- [ ] Add info about game pit (and potentially make a separate page dedicated to
  the game pit)
- [ ] Make everything flashier (pictures, etc.)


&copy;2016 SCCS



