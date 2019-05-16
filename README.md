# CoffeeCan Wordpress Site

## Contents of this readme
- [Prerequisites](#prerequisites)
- [Setting up a local environment](#setting-up-a-local-environment)
- [Theme Details](#theme-details)
- [Workflow](#workflow)
- [Wordpress](#wordpress)
- [Contributors](#contributors)
- [Dev Diaries](#dev-diaries)

## Prerequisites
- [Vagrant](https://www.vagrantup.com/)

## Setting up a local environment

### Installing the environment:
1) Navigate to the directory where you want your local environment
2) Open a Git Bash terminal in that directory (Can right click and select from context menu if Git is installed)
3) Run the command `git clone https://github.com/flurinduerst/WPDistillery.git cp3402_20`
4) Run the command `vagrant up` and wait for it to finish installing
5) Navigate to the URL [192.168.33.10/wp-admin]() and login (Username/Password: **admin**)
6) Navigate to **Plugins -> Add new** and search for **All-in-One WP Migration** and install it

### Setting up the environment:
1) Open a Git Bash terminal in the **Public** directory
2) Run the command `touch .htaccess`
3) Run the command `nano .htaccess`
4) Add these 5 lines of code within the **IfModule** block
    ````
    php_value upload_max_filesize 128M
    php_value post_max_size 128M
    php_value memory_limit 256M
    php_value max_execution_time 300`
    php_value max_input_time 300
    ````
5) Save (`Ctrl + X` Then `Y`) 

### Putting the staging site into local:
1) Navigate to the staging server and export the site as a file using the migration plugin (Located in left nav)
2) Navigate to [192.168.33.10/wp-admin]() and import the file using the migration plugin
3) Run the command `rm -r wp-content` in a Git Bash terminal within the **Public** directory
4) Run the command `git init`
5) Run the command `git remote add origin https://github.com/cp3402-students/a2-cp3402-2019-team20.git`
6) Run the command `rm -r index.php`
7) Run the command `git pull origin master`

That's it! You should now have a local environment replica of the staging site that is connected to this repository

## Theme Details:
_To Be Added_

## Workflow:

### Development:
- PHP Storm

### Collaboration:
- [Slack](https://slack.com/intl/en-au/) + [Github Integration](https://slack.github.com/)
- [Trello](https://trello.com/b/7vry2Xm0/team-20-cp3402-a2) + [Slack Integration](https://trello.com/en-AU/platforms/slack)
- Github

### Deployment:
- Git command line
- Webhooks
- [Wordmove](https://github.com/welaika/wordmove)

### Changes to staging:
**_Content changes:_**
1) Work on staging server backend directly

**_Theme changes:_**
1) Commit to this repository
2) Webhooks automatically pull in changes

### Changes to production:
1)

## Wordpress:
- **Version**: 5.0.4
- **Themes**: [Underscores](http://underscores.me/) & CoffeeCan (Developed for website)
- **Staging Site**: [178.128.223.156](http://178.128.223.156/)
- **Production Site**: [128.199.252.211](https://128.199.252.211/)

### Deployment tools setup:
- Instructions on how to setup webhooks can be found [Here](https://github.com/cp3402-students/a2-cp3402-2019-team20/blob/master/webhook-instructions.txt)
- Instructions on using [wordmove](https://wptools.it/wordmove) can be found [Here](https://github.com/cp3402-students/a2-cp3402-2019-team20/blob/master/wordmove-instructions.txt)

## Contributors:
- **[Craig Morris](https://github.com/CraigMorris1986)** - Theme Design
- **[Matthew Lewandowski](https://github.com/matthew-lewandowski)** - Theme Design
- **[Nicholas Barty](https://github.com/nickbarty)** - Content Design
- **[Kyle Ormonde](https://github.com/kyleormonde)** - Content Design
- **[Peter Menzel](https://github.com/PeterMenzel)** - Site Features / PHP

## Dev Diaries
These diaries are for team members who's work does not involve pushing to github and serve as a means of keeping track of contributions to the project
- Nicholas Barty [Dev Diary](https://github.com/cp3402-students/a2-cp3402-2019-team20/blob/master/NicholasBartyDevDiary.txt)
- Kyle Ormonde [Dev Diary](https://github.com/cp3402-students/a2-cp3402-2019-team20/blob/master/KyleOrmondeDevDiary.txt)
