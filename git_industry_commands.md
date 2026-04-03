
1. Git Configuration Commands
## 1. git config --global user.name

### Syntax:
git config --global user.name "Your Name"

### Purpose:
Sets the global username that will be used in all Git commits.

### Example:
git config --global user.name "Venkat"

### Output:
Venkat

### Screenshot:
![Git Config Username](images/git-config-name.png)


## 2. git config --global user.email

### Syntax:
git config --global user.email "your-email@example.com"

### Purpose:
Sets the global email address associated with Git commits.

### Example:
git config --global user.email "venkat@gmail.com"

### Output:
n220341@rguktn.ac.in

### Screenshot:
![Git Config Username](images/git-config-email.png)


## 3. git config --list

### Syntax:
git config --list

### Purpose:
Displays all configured Git settings including username and email.

### Example:
git config --list

### Output:
user.name=Venkat
user.email=n220341@rguktn.ac.in

### Screenshot:
![Git Config List](images/git-config-list.png)


## 4. git config --unset

### Syntax:
git config --global --unset user.name

### Purpose:
Removes a Git configuration value.

### Example:
git config --global --unset user.name

### Output:
(No output if successfully removed)

### Screenshot:
![Git Config Unset](images/git-config-unset.png)


2. Repository Setup Commands
## 1. git init

### Syntax:
git init

### Purpose:
Initializes a new Git repository in the current directory.

### Example:
git init

### Output:
Initialized empty Git repository

### Screenshot:
![Git Init](images/git-init.png)


## 2. git clone

### Syntax:
git clone <repository-url>

### Purpose:
Creates a local copy of a remote repository.

### Example:
git clone  https://github.com/venkat-n220341/WTLab_n220341.git

### Output:
Cloning into 'repository'...

### Screenshot:
![Git Clone](images/git-clone.png)

## 3. git clone --branch

### Syntax:
git clone --branch <branch-name> <repository-url>

### Purpose:
Clones a specific branch instead of the default branch.

### Example:
git clone --branch test-branch git clone https://github.com/venkat-n220341/WTLab_n220341.git

### Screenshot:
![git clone branch](images/git-clone-branch.png)

## 4. git clone --depth

### Syntax:
git clone --depth <number> <repository-url>

### Purpose:
Performs a shallow clone with limited commit history.

### Example:
git clone --depth 1 https://github.com/venkat-n220341/WTLab_n220341.git

### Screenshot:
![git clone depth](images/git-clone-depth.png)

3. Repository Status & Inspection
## 1. git status

### Syntax:
git status

### Purpose:
Displays the current state of the working directory and staging area.

### Example:
git status

### Screenshot:
!![Git Status](images/git-status.png)

## 2. git log

### Syntax:
git log

### Purpose:
Displays detailed commit history.

### Example:
git log

### Screenshot:
![Git Log](images/git-log.png)

## 3. git log --oneline

### Syntax:
git log --oneline

### Purpose:
Displays commit history in a compact one-line format.

### Screenshot:
![Git Log Oneline](images/git-log-oneline.png)


## 4. git log --graph

### Syntax:
git log  --graph --all

### Purpose:
Displays commit history in graphical branch format.

### Screenshot:
![Git Log Graph](images/git-log-graph-all.png)


## 5. git show

### Syntax:
git show <commit-id>

### Purpose:
Displays detailed information about a specific commit.

### Screenshot:
![Git Show](images/git-show.png)


## 7. git diff --staged

### Syntax:
git diff --staged

### Purpose:
Shows differences between staging area and last commit.

### Screenshot:
![Git Diff Staged](images/git-diff.png)


## 9. git reflog

### Syntax:
git reflog

### Purpose:
Displays reference log of HEAD movements.

### Screenshot:
![Git Reflog](images/git-reflog.png)


## 10. git shortlog

### Syntax:
git shortlog

### Purpose:
Summarizes commit history grouped by author.

### Screenshot:
![Git Shortlog](images/git-shortlog.png)

4. File Tracking Commands
## 1. git add

### Syntax:
git add <file-name>

### Purpose:
Stages a specific file for the next commit.

### Example:
git add demo.txt

### Screenshot:
![Git Add](images/git-add.png)

## 2. git add .

### Syntax:
git add .

### Purpose:
Stages all modified and new files in the repository.

### Screenshot:
![git add dot](images/git-add-dot.png)

## 3. git add -p

### Syntax:
git add -p <file-name>

