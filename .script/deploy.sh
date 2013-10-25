#!/bin/bash

echo -e "\e[32mRunning script deploy...\e[0m\n"

var_dirLocal=`pwd`
var_fileReadme='README.md'
var_gitRelease=`git rev-list HEAD --count`
var_gitBranch=`git branch | grep '^\*.*' 2>/dev/null | sed 's/* //'`
var_gitHasUnstageds=`git status --short | grep "^??.*" 2>/dev/null`
var_gitHasModifieds=`git status --short | grep "^.M.*" 2>/dev/null`
var_gitHasAddeds=`git status --short | grep "^[ADM]..*" 2>/dev/null`
var_date=`date +%Y-%m-%d`

if ! [ -f $var_fileReadme ]; then 
	echo -e '\e[31mYou must be in the same directory as your '$var_fileReadme'\e[0m'
	exit;
fi

if [[ $var_gitHasUnstageds != "" ]]; then
	echo -e '\e[31m[!]\e[0m You have unstaged files. Please add them first!'
	git status --short
	exit;
fi

if [[ $var_gitHasModifieds != "" ]]; then
        echo -e '\e[31m[!]\e[0m You have modified files. Please add them first!'
	git status --short
        exit;
fi


# replace the revision number
cp $var_fileReadme /tmp
sed -e "s/\(v .*\)\..*/\1.$var_gitRelease/g" /tmp/$var_fileReadme > $var_fileReadme

# replace the release date
cp $var_fileReadme /tmp
sed -e "s/\(release date\) .*/\1 $var_date/g" /tmp/$var_fileReadme > $var_fileReadme

# begining local commit
if [[ $var_gitHasAddeds != "" ]]; then
	echo -e "\e[32m[!]\e[0m Please set the local commit message:"
	read var_gitLocalCommitMessage

	if [[ $var_gitLocalCommitMessage == "" ]]; then
		echo -e '\e[31m[!]\e[0m I cant process local commit without a message, sorry!'
		exit;
	else
		git commit -m "$var_gitLocalCommitMessage"
	fi
fi
# push to origin
echo -e "\e[32m[!]\e[0m Please set the origin name (master as default):"
read var_gitOrigin

if [[ $var_gitOrigin == "" ]]; then var_gitOrigin="master"; fi

git push origin $var_gitOrigin
