#!/bin/sh
mv head.html head.html.bak && mv head1.html head.html
curl 127.0.0.1:1234 > html/1-index.html
curl 127.0.0.1:1234/biopano.php > html/2-biopano.html
curl 127.0.0.1:1234/develop.php > html/3-develop.html
curl 127.0.0.1:1234/requirements.php > html/4-requirements.html
curl 127.0.0.1:1234/human_practice.php > html/5-human_practice.html
curl 127.0.0.1:1234/team.php > html/6-team.html
curl 127.0.0.1:1234/acknowledge.php > html/7-acknowledge.html
mv head.html head1.html && mv head.html.bak head.html