### Purpose:
Stages changes interactively in small sections.

### Screenshot:
![git add p](images/git-add-p.png)

## 4. git restore

### Syntax:
git restore <file-name>

### Purpose:
Discards changes in working directory.

### Screenshot:
![git restore](images/git-restore.png)

## 5. git restore --staged

### Syntax:
git restore --staged <file-name>

### Purpose:
Removes a file from the staging area without deleting changes.

### Screenshot:
![git restore staged](images/git-restore-staged.png)

## 6. git rm

### Syntax:
git rm <file-name>

### Purpose:
Removes a file from working directory and stages the deletion.

### Screenshot:
![git rm](images/git-rm.png)

## 7. git mv

### Syntax:
git mv <old-name> <new-name>

### Purpose:
Renames a file and stages the change automatically.

### Screenshot:
![git mv](images/git-mv.png)

5. commit commands

## 1. git commit

### Syntax:
git commit

### Purpose:
Creates a commit and opens editor to enter commit message.

### Example:
git commit

### Screenshot:
![git commit](images/git-commit.png)

## 2. git commit -m

### Syntax:
git commit -m "message"

### Purpose:
Creates a commit with message directly from terminal.

### Example:
git commit -m "Updated commit demo file"

### Screenshot:
![git commit m](images/git-commit-m.png)

## 3. git commit --amend

### Syntax:
git commit --amend

### Purpose:
Modifies the most recent commit.

### Example:
git commit --amend

### Screenshot:
![git amend](images/git-commit-amend.png)

## 4. git commit --no-edit

### Syntax:
git commit --amend --no-edit

### Purpose:
Amends the last commit without modifying commit message.

### Example:
git commit --amend --no-edit

### Screenshot:
![git no edit](images/git-commit-no-edit.png)

6. Branch Management commands
## 1. git branch

### Syntax:
git branch

### Purpose:
Lists all local branches in the repository.

### Example:
git branch

### Screenshot:
![git branch](images/git-branch.png)

## 2. git branch -a

### Syntax:
git branch -a

### Purpose:
Displays all local and remote branches.

### Screenshot:
![git branch a](images/git-branch-a.png)

## 3. git checkout -b

### Syntax:
git checkout -b <branch-name>

### Purpose:
Creates a new branch and switches to it.

### Example:
git checkout -b feature-branch

### Screenshot:
![git checkout b](images/git-checkout-b.png)

## 4. git checkout

### Syntax:
git checkout <branch-name>

### Purpose:
Switches to an existing branch.

### Example:
git checkout main

### Screenshot:
![git checkout](images/git-checkout.png)

## 5. git switch

### Syntax:
git switch <branch-name>

### Purpose:
Switches to another branch.

### Screenshot:
![git switch](images/git-switch.png)

## 6. git switch -c

### Syntax:
git switch -c <branch-name>

### Purpose:
Creates and switches to a new branch.

### Screenshot:
![git switch c](images/git-switch-c.png)

## 7. git branch -d

### Syntax:
git branch -d <branch-name>

### Purpose:
Deletes a branch safely.

### Screenshot:
![git branch delete](images/git-branch-d.png)

## 8. git branch -D

### Syntax:
git branch -D <branch-name>

### Purpose:
Force deletes a branch.

### Screenshot:
![git branch force delete](images/git-branch-D.png)

7. Merge & Integration Commands

## 1. git merge

### Syntax:
git merge <branch-name>

### Purpose:
Combines changes from one branch into the current branch.

### Example:
git merge merge-demo

### Screenshot:
![git merge](images/git-merge.png)

## 2. git merge --no-ff

### Syntax:
git merge --no-ff <branch-name>

### Purpose:
Creates a merge commit even when fast-forward merge is possible.

### Example:
git merge --no-ff feature-merge

### Screenshot:
![git merge no ff](images/git-merge-no-ff.png)

8. Remote Repository Commands
## 1. git remote

### Syntax:
git remote

### Purpose:
Displays remote repository names.

### Screenshot:
![git remote](images/git-remote.png)

## 2. git remote -v

### Syntax:
git remote -v

### Purpose:
Displays remote repository URLs.

### Screenshot:
![git remote v](images/git-remote-v.png)

## 3. git remote add

### Syntax:
git remote add <name> <url>

### Purpose:
Adds a new remote repository.

### Example:
git remote add upstream https://github.com/example/repo.git

### Screenshot:
![git remote add](images/git-remote-add.png)

## 4. git remote remove

