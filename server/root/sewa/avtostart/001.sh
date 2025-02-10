#!/bin/bash
echo ""
echo "whoami"
whoami

echo ""
echo "--- eval ssh-agent -s"
eval "$(ssh-agent -s)"

echo ""
echo "--- ssh-add"
ssh-add -k /root/sewa/ssh/key001/sewa_key

echo ""
echo "--- health"
ps -auxc | grep ssh-agent
ssh-add -l
ssh -T git@bitbucket.org
###ssh -T C:/Users/sewa/.ssh/sewa_key.pub git@bitbucket.org