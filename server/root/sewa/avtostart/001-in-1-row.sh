eval "$(ssh-agent -s)" && \
ssh-add -k /root/sewa/ssh/key001/sewa_key && \
ssh-add -l && \
ssh -T git@bitbucket.org