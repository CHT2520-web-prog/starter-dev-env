# Basic Development Set-Up for CHT2520 Advanced Web Programming

This repository is a template for creating a basic development set-up for CHT2520.

## Create a GitHub account
First make sure you have GitHub account. 
- Visit https://github.com/ and select 'Sign in' and then 'Create an account'.
- Register using your university email account as you should eventually be able to upgrade to a Student Developer Pack.

## Getting started with Codespaces
To get started, click on the green button in the top-left on this repository that says 'Use this template' and then select 'Open in a codespace'.

It will probably take a few minutes to set-up the codespace.

This codespace is where you will do all your practical work in the module. 

You will use separate codespaces for the assignment.

In the codespace, using the file explorer, create a new folder. Name it 'test'.

Inside this folder create a new page. Name it 'index.php'.

Enter the following into this page:

```html
<!DOCTYPE html>
<html>
<head>
    <title>Introduction to PHP</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<?php
echo "Welcome to CHT2520";
?>
</body>
</html>
```
Save the page

In the terminal `cd` into this directory i.e.
```
cd test
```
Now you start PHP's built-in web server
```
php -S 0.0.0.0:8000
```

A new browser tab should open showing _index.php_. 

Back in your codespace, make a simple change to the message e.g. add the title of the module.

Save the file

Switch to the second tab

Refresh the page and confirm the changes have taken place.

This is the basic workflow we will follow to develop and test our PHP applications.

## When you've finished working

- Close both tabs.
- Visit [https://github.com/codespaces](https://github.com/codespaces).
- Find the codespace you have just created (it should say it is active).
- Click on the three dots and select 'Stop codespace'.

## Next time you want to do some work

- Visit [https://github.com/codespaces](https://github.com/codespaces).
- Click on the name of the codespace you want to open.