### Syntax:
git remote remove <name>

### Purpose:
Removes a remote repository.

### Screenshot:
![git remote remove](images/git-remote-remove.png)

## 5. git fetch

### Syntax:
git fetch

### Purpose:
Downloads changes from remote repository without merging.

### Screenshot:
![git fetch](images/git-fetch.png)

## 6. git fetch --all

### Syntax:
git fetch --all

### Purpose:
Fetches changes from all remote repositories.

### Screenshot:
![git fetch all](images/git-fetch-all.png)

## 7. git pull

### Syntax:
git pull

### Purpose:
Fetches and merges remote changes.

### Screenshot:
![git pull](images/git-pull.png)

## 8. git pull --rebase

### Syntax:
git pull --rebase

### Purpose:
Fetches remote changes and rebases local commits.

### Screenshot:
![git pull rebase](images/git-pull-rebase.png)

## 9. git push

### Syntax:
git push

### Purpose:
Pushes local commits to remote repository.

### Screenshot:
![git push](images/git-push.png)

## 10. git push -u origin

### Syntax:
git push -u origin <branch-name>

### Purpose:
Pushes branch and sets upstream tracking.

### Screenshot:
![git push upstream](images/git-push-u.png)

## 11. git push --force

### Syntax:
git push --force

### Purpose:
Force pushes changes to remote repository.

### Screenshot:
![git push force](images/git-push-force.png)

9. Stash Commands
## 1. git stash

### Syntax:
git stash

### Purpose:
Temporarily saves uncommitted changes.

### Screenshot:
![git stash](images/git-stash.png)

## 2. git stash list

### Syntax:
git stash list

### Purpose:
Displays all saved stash entries.

### Screenshot:
![git stash list](images/git-stash-list.png)

## 3. git stash apply

### Syntax:
git stash apply

### Purpose:
Applies saved stash without removing it.

### Screenshot:
![git stash apply](images/git-stash-apply.png)

## 4. git stash pop

### Syntax:
git stash pop

### Purpose:
Applies stash and removes it from stash list.

### Screenshot:
![git stash pop](images/git-stash-pop.png)

## 5. git stash drop

### Syntax:
git stash drop stash@{0}

### Purpose:
Deletes a specific stash entry.

### Screenshot:
![git stash drop](images/git-stash-drop.png)

## 6. git stash clear

### Syntax:
git stash clear

### Purpose:
Deletes all stash entries.

### Screenshot:
![git stash clear](images/git-stash-clear.png)

10. Reset & Undo Commands
## 1. git reset

### Syntax:
git reset HEAD~1

### Purpose:
Moves HEAD to previous commit while keeping changes.

### Screenshot:
![git reset](images/git-reset.png)

## 1. git reset

### Syntax:
git reset HEAD~1

### Purpose:
Moves HEAD to previous commit while keeping changes.

### Screenshot:
![git reset](images/git-reset.png)

## 3. git reset --mixed

### Syntax:
git reset --mixed HEAD~1

### Purpose:
Undo commit and unstage changes.

### Screenshot:
![git reset mixed](images/git-reset-mixed.png)

## 4. git reset --hard

### Syntax:
git reset --hard HEAD~1

### Purpose:
Undo commit and delete changes permanently.

### Screenshot:
![git reset hard](images/git-reset-hard.png)

## 5. git revert

### Syntax:
git revert <commit-id>

### Purpose:
Creates a new commit that undoes previous commit.

### Screenshot:
![git revert](images/git-revert.png)

## 6. git clean -f

### Syntax:
git clean -f

### Purpose:
Deletes untracked files.

### Screenshot:
![git clean](images/git-clean.png)

## 7. git clean -fd

### Syntax:
git clean -fd

### Purpose:
Deletes untracked files and directories.

### Screenshot:
![git clean fd](images/git-clean-fd.png)

12. cherry pick and patch commands
## 1. git cherry-pick

### Syntax:
git cherry-pick <commit-id>

### Purpose:
Applies specific commit from another branch.

### Screenshot:
![git cherry pick](images/git-cherry-pick.png)

## 1. git cherry-pick

### Syntax:
git cherry-pick <commit-id>

### Purpose:
Applies specific commit from another branch.

### Screenshot:
![git cherry pick](images/git-cherry-pick.png)

## 3. git apply

### Syntax:
git apply <patch-file>

### Purpose:
Applies patch file to working directory.

### Screenshot:
![git apply](images/git-apply.png)









