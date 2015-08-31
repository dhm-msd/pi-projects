#!/usr/bin/env python
from crontab import CronTab
from pprint import pprint
cron    = CronTab(user='root')
job  = cron.new(command='/usr/bin/test')