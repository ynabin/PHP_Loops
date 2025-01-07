// Display message need to send if system is in between 8-9 am, 3-4pm else message is not to send.
from datetime import datetime

# Get the current time
<?php
current_time = datetime.now().time();

# Define time ranges
morning_start = datetime.strptime("08:00", "%H:%M").time();
morning_end = datetime.strptime("09:00", "%H:%M").time();
afternoon_start = datetime.strptime("15:00", "%H:%M").time();
afternoon_end = datetime.strptime("16:00", "%H:%M").time();

# Check if current time is within the specified ranges
if (morning_start <= current_time < morning_end) or (afternoon_start <= current_time < afternoon_end):
    print("Message sent: System is within the specified time window.");
else:
    print("No message sent: System is outside the specified time window.");
    ?>
