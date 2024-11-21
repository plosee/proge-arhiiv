#!/bin/bash
echo "=== Log File Permissions Audit ==="
find /var/log/clients -type f -exec stat -c "%n %a %U %G" {} \;
echo "=== Logging User Privileges ==="
sudo -u loguser touch /var/log/clients/test 2>&1
echo "=== Open Log Files ==="
lsof | grep /var/log/clients
