<?php 
include __DIR__ . '/testing.php';

/**
SSH key add on Github:
ssh-keygen -t rsa -b 4096 -C "your_email@example.com"
create file with indicated name
than enter.
copy and paste into https://github.com/settings/keys
 * git@github.com:codersaiful/Gits.git ssh
 * 
 * 
 * echo "# Gits" >> README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin git@github.com:codersaiful/Gits.git
git push -u origin master
…or push an existing repository from the command line
git remote add origin git@github.com:codersaiful/Gits.git
git push -u origin master


echo "# Gits" >> README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/codersaiful/Gits.git
git push -u origin master
…or push an existing repository from the command line
git remote add origin https://github.com/codersaiful/Gits.git
git push -u origin master
 */