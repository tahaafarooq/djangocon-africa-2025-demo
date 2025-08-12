#!/bin/bash
## Make sure to run this script as root
# first copy webapp to /opt/webapp
cp -r webapp/ /opt/webapp

# copy the service to /etc/systemd/system/luffy.service
cp webapp/luffy.service /etc/systemd/system/luffy.service

# create virtual environment
cd /opt/webapp
python3 -m venv venv

# install requirements
pip3 install -r requirements.txt

# launch the service
sudo systemctl daemon-reload
sudo systemctl enable --now luffy.service
sudo systemctl start luffy.service