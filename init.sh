#!/bin/sh

set -eux
cd $(dirname $0)

chmod 777 logs resources temporary upload
git clone https://github.com/abatanx/waggo8.1 sys/waggo8.1
git clone https://github.com/yash268925/waggo81-vite sys/plugins/waggo81-vite

sys/plugins/waggo81-vite/install/install.sh

rm init.sh
