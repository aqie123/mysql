ssh-keygen -t rsa
/home/aqie/.ssh/id_rsa
cd /home/aqie/gits
git clone git@github.com:aqie123/mysql.git
cd mysql
git config --global user.email "2924811900@qq.com"
git config --global user.name "aqie123"
git add README.md
git commit -m "linux mysql"
git push -u origina master

