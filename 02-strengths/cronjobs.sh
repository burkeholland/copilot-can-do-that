echo "0 21 * * 2" | crontab -
if [ $? -eq 0 ]; then
    echo "Crontab entry added successfully"
else
    echo "Failed to add crontab entry" >&2
    exit 1
fi