<?php 
include __DIR__ . '/testing.php';

/**
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