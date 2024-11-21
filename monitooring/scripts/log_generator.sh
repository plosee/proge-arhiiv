#!/bin/bash
while true; do
    # Simulate different types of events
    case $((RANDOM % 4)) in
        0) logger -p auth.info "User login successful from $(shuf -n 1 /etc/hosts)";;
        1) logger -p kern.warning "High CPU usage detected: $((50 + RANDOM % 50))%";;
        2) logger -p daemon.error "Database connection timeout after 30s";;
        3) logger -p syslog.info "Backup completed successfully, $(date)";;
    esac
    sleep $((2 + RANDOM % 5))
done
EOF
