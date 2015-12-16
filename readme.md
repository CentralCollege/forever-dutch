Forever Dutch Wordpress theme
===================

Setup
-------------------
Before changing any code:

- Run `bower install` to setup JavaScript library dependencies.
- Run `grunt concat uglify` to compile JavaScript.

Development
-------------------
This repository is configured with a grunt watch task that will automatically build a compressed JavaScript file you to use. When you start working, type `grunt` at the command line for this to start working.

Travis CI
-------------------
CSS and JavaScript files are tested via Tavis CI. If your build doesn't pass, then it won't qualify for a merge.

[![Build Status](https://travis-ci.org/CentralCollege/forever-dutch.svg)](https://travis-ci.org/CentralCollege/forever-dutch)

Release History
-------------------
v0.0.0 - Initial commit
