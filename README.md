# Exercises and Examples
*This repository contains exercies & examples for web development.*

### Basic work flow and commands-
####  To contribute
1. Fork this repository.
2. Clone the Forked repository in your local machine. `git clone git@github.com:/exercises-and-examples.git`
2.1 Add a upstream to the original repository. `git remote add upstream https://github.com/JayKandari/exercises-and-examples.git`
#### To make changes to the repository
1. Create a new feature branch. 
Eg: if we want to create a feature branch named "update-readme".
`git checkout -b update-readme.`

2. Make changes to the repository.
   `git add filename.php`

3. Commit the new changes locally.
   `git commit -m 'Message for the changes made.'`

4. Push new changes to the Forked Repository.
   `git push -u origin`

5. Create a Pull Request to original Repository.
  - Goto the link which is provided after doing a push. OR Goto Forked repository and click the automated PR generation link.
  - Add all required details to Title/Body field of the new pull request and click "Create pull request" to create a new PR.
6. Wait for maintainer to merge the pull request.

7. Pull the latest development branch to see the new changes. `git pull upstream master`

© 2020 GitHub, Inc.